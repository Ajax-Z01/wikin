<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use Illuminate\Support\Str;
use App\Models\Notification;
use App\Models\Pengmas;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $pengmas = Pengmas::orderByDesc('updated_at')->get()->take(3)->map(function ($pemas) {
            $pemas->updated = $pemas->updated_at->diffForHumans();
            $pemas->content = substr($pemas->content, 0, 200);
            return $pemas;
        });
        return view('landingpage.content', compact('pengmas'));
    }

    public function detailPemas()
    {
        $pengmas = Pengmas::orderByDesc('updated_at')->get()->map(function ($pemas) {
            $pemas->updated = $pemas->updated_at->diffForHumans();
            $pemas->content = substr($pemas->content, 0, 200);
            return $pemas;
        });
        return view('landingpage.detailPemas.detailPemas', compact('pengmas'));
    }

    public function detail($slug)
    {
        $pemas = Pengmas::whereSlug($slug)->first();
        $pemas->updated = $pemas->updated_at->format('M jS Y');
        return view('landingpage.detailPemas.detailContent', compact('pemas'));
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
