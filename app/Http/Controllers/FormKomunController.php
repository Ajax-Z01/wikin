<?php

namespace App\Http\Controllers;

use App\Models\FormKomun;
use Illuminate\Support\Str;
use App\Models\Notification;
use App\Http\Requests\StoreFormKomunRequest;
use App\Http\Requests\UpdateFormKomunRequest;

class FormKomunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formsPerPage = 10;
        $totalForms = FormKomun::count();
        $totalPages = ceil($totalForms / $formsPerPage);
        $currentPage = request()->page ?? 1;

        $query = FormKomun::query()->latest();

        // Filter berdasarkan pencarian judul
        if (request()->has('search')) {
            $search = request()->input('search');
            $query->where('name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->orWhere('subject', 'LIKE', "%$search%");
        }

        $formkomun = $query->skip(($currentPage - 1) * $formsPerPage)->take($formsPerPage)->get();

        return view('dashboard.sidebar.pengajuan.pengkom-admin', compact('formkomun', 'totalPages', 'currentPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formkomun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormKomunRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormKomunRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'comunity_name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'logo_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $formkomun = new FormKomun();
        $formkomun->name = $request->input('name');
        $formkomun->comunity_name = $request->input('comunity_name');
        $formkomun->email = $request->input('email');
        $formkomun->description = $request->input('description');

        if ($request->hasFile('logo_image')) {
            $name = Str::slug($request->name) . '.' . $request->logo_image->extension();
            $request->logo_image->move(public_path('uploads'), $name);
            $formkomun->logo_image = '/uploads/' . $name;
        }

        $formkomun->save();

        $notification = new Notification();
        $notification->model()->associate($formkomun); // Menghubungkan dengan model FormKomun
        $notification->content = 'Pengajuan Formulir Komunitas baru telah dibuat.';
        $notification->save();

        return redirect()->route('pengkom')->with('success', 'Formulir Pengajuan Komunitas berhasil diajukan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormKomun  $formKomun
     * @return \Illuminate\Http\Response
     */
    public function show(FormKomun $formKomun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormKomun  $formKomun
     * @return \Illuminate\Http\Response
     */
    public function edit(FormKomun $formKomun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormKomunRequest  $request
     * @param  \App\Models\FormKomun  $formKomun
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormKomunRequest $request, FormKomun $formKomun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormKomun  $formKomun
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formkomun = FormKomun::find($id);
        unlink(public_path($formkomun->logo_image)); // Menghapus gambar dari folder public/uploads
        $formkomun->delete();

        $notification = new Notification();
        $notification->model()->associate($formkomun); // Menghubungkan dengan model FormKomun
        $notification->content = 'Formulir Komunitas baru telah dihapus.';
        $notification->save();

        return redirect()->route('pengkom')->withSuccess('Formulir Komunitas berhasil dihapus.');
    }
}
