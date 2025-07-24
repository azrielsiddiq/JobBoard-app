<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lamaran;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;


class ProfilController extends Controller
{

    public function showForAdmin(User $user)
    {
        $profil = $user->profil;

        // Ambil lamaran yang dimiliki user ini
        $lamaran = Lamaran::where('user_id', $user->id)->latest()->first();

        return view('admin.detail-profile', compact('user', 'profil', 'lamaran'));
    }

    public function create()
    {
        return view('pelamar.form-profil');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => ['required', 'regex:/^[A-Za-z\s]+$/', 'min:3', 'max:100'],
            'jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'],
            'nomor_telepon' => ['required', 'regex:/^[0-9]{10,15}$/'],
            'tanggal_lahir' => ['required', 'date', 'before:-17 years', 'after:-60 years'],
            'alamat' => ['required', 'string', 'max:255'],
            'status_perkawinan' => ['required', 'in:Belum Menikah,Menikah'],
            'pendidikan_terakhir' => ['required', 'string', 'min:2', 'max:100'],
            'pengalaman_kerja' => ['required', 'string', 'max:1000'],
            'cv' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:2048'],
            'portfolio' => ['nullable', 'url'],
        ], [
            'nama_lengkap.regex' => 'Nama hanya boleh huruf dan spasi.',
            'nomor_telepon.regex' => 'Nomor telepon harus terdiri dari 10-15 angka.',
            'tanggal_lahir.before' => 'Usia minimal 17 tahun.',
            'tanggal_lahir.after' => 'Usia maksimal adalah 65 tahun.',
            'cv.mimes' => 'File CV harus berupa PDF, DOC, atau DOCX.',
            'cv.max' => 'Ukuran file CV maksimal 2MB.',
        ]);




        $profil = new \App\Models\Profil($validated);
        $profil->user_id = auth()->id();
        $profil->cv = $request->file('cv')->store('cv', 'public');
        $profil->portfolio = $request->input('portfolio');
        $profil->is_complete = true;
        $profil->save();

        Alert::success('Success Title', 'Profil berhasil disimpan.');
        return redirect()->route('pelamar.dashboard');
    }

    public function show()
    {
        $user = auth()->user();
        $profil = $user->profil;

        return view('pelamar.profil', compact('user', 'profil'));
    }

    public function edit()
    {
        $profil = auth()->user()->profil;
        return view('pelamar.edit-profil', compact('profil'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => ['required', 'regex:/^[A-Za-z\s]+$/', 'min:3', 'max:100'],
            'jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'],
            'nomor_telepon' => ['required', 'regex:/^[0-9]{10,15}$/'],
            'tanggal_lahir' => ['required', 'date', 'before:-17 years', 'after:-60 years'],
            'alamat' => ['required', 'string', 'max:255'],
            'status_perkawinan' => ['required', 'in:Belum Menikah,Menikah'],
            'pendidikan_terakhir' => ['required', 'string', 'min:2', 'max:100'],
            'pengalaman_kerja' => ['required', 'string', 'max:1000'],
            'cv' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:2048'],
            'portfolio' => ['nullable', 'url'],
        ], [
            'nama_lengkap.regex' => 'Nama hanya boleh huruf dan spasi.',
            'nomor_telepon.regex' => 'Nomor telepon harus terdiri dari 10-15 angka.',
            'tanggal_lahir.before' => 'Usia minimal 17 tahun.',
            'tanggal_lahir.after' => 'Usia maksimal adalah 65 tahun.',
            'cv.mimes' => 'File CV harus berupa PDF, DOC, atau DOCX.',
            'cv.max' => 'Ukuran file CV maksimal 2MB.',
        ]);

        $profil = auth()->user()->profil;
        $profil->fill($validated);

        if ($request->hasFile('cv')) {
            if ($profil->cv && \Storage::disk('public')->exists($profil->cv)) {\Storage::disk('public')->delete($profil->cv);
        }

        $file = $request->file('cv');
        $filename = 'cv-user-' . auth()->id() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('cv', $filename, 'public');
        $profil->cv = $path;
    }
        $profil->is_complete = true;
        $profil->save();

        Alert::success('Success Title', 'Profil berhasil diperbarui.');
        return redirect()->route('pelamar.profil');
    }
}
