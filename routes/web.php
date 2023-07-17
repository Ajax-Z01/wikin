<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingpage.main');
})->name('landing');

Route::get('dashboard', function () {
    return view('dashboard.layout.dashboard');
})->name('dashboard');

Route::get('kenukliran', function () {
    return view('dashboard.sidebar.keluhan.kenukliran');
})->name('kenukliran');

Route::get('komunitas', function () {
    return view('dashboard.sidebar.menukelola.komunitas');
})->name('komunitas');

Route::get('landing', function () {
    return view('dashboard.sidebar.menukelola.landing');
})->name('landing');

Route::get('userdate', function () {
    return view('dashboard.sidebar.menukelola.userdate');
})->name('userdate');

Route::get('pengkom', function () {
    return view('dashboard.sidebar.pengajuan.pengkom');
})->name('pengkom');

Route::get('pengmas', function () {
    return view('dashboard.sidebar.pengajuan.pengmas');
})->name('pengmas');

Route::get('kontak', function () {
    return view('dashboard.sidebar.kontak.kontak');
})->name('kontak');

Route::get('informasi', function () {
    return view('dashboard.sidebar.informasi.informasi');
})->name('informasi');


Route::get('profile', function () {
    return view('dashboard.user.profile');
})->name('profile');





Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('register', function () {
    return view('auth.register');
})->name('register');
