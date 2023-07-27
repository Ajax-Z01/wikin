<?php

use App\Models\Landing;
use App\Models\Pengmas;
use App\Models\FormPenelitian;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KomunController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PengmasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormKeluhController;
use App\Http\Controllers\FormKomunController;
use App\Http\Controllers\FormPemasController;
use App\Http\Controllers\FormPenelitianController;

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

Route::get('/penelitians', [LandingController::class, 'penelitians'])->name('penelitians');

Route::get('/detailpenelitians/{slug}', [LandingController::class, 'detailpenelitians'])->name('detailpenelitians');

Route::get('forgot', function () {
    return view('auth.forgotpassword');
})->name('forgot');

// Link email di gmail menuju ke halaman ini bang
Route::get('resetpassword', function () {
    return view('auth.resetpassword');
})->name('resetpassword');


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

    Route::get('pengkom', [KomunController::class, 'index'])->name('pengkom');
    Route::post('pengkom/store', [FormKomunController::class, 'store'])->name('pengkom.store');

    Route::get('pengmas', [PengmasController::class, 'index'])->name('pengmas');
    Route::post('pengmas/store', [PengmasController::class, 'store'])->name('pengmas.store');
    Route::put('pengmas/{id}/update', [PengmasController::class, 'edit'])->whereNumber('id')->name('pengmas.update');
    Route::post('pemas/store', [FormPemasController::class, 'store'])->name('pemas.store');

    Route::get('penelitian', [FormPenelitianController::class, 'index'])->name('penelitian');
    Route::post('penelitian/store', [FormPenelitianController::class, 'store'])->name('penelitian.store');
    Route::put('penelitian/{id}/update', [FormPenelitianController::class, 'edit'])->whereNumber('id')->name('penelitian.update');


    Route::get('kontak', [DashboardController::class, 'kontak'])->name('kontak');
    Route::post('kontak/store', [ContactController::class, 'store'])->name('kontak.store');

    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::put('profile/{id}/update', [UserController::class, 'update_profile'])->whereNumber('id')->name('profile.update');
    Route::post('profile/{id}/resetpass', [UserController::class, 'updatepassword'])->whereNumber('id')->name('password.update');

    Route::get('informasi', [MessageController::class, 'index'])->name('informasi');
    Route::post('send-message/{user_id}', [MessageController::class, 'sendMessageToUser'])->whereNumber('user_id')->name('send.message');
});

Route::middleware(['IsAdmin', 'IsActive'])->group(function () {
    Route::get('komun', [FormKomunController::class, 'index'])->name('komun');

    Route::get('userdate', [UserController::class, 'index'])->name('userdate');
    Route::put('userdate/{id}/update', [UserController::class, 'update'])->whereNumber('id')->name('userdate.update');
    Route::delete('userdate/{id}/delete', [UserController::class, 'destroy'])->whereNumber('id')->name('userdate.delete');
});
