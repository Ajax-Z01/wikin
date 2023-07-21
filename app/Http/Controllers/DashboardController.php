<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\FormKeluh;
use App\Models\FormKomun;
use App\Models\FormPemas;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalPemas = FormPemas::count();
        $totalKomun = FormKomun::count();
        $totalKeluh = FormKeluh::count();
        $today = Carbon::today();
        $newUsersCount = User::whereDate('created_at', $today)->count();
        $newPemasCount = FormPemas::whereDate('created_at', $today)->count();
        $newKomunCount = FormKomun::whereDate('created_at', $today)->count();
        $newKeluhCount = FormKeluh::whereDate('created_at', $today)->count();

        return view('dashboard.index', compact('totalUsers', 'totalPemas', 'totalKeluh', 'totalKomun', 'newUsersCount', 'newPemasCount', 'newKeluhCount', 'newKomunCount'));
    }

    public function detailPemas()
    {
        return view('landingpage.detailPemas.detailPemas');
    }

    public function detailContent()
    {
        return view('landingpage.detailPemas.detailContent');
    }

    public function komunitas()
    {
        return view('dashboard.sidebar.menukelola.komunitas');
    }

    public function landing()
    {
        return view('dashboard.sidebar.menukelola.landing');
    }

    public function kontak()
    {
        return view('dashboard.sidebar.kontak.kontak');
    }

    public function informasi()
    {
        return view('dashboard.sidebar.informasi.informasi');
    }

    public function profile()
    {
        return view('dashboard.user.profile');
    }
}
