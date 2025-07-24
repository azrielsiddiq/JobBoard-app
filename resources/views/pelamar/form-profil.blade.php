@extends('layouts.pelamar')

@section('title', 'Lengkapi Profil')

@section('content')
    <div class="min-h-screen bg-gray-100 py-10 px-4">
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-xl p-8 space-y-6">

            <!-- Heading -->
            <div>
                <h1 class="text-2xl font-semibold text-gray-800">Lengkapi Profil</h1>
                <p class="text-sm text-gray-500 mt-1">Pastikan informasi berikut diisi dengan benar.</p>
            </div>

            <!-- Note -->
            <div class="bg-yellow-50 border-l-4 border-yellow-400 text-yellow-700 p-4 rounded-md text-sm">
                <strong>Catatan:</strong> Pastikan menggunakan <span class="font-medium">email aktif</span> atau <span class="font-medium">nomor WhatsApp</span> yang dapat dihubungi.
            </div>

            <!-- Form -->
            <form action="{{ route('pelamar.profil.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <!-- Grid Form 2 Column -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nama Lengkap -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                            class="w-full border px-4 py-2 rounded-lg @error('nama_lengkap') border-red-500 @enderror" required>
                        @error('nama_lengkap')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Jenis Kelamin -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                        <select name="jenis_kelamin"
                            class="w-full border px-4 py-2 rounded-lg @error('jenis_kelamin') border-red-500 @enderror" required>
                            <option value="">-- Pilih --</option>
                            <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Nomor Telepon -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" value="{{ old('nomor_telepon') }}"
                            class="w-full border px-4 py-2 rounded-lg @error('nomor_telepon') border-red-500 @enderror" required>
                        @error('nomor_telepon')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tanggal Lahir -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                            class="w-full border px-4 py-2 rounded-lg @error('tanggal_lahir') border-red-500 @enderror" required>
                        @error('tanggal_lahir')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status Perkawinan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Status Perkawinan</label>
                        <select name="status_perkawinan"
                            class="w-full border px-4 py-2 rounded-lg @error('status_perkawinan') border-red-500 @enderror" required>
                            <option value="">-- Pilih --</option>
                            <option value="Belum Menikah" {{ old('status_perkawinan') == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                            <option value="Menikah" {{ old('status_perkawinan') == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                        </select>
                        @error('status_perkawinan')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Pendidikan Terakhir -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Pendidikan Terakhir</label>
                        <input type="text" name="pendidikan_terakhir" value="{{ old('pendidikan_terakhir') }}"
                            class="w-full border px-4 py-2 rounded-lg @error('pendidikan_terakhir') border-red-500 @enderror" required>
                        @error('pendidikan_terakhir')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Full Width Fields -->
                <div class="space-y-6">
                    <!-- Alamat -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Alamat</label>
                        <textarea name="alamat"
                            class="w-full border px-4 py-2 rounded-lg @error('alamat') border-red-500 @enderror" required>{{ old('alamat') }}</textarea>
                        @error('alamat')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Pengalaman Kerja -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Pengalaman Kerja</label>
                        <textarea name="pengalaman_kerja"
                            class="w-full border px-4 py-2 rounded-lg @error('pengalaman_kerja') border-red-500 @enderror" required>{{ old('pengalaman_kerja') }}</textarea>
                        @error('pengalaman_kerja')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Upload CV -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Upload CV <span class="text-red-500">*</span></label>
                        <input type="file" name="cv"
                            class="flex flex-col w-full border-2 border-dashed  rounded-lg p-6 cursor-pointer hover:border-purple-400 transition text-center @error('cv') border-red-500 @enderror"
                            accept=".pdf,.doc,.docx" required>
                        @error('cv')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Portofolio -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Link Portofolio (opsional)</label>
                        <input type="url" name="portfolio" value="{{ old('portfolio') }}"
                            class="w-full border px-4 py-2 rounded-lg @error('portfolio') border-red-500 @enderror">
                        @error('portfolio')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Submit -->
                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-purple-600 text-white py-3 rounded-lg hover:bg-purple-700 transition font-medium">
                        Simpan Profil
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
