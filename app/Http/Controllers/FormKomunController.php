<?php

namespace App\Http\Controllers;

use App\Models\FormKomun;
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

        return view('formkomun', compact('formkomun', 'totalPages', 'currentPage'));
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
            'company_name' => 'required',
            'email' => 'required',
            'location' => 'required',
            'description' => 'required',
            'logo_image' => 'required',
        ]);

        $formkomun = new FormKomun();
        $formkomun->name = $request->name;
        $formkomun->company_name = $request->company_name;
        $formkomun->email = $request->email;
        $formkomun->location = $request->location;
        $formkomun->description = $request->description;
        $formkomun->logo_image = $request->logo_image;
        $formkomun->save();

        $notification = new Notification();
        $notification->model()->associate($formkomun); // Menghubungkan dengan model FormKomun
        $notification->content = 'Pengajuan Formulir Komunitas baru telah dibuat.';
        $notification->save();

        return redirect()->route('formkomun.create')->with('success', 'Formulir Pengajuan Komunitas berhasil diajukan.');
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
    public function destroy(FormKomun $formKomun)
    {
        //
    }
}
