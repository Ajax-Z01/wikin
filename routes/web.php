<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormKeluhController;
use App\Http\Controllers\FormKomunController;
use App\Http\Controllers\FormPemasController;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginPost')->name('login.post');
    Route::get('logout', 'logout')->name('logout');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerPost')->name('register.post');
});

Route::middleware(['IsUser'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('detailPemas', [DashboardController::class, 'detailPemas'])->name('detailPemas');
    Route::get('detailContent', [DashboardController::class, 'detailContent'])->name('detailContent');
    Route::get('landing', [DashboardController::class, 'landing'])->name('landing');

    Route::get('keluhan', [FormKeluhController::class, 'index'])->name('keluhan');
    Route::post('keluhan/store', [FormKeluhController::class, 'store'])->name('keluhan.store');

    Route::get('komunitas', [DashboardController::class, 'komunitas'])->name('komunitas');

    Route::get('userdate', [UserController::class, 'index'])->name('userdate');

    Route::get('pengkom', [FormKomunController::class, 'index'])->name('pengkom');
    Route::post('pengkom/store', [FormKomunController::class, 'store'])->name('pengkom.store');

    Route::get('pengmas', [FormPemasController::class, 'index'])->name('pengmas');
    Route::post('pengmas/store', [FormPemasController::class, 'store'])->name('pengmas.store');

    Route::get('kontak', [DashboardController::class, 'kontak'])->name('kontak');
    Route::get('informasi', [DashboardController::class, 'informasi'])->name('informasi');
    Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
});
