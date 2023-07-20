<?php

namespace App\Http\Controllers;

use App\Models\FormPemas;
use App\Models\Notification;
use App\Http\Requests\StoreFormPemasRequest;
use App\Http\Requests\UpdateFormPemasRequest;

class FormPemasController extends Controller
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

        return view('dashboard.sidebar.pengajuan.pengmas', compact('formpemas', 'totalPages', 'currentPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formpemas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormPemasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormPemasRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'name_pemas' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);

        $formpemas = new FormPemas();
        $formpemas->name = $request->name;
        $formpemas->nik = $request->nik;
        $formpemas->name_pemas = $request->name_pemas;
        $formpemas->location = $request->location;
        $formpemas->description = $request->description;
        $formpemas->save();

        $notification = new Notification();
        $notification->model()->associate($formpemas); // Menghubungkan dengan model FormPemas
        $notification->content = 'Pengajuan Formulir Pengabdian Masyarakat baru telah dibuat.';
        $notification->save();

        return redirect()->route('pengmas')->with('success', 'Formulir Pengajuan Pengabdian Masyarakat Berhasil Diajukan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormPemas  $formPemas
     * @return \Illuminate\Http\Response
     */
    public function show(FormPemas $formPemas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormPemas  $formPemas
     * @return \Illuminate\Http\Response
     */
    public function edit(FormPemas $formPemas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormPemasRequest  $request
     * @param  \App\Models\FormPemas  $formPemas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormPemasRequest $request, FormPemas $formPemas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormPemas  $formPemas
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormPemas $formPemas)
    {
        //
    }
}
