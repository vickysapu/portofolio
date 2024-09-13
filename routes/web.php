<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\sosmedController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\portofolioController;
use App\Models\message;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login/index', [AuthController::class, 'indexLogin'])->name('indexLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard', [AuthController::class, 'tampilBeranda'])->name('tampilBeranda');
Route::get('/dashboard/update-profile', [profileController::class, 'tampilBerandaProfile'])->name('tampilBerandaProfile');

Route::POST('/dashboard/update_profile', [profileController::class, 'update_profile'])->name('update_profile');

Route::POST('dashboard/tambah_portofolio', [portofolioController::class, 'tambah_portofolio'])->name('tambah_portofolio');
Route::get('dashboard/hapus_portofolio/{id}', [portofolioController::class, 'hapus_portofolio'])->name('hapus_portofolio');

Route::POST('dashboard/tambah_skill', [skillController::class, 'tambah_skill'])->name('tambah_skill');

Route::post('dashboard/update_sosmed', [sosmedController::class, 'update_sosmed'])->name('update_sosmed');

Route::post('kirim_pesan', [messageController::class, 'kirim_pesan'])->name('kirim_pesan');
Route::get('dashboard/hapus_pesan/{id}', [messageController::class, 'hapus_pesan'])->name('hapus_pesan');