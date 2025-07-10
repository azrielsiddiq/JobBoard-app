<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function create()
{
    return view('pelamar.form-profil');
}

public function store(Request $request)
{
 $validated = $request->validate([
    'nama_lengkap' => ['required', 'regex:/^[A-Za-z\s]+$/', 'min:3', 'max:100'],              // hanya huruf dan spasi
    'jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'],                                // hanya 2 opsi
    'nomor_telepon' => ['required', 'regex:/^[0-9]{10,15}$/'],                                // hanya angka 10–15 digit
    'tanggal_lahir' => ['required', 'date', 'before:-17 years'],                              // minimal usia 17
    'alamat' => ['required', 'string', 'max:255'],                                             // teks, max 255
    'status_perkawinan' => ['required', 'in:Belum Menikah,Menikah'],                          // hanya 2 pilihan
    'pendidikan_terakhir' => ['required', 'string', 'min:2', 'max:100'],                      // minimal 2 karakter
    'pengalaman_kerja' => ['required', 'string', 'max:1000'],                                 // teks bebas
    'cv' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:2048'],                           // wajib file, 2MB max
    'portfolio' => ['nullable', 'url'],                                                       // opsional, jika diisi harus URL
], [
    'nama_lengkap.regex' => 'Nama hanya boleh huruf dan spasi.',
    'nomor_telepon.regex' => 'Nomor telepon harus terdiri dari 10-15 angka.',
    'tanggal_lahir.before' => 'Usia minimal 17 tahun.',
    'cv.mimes' => 'File CV harus berupa PDF, DOC, atau DOCX.',
    'cv.max' => 'Ukuran file CV maksimal 2MB.',
]);


    $profil = new \App\Models\Profil($validated);
    $profil->user_id = auth()->id();
    $profil->cv = $request->file('cv')->store('cv', 'public');
    $profil->portfolio = $request->input('portfolio');
    $profil->is_complete = true;
    $profil->save();

    return redirect()->route('pelamar.dashboard')->with('success', 'Profil berhasil disimpan.');
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
    'nama_lengkap' => ['required', 'regex:/^[A-Za-z\s]+$/', 'min:3', 'max:100'],              // hanya huruf dan spasi
    'jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'],                                // hanya 2 opsi
    'nomor_telepon' => ['required', 'regex:/^[0-9]{10,15}$/'],                                // hanya angka 10–15 digit
    'tanggal_lahir' => ['required', 'date', 'before:-17 years'],                              // minimal usia 17
    'alamat' => ['required', 'string', 'max:255'],                                             // teks, max 255
    'status_perkawinan' => ['required', 'in:Belum Menikah,Menikah'],                          // hanya 2 pilihan
    'pendidikan_terakhir' => ['required', 'string', 'min:2', 'max:100'],                      // minimal 2 karakter
    'pengalaman_kerja' => ['required', 'string', 'max:1000'],                                 // teks bebas
    'cv' => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:2048'],                         // wajib file, 2MB max
    'portfolio' => ['nullable', 'url'],                                                       // opsional, jika diisi harus URL
], [
    'nama_lengkap.regex' => 'Nama hanya boleh huruf dan spasi.',
    'nomor_telepon.regex' => 'Nomor telepon harus terdiri dari 10-15 angka.',
    'tanggal_lahir.before' => 'Usia minimal 17 tahun.',
    'cv.mimes' => 'File CV harus berupa PDF, DOC, atau DOCX.',
    'cv.max' => 'Ukuran file CV maksimal 2MB.',
]);


    $profil = auth()->user()->profil;
    $profil->fill($validated);

    if ($request->hasFile('cv')) {
        $profil->cv = $request->file('cv')->store('cv', 'public');
    }

    $profil->is_complete = true;
    $profil->save();

    return redirect()->route('pelamar.profil')->with('success', 'Profil berhasil diperbarui.');
}


}
