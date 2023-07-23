<?php

namespace App\Http\Controllers;

use App\Models\Pengmas;
use App\Models\FormPemas;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;

class PengmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formsPerPage = 10;
        $totalForms = FormPemas::count();
        $totalPages = ceil($totalForms / $formsPerPage);
        $currentPage = request()->page ?? 1;

        $query = FormPemas::query()->latest();

        // Filter berdasarkan pencarian judul
        if (request()->has('search')) {
            $search = request()->input('search');
            $query->where('name', 'LIKE', "%$search%")->orWhere('name_pemas', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%");
        }

        $formpemas = $query->skip(($currentPage - 1) * $formsPerPage)->take($formsPerPage)->get();

        $formsPerPage2 = 10;
        $totalForms2 = Pengmas::count();
        $totalPages2 = ceil($totalForms2 / $formsPerPage2);
        $currentPage2 = request()->page ?? 1;

        $query = Pengmas::query()->latest();

        // Filter berdasarkan pencarian judul
        if (request()->has('search')) {
            $search = request()->input('search');
            $query->where('name', 'LIKE', "%$search%")->orWhere('location', 'LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%");
        }

        $pengmas = $query->skip(($currentPage2 - 1) * $formsPerPage2)->take($formsPerPage2)->get();

        return view('dashboard.sidebar.pengajuan.pengmas', compact('formpemas', 'totalPages', 'currentPage', 'pengmas', 'totalPages2', 'currentPage2'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pengmas = new Pengmas();
        $pengmas->name = $request->input('name');
        $pengmas->location = $request->input('location');
        $pengmas->description = $request->input('description');
        $pengmas->content = $request->input('content');
        $pengmas->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $name = Str::slug($request->name) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $name);
            $pengmas->image = '/uploads/' . $name;
        }

        $pengmas->save();

        $notification = new Notification();
        $notification->model()->associate($pengmas); // Menghubungkan dengan model Pengmas()
        $notification->content = 'Postingan Pengabdian Masyarakat baru telah dibuat.';
        $notification->save();

        return redirect()->route('pengmas')->withSuccess('Postingan Pengabdian Masyarakat berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengmas  $pengmas
     * @return \Illuminate\Http\Response
     */
    public function show(Pengmas $pengmas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengmas  $pengmas
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pemas = Pengmas::find($id);
        $pemas->name = $request->input('name');
        $pemas->location = $request->input('location');
        $pemas->description = $request->input('description');
        $pemas->content = $request->input('content');
        $pemas->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $name = Str::slug($request->name) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $name);
            $pemas->image = '/uploads/' . $name;
        }

        $pemas->save();

        $notification = new Notification();
        $notification->model()->associate($pemas); // Menghubungkan dengan model Pengmas
        $notification->content = 'Postingan Pengabdian Masyarakat telah diperbarui.';
        $notification->save();

        return redirect()->route('pengmas')->withSuccess("Postingan Pengabdian Masyarakat berhasil diperbarui.");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengmas  $pengmas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengmas $pengmas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengmas  $pengmas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengmas $pengmas)
    {
        //
    }
}
