<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamaran;
use App\Models\Lowongan;

class AdminLamaranController extends Controller
{
    public function index(Request $request)
    {
        $lowongans = Lowongan::all();

        $query = Lamaran::with(['user.profil', 'lowongan'])->latest();

        if ($request->filled('lowongan')) {
            $query->where('lowongan_id', $request->lowongan);
        }

        $lamarans = $query->get();

        return view('admin.lamaran-masuk', compact('lamarans', 'lowongans'));
    }

    public function updateStatus(Request $request, Lamaran $lamaran)
    {
        $request->validate([
            'status' => 'required|in:Pending,Interview,Diterima,Ditolak',
        ]);

        $lamaran->status = $request->status;
        $lamaran->save();

        return back()->with('success', 'Status lamaran berhasil diperbarui.');
    }
}
