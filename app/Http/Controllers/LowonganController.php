<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;


class LowonganController extends Controller
{
   public function index()
{
    $lowongans = Lowongan::latest()->get();

    return view('admin.lowongan.lowongan', [
        'lowongans' => $lowongans,
        'totalLowongan' => $lowongans->count(),
        'totalPelamar' => \App\Models\Lamaran::distinct('user_id')->count(),
        'lowonganAktif' => $lowongans->where('status', true)->count(),
    ]);
}



public function indexLowonganPelamar()
{
$lowongans = Lowongan::where('status', true)
    ->where(function ($query) {
        $query->whereNull('tanggal_berakhir')
              ->orWhereDate('tanggal_berakhir', '>=', Carbon::today());
    })
    ->latest()
    ->get();

    return view('pelamar.dashboard', compact('lowongans'));
}

public function LandingPage()
{
    $lowongans = Lowongan::where('status', true)
        ->where(function ($query) {
            $query->whereNull('tanggal_berakhir')
                  ->orWhereDate('tanggal_berakhir', '>=', Carbon::today());
        })
        ->latest()
        ->get();

    return view('welcome', compact('lowongans'));
}


    public function create()
    {
        return view('admin.lowongan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string|max:100',
            'tipe' => 'required|in:Full-time,Part-time',
            'gaji' => 'required|integer|min:0',
            'level' => 'required|in:Intern,Junior,Mid,Senior',
            'kualifikasi' => 'required|string',
            'tanggung_jawab' => 'required|string',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:today',
        ]);

        $validated['slug'] = Str::slug($request->judul);
        $validated['tanggal_diposting'] = now();
        $validated['user_id'] = auth()->id();
        $validated['status'] = true;

        Lowongan::create($validated);

        Alert::success('Success Title', 'Lowongan berhasil ditambahkan!');
        return redirect()->route('admin.lowongan');
    }

    public function show($slug)
    {
        $lowongan = Lowongan::where('slug', $slug)->firstOrFail();
        return view('pelamar.detail-pekerjaan', compact('lowongan'));
    }


    public function edit(Lowongan $lowongan)
    {
        return view('admin.lowongan.edit', compact('lowongan'));
    }

    public function update(Request $request, Lowongan $lowongan)
{
    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'lokasi' => 'required|string|max:100',
        'tipe' => 'required|in:Full-time,Part-time',
        'gaji' => 'required|integer|min:0',
        'level' => 'required|in:Intern,Junior,Mid,Senior',
        'kualifikasi' => 'required|string',
        'tanggung_jawab' => 'required|string',
        'tanggal_berakhir' => 'nullable|date|after_or_equal:today',
    ]);

    $validated['slug'] = Str::slug($request->judul);

    $validated['status'] = $request->has('status');

    $lowongan->update($validated);

    Alert::success('Success Title', 'Lowongan berhasil di edit!');
    return redirect()->route('admin.lowongan');
}


    public function destroy(Lowongan $lowongan)
    {
        $lowongan->delete();
        Alert::success('Success Title', 'Lowongan berhasil di hapus!');
        return redirect()->route('admin.lowongan');
    }
}

