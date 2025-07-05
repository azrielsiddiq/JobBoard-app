<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/redirect', function () {
    $role = auth()->user()->role;

    if ($role === 'admin') {
        return redirect('/admin/dashboard');
    } elseif ($role === 'pelamar') {
        return redirect('/pelamar/dashboard');
    }

    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/admin/lowongan', function () {
        return view('admin.lowongan');
    })->name('admin.lowongan');
    Route::get('/admin/akun-pelamar', function () {
        return view('admin.akun-pelamar');
    })->name('admin.akun-pelamar');
    Route::get('/admin/lamaran', function () {
        return view('admin.lamaran-masuk');
    })->name('admin.lamaran-masuk');
     Route::get('/admin/detail-profile', function () {
        return view('admin.detail-profile');
    })->name('admin.detail-profile');
});

Route::middleware(['auth', 'role:pelamar'])->group(function () {
    Route::get('/pelamar/dashboard', function () {
        return view('pelamar.dashboard');
    })->name('pelamar.dashboard');
    Route::get('/pelamar/pekerjaan/detail', function () {
        return view('pelamar.detail-pekerjaan');
    })->name('pelamar.detail-pekerjaan');
    Route::get('/pelamar/riwayat', function () {
        return view('pelamar.riwayat');
    })->name('pelamar.riwayat');
    Route::get('/pelamar/lamar-pekerjaan', function () {
        return view('pelamar.form-lamarpekerjaan');
    })->name('pelamar.form-lamarpekerjaan');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
