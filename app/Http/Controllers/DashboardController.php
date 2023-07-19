<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function detailPemas()
    {
        return view('landingpage.detailPemas.detailPemas');
    }

    public function detailContent()
    {
        return view('landingpage.detailPemas.detailContent');
    }

    public function kenukliran()
    {
        return view('dashboard.sidebar.keluhan.kenukliran');
    }

    public function komunitas()
    {
        return view('dashboard.sidebar.menukelola.komunitas');
    }

    public function landing()
    {
        return view('dashboard.sidebar.menukelola.landing');
    }

    public function userdate()
    {
        return view('dashboard.sidebar.menukelola.userdate');
    }

    public function pengkom()
    {
        return view('dashboard.sidebar.pengajuan.pengkom');
    }

    public function pengmas()
    {
        return view('dashboard.sidebar.pengajuan.pengmas');
    }

    public function kontak()
    {
        return view('dashboard.sidebar.kontak.kontak');
    }

    public function informasi()
    {
        return view('dashboard.sidebar.informasi.informasi');
    }
}
