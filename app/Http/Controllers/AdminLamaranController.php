<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamaran;
use App\Models\Lowongan;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class AdminLamaranController extends Controller
{
    public function index(Request $request)
{
    $lowongans = Lowongan::all();
    $query = Lamaran::with(['user.profil', 'lowongan'])->latest();

    if ($request->filled('lowongan')) {
        $query->where('lowongan_id', $request->lowongan);
    }

    // ⬇️ Default status = 'Pending' jika status belum dipilih
    if ($request->filled('status')) {
        $query->where('status', $request->status);
        $status = $request->status;
    } else {
        $query->where('status', 'Pending');
        $status = 'Pending';
    }

    $lamarans = $query->get();

    return view('admin.lamaran-masuk', compact('lamarans', 'lowongans', 'status'));
}


    public function updateStatus(Request $request, Lamaran $lamaran)
    {
        $request->validate([
            'status' => 'required|in:Pending,Interview,Diterima,Ditolak',
        ]);

        $lamaran->status = $request->status;
        $lamaran->save();

        Alert::success('Berhasil', 'Status lamaran berhasil diperbarui!');
        return back();
    }
}
