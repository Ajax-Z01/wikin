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
        //
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
        $formkeluh->name = $request->name;
        $formkeluh->nik = $request->nik;
        $formkeluh->email = $request->email;
        $formkeluh->location = $request->location;
        $formkeluh->description = $request->description;
        $formkeluh->save();

        $notification = new Notification();
        $notification->model()->associate($formkeluh); // Menghubungkan dengan model FormKeluh
        $notification->content = 'Pengajuan Formulir Keluhan baru telah dibuat.';
        $notification->save();

        return redirect()->route('formkeluh.create')->with('success', 'Formulir Keluhan berhasil diajukan.');
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
