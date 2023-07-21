<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landingpage.content');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormPemasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'description' => 'required',
        ]);

        $landing = new Landing();
        $landing->facebook = $request->input('facebook');
        $landing->instagram = $request->input('instagram');
        $landing->twitter = $request->input('twitter');
        $landing->linkedin = $request->input('linkedin');
        $landing->description = $request->input('description');

        if ($request->hasFile('image')) {
            $name = Str::slug($request->facebook) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $name);
            $landing->image = '/uploads/' . $name;
        }

        $landing->save();

        $notification = new Notification();
        $notification->model()->associate($landing); // Menghubungkan dengan model Landing
        $notification->content = 'Halaman Utama telah diperbarui';
        $notification->save();

        return redirect()->route('landing')->with('success', 'Halaman Utama berhasil diperbarui.');
    }
}
