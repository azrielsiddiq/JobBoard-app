<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
        // Cek jika profil belum lengkap
        if (!Auth::user()->profil) {
            Alert::warning('Profil Belum Lengkap', 'Silakan lengkapi profil Anda terlebih dahulu sebelum melamar.');
            return redirect()->route('pelamar.profil.create');
        }

        $userId = Auth::id();

        // Cek apakah user memiliki lamaran aktif (selain "Ditolak")
        $lamaranAktif = Lamaran::where('user_id', $userId)
            ->whereIn('status', ['Pending', 'Interview', 'Diterima'])
            ->first();

        if ($lamaranAktif) {
            if ($lamaranAktif->status === 'Diterima') {
                Alert::info('Sudah Diterima', 'Anda sudah diterima di salah satu lowongan. Tidak dapat melamar lagi.');
                return redirect()->back();
            }

            Alert::warning('Lamaran Masih Diproses', 'Anda sudah memiliki lamaran yang sedang diproses. Silakan tunggu hingga statusnya "Ditolak" untuk melamar kembali.');
            return redirect()->back();
        }

        // Cek jika sudah pernah melamar ke lowongan ini
        $sudahMelamarSama = Lamaran::where('user_id', $userId)
            ->where('lowongan_id', $lowongan->id)
            ->exists();

        if ($sudahMelamarSama) {
            Alert::info('Sudah Pernah Melamar', 'Anda sudah pernah melamar ke lowongan ini.');
            return redirect()->back();
        }

        // Simpan lamaran baru
        Lamaran::create([
            'user_id' => $userId,
            'lowongan_id' => $lowongan->id,
            'status' => 'Pending',
        ]);

        Alert::success('Lamaran Berhasil', 'Lamaran Anda telah berhasil dikirim.');
        return redirect()->route('pelamar.riwayat');
    }
}
