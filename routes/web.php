<?php

use App\Models\Pengmas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KomunController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PengmasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormKeluhController;
use App\Http\Controllers\FormKomunController;
use App\Http\Controllers\FormPemasController;
use App\Models\Landing;

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

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::get('detailPemas', [LandingController::class, 'detailPemas'])->name('detailPemas');

Route::get('/detailPemas/{slug}', [LandingController::class, 'detail'])->name('detail');

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginPost')->name('login.post');
    Route::post('logout', 'logout')->name('logout');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerPost')->name('register.post');
});

Route::middleware(['IsActive'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('landing', [DashboardController::class, 'landing'])->name('landing');
    Route::post('landing/store', [LandingController::class, 'store'])->name('landing.store');

    Route::get('keluhan', [FormKeluhController::class, 'index'])->name('keluhan');
    Route::post('keluhan/store', [FormKeluhController::class, 'store'])->name('keluhan.store');

    Route::get('komunitas', [KomunController::class, 'komunitas'])->name('komunitas');
    Route::post('komunitas/store', [KomunController::class, 'store'])->name('komunitas.store');
    Route::put('komunitas/{id}/update', [KomunController::class, 'edit'])->whereNumber('id')->name('komunitas.update');

    Route::get('userdate', [UserController::class, 'index'])->name('userdate');
    Route::delete('userdate/{id}/delete', [UserController::class, 'destroy'])->whereNumber('id')->name('userdate.delete');

    Route::get('pengkom', [KomunController::class, 'index'])->name('pengkom');
    Route::post('pengkom/store', [FormKomunController::class, 'store'])->name('pengkom.store');

    Route::get('pengmas', [PengmasController::class, 'index'])->name('pengmas');
    Route::post('pengmas/store', [PengmasController::class, 'store'])->name('pengmas.store');
    Route::put('pengmas/{id}/update', [PengmasController::class, 'edit'])->whereNumber('id')->name('pengmas.update');
    Route::post('pemas/store', [FormPemasController::class, 'store'])->name('pemas.store');

    Route::get('kontak', [DashboardController::class, 'kontak'])->name('kontak');
    Route::post('kontak/store', [ContactController::class, 'store'])->name('kontak.store');

    Route::get('informasi', [DashboardController::class, 'informasi'])->name('informasi');

    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::put('profile/{id}/update', [UserController::class, 'update_profile'])->whereNumber('id')->name('profile.update');
    Route::post('profile/{id}/resetpass', [UserController::class, 'updatepassword'])->whereNumber('id')->name('password.update');
});

Route::middleware(['IsAdmin', 'IsActive'])->group(function () {
    Route::get('komun', [FormKomunController::class, 'index'])->name('komun');
});
