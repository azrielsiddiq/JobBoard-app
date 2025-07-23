@extends('layouts.admin')

@section('title', 'Candidate Profile – Admin | Lunera Labs')

@section('content')

    @if (session('error'))
        <div class="max-w-3xl mx-auto mt-6">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Gagal!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        </div>
    @endif

    @if (session('success'))
        <div class="max-w-3xl mx-auto mt-6">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Berhasil!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    <div class="min-h-screen bg-gradient-to-b from-indigo-50 via-white to-white px-6 py-12">
        <div class="max-w-5xl mx-auto space-y-10">

            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-extrabold text-gray-900">👤 Detail Pelamar</h1>
                    <p class="text-sm text-gray-600 mt-1">
                        Informasi lengkap pelamar untuk posisi
                        <strong>{{ $lamaran->lowongan->judul ?? '—' }}</strong>.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-xl border border-gray-200 p-8 space-y-6">
                <div class="flex flex-col sm:flex-row items-center gap-6">
                    <div class="text-center sm:text-left">
                        <h2 class="text-2xl font-bold text-gray-800">{{ $user->name }}</h2>
                        <p class="text-sm text-gray-500">{{ $user->email }}</p>
                        <p class="text-sm text-gray-500 mt-1">📍 {{ $profil->alamat ?? '-' }}</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-700 mt-4">
                    <div>
                        <p class="font-medium text-gray-500">📞 Nomor Telepon</p>
                        <p class="text-gray-800">{{ $profil->nomor_telepon }}</p>
                    </div>
                    <div>
                        <p class="font-medium text-gray-500">🎂 Tanggal Lahir</p>
                        <p class="text-gray-800">
                            {{ \Carbon\Carbon::parse($profil->tanggal_lahir)->translatedFormat('d F Y') }}</p>
                    </div>
                    <div>
                        <p class="font-medium text-gray-500">👫 Jenis Kelamin</p>
                        <p class="text-gray-800">{{ $profil->jenis_kelamin }}</p>
                    </div>
                    <div>
                        <p class="font-medium text-gray-500">💍 Status Perkawinan</p>
                        <p class="text-gray-800">{{ $profil->status_perkawinan }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-700 mt-4">
                    <div>
                        <p class="font-medium text-gray-500">🎓 Pendidikan Terakhir</p>
                        <p class="text-gray-800">{{ $profil->pendidikan_terakhir ?? '-' }}</p>
                    </div>
                    <div>
                        <p class="font-medium text-gray-500">🗓️ Tanggal Melamar</p>
                        <p class="text-gray-800">{{ $lamaran->created_at->translatedFormat('d F Y') }}</p>
                    </div>
                    <div>
                        <p class="font-medium text-gray-500">📄 CV</p>
                        @if ($profil->cv)
                            <a href="{{ asset('storage/' . $profil->cv) }}" target="_blank"
                                class="text-indigo-600 hover:underline">Lihat CV</a>
                        @else
                            <p class="text-gray-400 italic">Belum diunggah</p>
                        @endif
                    </div>
                    <div>
                        <p class="font-medium text-gray-500">🌐 Portofolio</p>
                        @if ($profil->portfolio)
                            <a href="{{ $profil->portfolio }}" target="_blank"
                                class="text-indigo-600 hover:underline">Lihat Portofolio</a>
                        @else
                            <p class="text-gray-400 italic">Tidak tersedia</p>
                        @endif
                    </div>
                    <div class="md:col-span-2">
                        <p class="font-medium text-gray-500">💼 Pengalaman Kerja</p>
                        <p class="text-gray-800 mt-1">{{ $profil->pengalaman_kerja ?? '-' }}</p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-end gap-4 pt-6 border-t mt-4">
                    <a href="mailto:{{ $user->email }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">
                        📧 Hubungi via Email
                    </a>
                    <a href="{{ route('admin.lamaran-masuk') }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100">
                        ← Kembali ke Daftar
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
