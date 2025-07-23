<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Lamaran;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
{
    $totalLowongan = Lowongan::count();
    $totalPelamar = Lamaran::distinct('user_id')->count();
    $totalLamaran = Lamaran::count();
    $totalPending = Lamaran::where('status', 'Pending')->count();

    $lamaranTerbaru = Lamaran::with(['user', 'lowongan'])
        ->latest()
        ->take(5)
        ->get();

    return view('admin.dashboard', compact(
        'totalLowongan',
        'totalPelamar',
        'totalLamaran',
        'totalPending',
        'lamaranTerbaru'
    ));
}

}
