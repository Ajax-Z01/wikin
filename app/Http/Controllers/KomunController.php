<?php

namespace App\Http\Controllers;

use App\Models\Komun;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKomunRequest;
use App\Http\Requests\UpdateKomunRequest;

class KomunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formsPerPage = 10;
        $totalForms = Komun::count();
        $totalPages = ceil($totalForms / $formsPerPage);
        $currentPage = request()->page ?? 1;

        $query = Komun::query()->latest();

        // Filter berdasarkan pencarian judul
        if (request()->has('search')) {
            $search = request()->input('search');
            $query->where('name', 'LIKE', "%$search%")->orWhere('contact', 'LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%");
        }

        $komuns = $query->skip(($currentPage - 1) * $formsPerPage)->take($formsPerPage)->get();

        return view('dashboard.sidebar.pengajuan.pengkom', compact('komuns', 'totalPages', 'currentPage'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function komunitas()
    {
        $formsPerPage = 10;
        $totalForms = Komun::count();
        $totalPages = ceil($totalForms / $formsPerPage);
        $currentPage = request()->page ?? 1;

        $query = Komun::query()->latest();

        // Filter berdasarkan pencarian judul
        if (request()->has('search')) {
            $search = request()->input('search');
            $query->where('name', 'LIKE', "%$search%")->orWhere('contact', 'LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%");
        }

        $komuns = $query->skip(($currentPage - 1) * $formsPerPage)->take($formsPerPage)->get();

        return view('dashboard.sidebar.menukelola.komunitas', compact('komuns', 'totalPages', 'currentPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKomunRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKomunRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $komun = new Komun();
        $komun->user_id = $request->input('user_id');
        $komun->name = $request->input('name');
        $komun->contact = $request->input('contact');
        $komun->description = $request->input('description');

        if ($request->hasFile('image')) {
            $name = Str::slug($request->name) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $name);
            $komun->image = '/uploads/' . $name;
        }

        $komun->save();

        $notification = new Notification();
        $notification->model()->associate($komun); // Menghubungkan dengan model Komun()
        $notification->content = 'Komunitas baru telah ditambahkan!';
        $notification->save();

        return redirect()->route('komunitas')->withSuccess('Komunitas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Komun  $komun
     * @return \Illuminate\Http\Response
     */
    public function show(Komun $komun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Komun  $komun
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'contact' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $komun = Komun::find($id);
        $komun->user_id = $request->input('user_id');
        $komun->name = $request->input('name');
        $komun->contact = $request->input('contact');
        $komun->description = $request->input('description');

        if ($request->hasFile('image')) {
            $name = Str::slug($request->name) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $name);
            $komun->image = '/uploads/' . $name;
        }

        $komun->save();

        $notification = new Notification();
        $notification->model()->associate($komun); // Menghubungkan dengan model Komun
        $notification->content = 'Komunitas telah diperbarui!';
        $notification->save();

        return redirect()->route('komunitas')->withSuccess("Komunitas berhasil diperbarui!");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKomunRequest  $request
     * @param  \App\Models\Komun  $komun
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKomunRequest $request, Komun $komun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Komun  $komun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komun $komun)
    {
        //
    }
}
