@extends('layouts.pelamar')

@section('title', 'Edit Profil')

@section('content')
    <div class="min-h-screen bg-gray-100 py-10 px-4">
        <div class="max-w-5xl mx-auto bg-white shadow-sm border border-gray-200 rounded-2xl p-8 space-y-10">
            <div class="mb-6">
                <h1 class="text-3xl font-semibold text-gray-800">✏️ Edit Profil</h1>
                <p class="text-sm text-gray-500 mt-1">Perbarui data pribadi Anda untuk proses rekrutmen yang lebih optimal.</p>
            </div>

            <form action="{{ route('pelamar.profil.update') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
                @csrf
                @method('PUT')

                <!-- Grid Form 2 Kolom -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nama Lengkap -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap"
                            class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg @error('nama_lengkap') border-red-500 @enderror"
                            value="{{ old('nama_lengkap', $profil->nama_lengkap) }}">
                        @error('nama_lengkap')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Jenis Kelamin -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                        <select name="jenis_kelamin"
                            class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg @error('jenis_kelamin') border-red-500 @enderror">
                            <option value="">-- Pilih --</option>
                            <option value="Laki-laki" {{ old('jenis_kelamin', $profil->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jenis_kelamin', $profil->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Nomor Telepon -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nomor Telepon / WhatsApp</label>
                        <input type="text" name="nomor_telepon"
                            class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg @error('nomor_telepon') border-red-500 @enderror"
                            value="{{ old('nomor_telepon', $profil->nomor_telepon) }}">
                        @error('nomor_telepon')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tanggal Lahir -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir"
                            class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg @error('tanggal_lahir') border-red-500 @enderror"
                            value="{{ old('tanggal_lahir', $profil->tanggal_lahir) }}">
                        @error('tanggal_lahir')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status Perkawinan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Status Perkawinan</label>
                        <select name="status_perkawinan"
                            class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg @error('status_perkawinan') border-red-500 @enderror">
                            <option value="">-- Pilih --</option>
                            <option value="Belum Menikah" {{ old('status_perkawinan', $profil->status_perkawinan) == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                            <option value="Menikah" {{ old('status_perkawinan', $profil->status_perkawinan) == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                        </select>
                        @error('status_perkawinan')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Pendidikan Terakhir -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Pendidikan Terakhir</label>
                        <input type="text" name="pendidikan_terakhir"
                            class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg @error('pendidikan_terakhir') border-red-500 @enderror"
                            value="{{ old('pendidikan_terakhir', $profil->pendidikan_terakhir) }}">
                        @error('pendidikan_terakhir')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Alamat -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
                    <textarea name="alamat"
                        class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg @error('alamat') border-red-500 @enderror"
                        rows="3">{{ old('alamat', $profil->alamat) }}</textarea>
                    @error('alamat')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Pengalaman Kerja -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Pengalaman Kerja</label>
                    <textarea name="pengalaman_kerja"
                        class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg @error('pengalaman_kerja') border-red-500 @enderror"
                        rows="3">{{ old('pengalaman_kerja', $profil->pengalaman_kerja) }}</textarea>
                    @error('pengalaman_kerja')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Upload CV -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Upload CV <span class="text-gray-400">(kosongkan jika tidak diubah)</span></label>
                    <input type="file" name="cv"
                        class="w-full mt-2 border border-dashed border-gray-300 px-4 py-3 rounded-lg @error('cv') border-red-500 @enderror"
                        accept=".pdf,.doc,.docx">
                    @error('cv')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror

                    @if ($profil->cv)
                    <p class="text-sm text-gray-600 mt-1">CV saat ini:
                        <a href="{{ asset('storage/' . $profil->cv) }}" target="_blank" class="text-blue-600 underline">Lihat CV</a>
                    </p>
                    @endif
                </div>

                <!-- Link Portofolio -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Link Portofolio (opsional)</label>
                    <input type="url" name="portfolio"
                        class="w-full mt-1 border px-4 py-2 rounded-lg @error('portfolio') border-red-500 @enderror"
                        value="{{ old('portfolio', $profil->portfolio) }}">
                    @error('portfolio')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Simpan -->
                <div class="text-end pt-4">
                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg font-medium transition">
                        💾 Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
