<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\AdminLamaranController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPenggunaController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [LowonganController::class, 'LandingPage'])->name('beranda');

/*
|--------------------------------------------------------------------------
| Redirect After Login
|--------------------------------------------------------------------------
*/

Route::get('/redirect', function () {
    $role = auth()->user()->role;

    return match ($role) {
        'admin' => redirect('/admin/dashboard'),
        'pelamar' => redirect('/pelamar/dashboard'),
        default => redirect('/')
    };
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Akun
    Route::get('/pengguna', [AdminPenggunaController::class, 'index'])->name('pengguna');
    Route::get('/pengguna/tambah', [AdminPenggunaController::class, 'create'])->name('pengguna.create');
    Route::post('/pengguna/simpan', [AdminPenggunaController::class, 'store'])->name('pengguna.store');
    Route::get('/pengguna/edit/{id}', [AdminPenggunaController::class, 'edit'])->name('pengguna.edit');
    Route::put('/pengguna/update/{id}', [AdminPenggunaController::class, 'update'])->name('pengguna.update');
    Route::post('/pengguna/{id}', [AdminPenggunaController::class, 'destroy'])->name('pengguna.destroy');

    // Detail profil pelamar
    Route::view('/detail-profile', 'admin.detail-profile')->name('detail-profile');

    // Lowongan
    Route::get('/lowongan', [LowonganController::class, 'index'])->name('lowongan');
    Route::get('/lowongan/tambah', [LowonganController::class, 'create'])->name('lowongan.create');
    Route::post('/lowongan', [LowonganController::class, 'store'])->name('lowongan.store');
    Route::get('/lowongan/{lowongan}/edit', [LowonganController::class, 'edit'])->name('lowongan.edit');
    Route::put('/lowongan/{lowongan}', [LowonganController::class, 'update'])->name('lowongan.update');
    Route::delete('/lowongan/{lowongan}', [LowonganController::class, 'destroy'])->name('lowongan.destroy');

    // Lamaran Masuk
    Route::get('/lamaran', [AdminLamaranController::class, 'index'])->name('lamaran-masuk');
    Route::put('/lamaran/{lamaran}/status', [AdminLamaranController::class, 'updateStatus'])->name('lamaran.status');

   

    Route::get('/detail-profile/{user}', [ProfilController::class, 'showForAdmin'])->name('detail-profile');

});

/*
|--------------------------------------------------------------------------
| Pelamar Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:pelamar'])->prefix('pelamar')->name('pelamar.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [LowonganController::class, 'indexLowonganPelamar'])->name('dashboard');

    // Detail Lowongan
    Route::get('/pekerjaan/{slug}', [LowonganController::class, 'show'])->name('detail-pekerjaan');

    // Lamar
    Route::post('/lamar/{lowongan}', [LamaranController::class, 'store'])->name('lamar');

    // Riwayat
    Route::get('/riwayat', [LamaranController::class, 'index'])->name('riwayat');

    // Profil
    Route::get('/profil', [ProfilController::class, 'show'])->name('profil');
    Route::get('/profil/lengkapi', [ProfilController::class, 'create'])->name('profil.create');
    Route::post('/profil', [ProfilController::class, 'store'])->name('profil.store');
    Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/profil', [ProfilController::class, 'update'])->name('profil.update');
});

/*
|--------------------------------------------------------------------------
| Authenticated User Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth scaffolding routes
require __DIR__ . '/auth.php';
