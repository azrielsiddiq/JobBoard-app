<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LamaranController extends Controller
{

    public function index()
    {
    $lamaran = Lamaran::with('lowongan')
                ->where('user_id', Auth::id())
                ->latest()
                ->get();

    return view('pelamar.riwayat', compact('lamaran'));
}


    public function store(Request $request, Lowongan $lowongan)
    {
        // Cek jika profil pelamar sudah lengkap
        if (!Auth::user()->profil) {
            return redirect()->route('pelamar.profil.create')->with('error', 'Silakan lengkapi profil terlebih dahulu.');
        }

        // Cek apakah sudah pernah melamar
        $sudahMelamar = Lamaran::where('user_id', Auth::id())
                            ->where('lowongan_id', $lowongan->id)
                            ->exists();

        if ($sudahMelamar) {
            return redirect()->back()->with('error', 'Kamu sudah melamar lowongan ini.');
        }

        Lamaran::create([
            'user_id' => Auth::id(),
            'lowongan_id' => $lowongan->id,
            'status' => 'Pending',
        ]);

        return redirect()->route('pelamar.riwayat')->with('success', 'Lamaran berhasil dikirim.');
    }
}
