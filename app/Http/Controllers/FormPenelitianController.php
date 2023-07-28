<?php

namespace App\Http\Controllers;

use App\Models\FormPenelitian;
use App\Http\Requests\UpdateFormPenelitianRequest;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;

class FormPenelitianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formsPerPage = 10;
        $totalForms = FormPenelitian::count();
        $totalPages = ceil($totalForms / $formsPerPage);
        $currentPage = request()->page ?? 1;

        $query = FormPenelitian::query()->latest();

        // Filter berdasarkan pencarian judul
        if (request()->has('search')) {
            $search = request()->input('search');
            $query->where('name', 'LIKE', "%$search%")->orWhere('name_penelitians', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%");
        }
        $penelitians = $query->skip(($currentPage - 1) * $formsPerPage)->take($formsPerPage)->get();

        return view('dashboard.sidebar.pengajuan.penelitian', compact('penelitians', 'totalPages', 'currentPage'));
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
     * @param  \App\Http\Requests\StoreFormPenelitianRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'name_penelitian' => 'required',
            'location' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $peneltians = new Formpenelitian();
        $peneltians->user_id = $request->input('user_id');
        $peneltians->name_penelitian = $request->input('name_penelitian');
        $peneltians->location = $request->input('location');
        $peneltians->description = $request->input('description');
        $peneltians->content = $request->input('content');
        $peneltians->slug = Str::slug($request->name_penelitian);

        if ($request->hasFile('image')) {
            $name = Str::slug($request->name_penelitian) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $name);
            $peneltians->image = '/uploads/' . $name;
        }

        $peneltians->save();

        $notification = new Notification();
        $notification->model()->associate($peneltians); // Menghubungkan dengan model Pengmas()
        $notification->content = 'Postingan Penelitian Kenukliaran baru telah dibuat.';
        $notification->save();

        return redirect()->route('penelitian')->withSuccess('Postingan Penelitian Kenukliran berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormPenelitian  $formPenelitian
     * @return \Illuminate\Http\Response
     */
    public function show(FormPenelitian $formPenelitian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormPenelitian  $formPenelitian
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'name_penelitian' => 'required',
            'location' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $penelitians = FormPenelitian::find($id);
        $penelitians->user_id = $request->input('user_id');
        $penelitians->name_penelitian = $request->input('name_penelitian');
        $penelitians->location = $request->input('location');
        $penelitians->description = $request->input('description');
        $penelitians->content = $request->input('content');
        $penelitians->slug = Str::slug($request->name_penelitian);

        if ($request->hasFile('image')) {
            $name = Str::slug($request->name_penelitian) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $name);
            $penelitians->image = '/uploads/' . $name;
        }

        $penelitians->save();

        $notification = new Notification();
        $notification->model()->associate($penelitians); // Menghubungkan dengan model Pengmas
        $notification->content = 'Postingan Penelitian Kenukliran telah diperbarui.';
        $notification->save();

        return redirect()->route('penelitian')->withSuccess("Postingan Penelitian Kenukliran berhasil diperbarui.");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormPenelitianRequest  $request
     * @param  \App\Models\FormPenelitian  $formPenelitian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormPenelitianRequest $request, FormPenelitian $formPenelitian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormPenelitian  $formPenelitian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penelitians = FormPenelitian::find($id);
        $penelitians->delete();

        $notification = new Notification();
        $notification->model()->associate($penelitians); // Menghubungkan dengan model Post
        $notification->content = 'Content has been deleted.';
        $notification->save();

        return redirect()->route('penelitian')->withSuccess('Informasi Terkini berhasil dihapus.');
    }
}
