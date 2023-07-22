<?php

namespace App\Http\Controllers;

use App\Models\Pengmas;
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
        //
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
    public function edit(Pengmas $pengmas)
    {
        //
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
