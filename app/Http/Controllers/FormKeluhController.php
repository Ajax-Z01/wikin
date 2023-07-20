<?php

namespace App\Http\Controllers;

use App\Models\FormKeluh;
use App\Models\Notification;
use App\Http\Requests\StoreFormKeluhRequest;
use App\Http\Requests\UpdateFormKeluhRequest;

class FormKeluhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formsPerPage = 10;
        $totalForms = FormKeluh::count();
        $totalPages = ceil($totalForms / $formsPerPage);
        $currentPage = request()->page ?? 1;

        $query = FormKeluh::query()->latest();

        // Filter berdasarkan pencarian judul
        if (request()->has('search')) {
            $search = request()->input('search');
            $query->where('name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->orWhere('subject', 'LIKE', "%$search%");
        }

        $formkeluh = $query->skip(($currentPage - 1) * $formsPerPage)->take($formsPerPage)->get();

        return view('dashboard.sidebar.keluhan.keluhan', compact('formkeluh', 'totalPages', 'currentPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formkeluh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormKeluhRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormKeluhRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'email' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);

        $formkeluh = new FormKeluh();
        $formkeluh->name = $request->input('name');
        $formkeluh->nik = $request->input('nik');
        $formkeluh->email = $request->input('email');
        $formkeluh->location = $request->input('location');
        $formkeluh->description = $request->input('description');
        $formkeluh->save();

        $notification = new Notification();
        $notification->model()->associate($formkeluh); // Menghubungkan dengan model FormKeluh
        $notification->content = 'Pengajuan Formulir Keluhan baru telah dibuat.';
        $notification->save();

        return redirect()->route('keluhan')->with('success', 'Formulir Keluhan berhasil diajukan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormKeluh  $formKeluh
     * @return \Illuminate\Http\Response
     */
    public function show(FormKeluh $formKeluh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormKeluh  $formKeluh
     * @return \Illuminate\Http\Response
     */
    public function edit(FormKeluh $formKeluh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormKeluhRequest  $request
     * @param  \App\Models\FormKeluh  $formKeluh
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormKeluhRequest $request, FormKeluh $formKeluh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormKeluh  $formKeluh
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormKeluh $formKeluh)
    {
        //
    }
}
