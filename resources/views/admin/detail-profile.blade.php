@extends('layouts.admin')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-white via-indigo-50 to-purple-100 px-6 py-12">
    <div class="max-w-4xl mx-auto space-y-10">

        <!-- Header -->
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900">👤 Detail Pelamar</h1>
                <p class="text-sm text-gray-600 mt-1">Informasi lengkap mengenai pelamar untuk posisi <strong>UI/UX Designer</strong>.</p>
            </div>
            <a href="{{ route('admin.lowongan') }}" class="inline-flex items-center gap-2 text-sm font-medium text-indigo-600 hover:underline">
                ← Kembali
            </a>
        </div>

        <!-- Card Profil -->
        <div class="bg-white rounded-3xl shadow-xl border border-gray-200 p-8 space-y-6">
            <div class="flex items-center gap-6">
                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Foto" class="w-20 h-20 rounded-full object-cover shadow-md">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">Aisyah Putri</h2>
                    <p class="text-sm text-gray-500">aisyah@example.com</p>
                    <p class="text-sm text-gray-500 mt-1">📍 Jakarta</p>
                </div>
            </div>

            <!-- Info Tambahan -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-700">
                <div>
                    <p class="font-medium text-gray-500">Pendidikan Terakhir</p>
                    <p class="text-gray-800">S1 Desain Komunikasi Visual</p>
                </div>
                <div>
                    <p class="font-medium text-gray-500">Tanggal Melamar</p>
                    <p class="text-gray-800">12 Juni 2025</p>
                </div>
                <div>
                    <p class="font-medium text-gray-500">CV</p>
                    <a href="#" class="text-indigo-600 hover:underline">Unduh CV</a>
                </div>
                <div>
                    <p class="font-medium text-gray-500">Portofolio</p>
                    <a href="https://behance.net/aisyahputri" class="text-indigo-600 hover:underline" target="_blank">Lihat Portofolio</a>
                </div>
            </div>

            <!-- Status Lamaran -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">Status Lamaran</label>
                <select class="w-full md:w-1/2 px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:ring-indigo-400 text-sm">
                    <option>Pending</option>
                    <option selected>Interview</option>
                    <option>Diterima</option>
                    <option>Ditolak</option>
                </select>
            </div>

            <!-- Aksi -->
            <div class="flex justify-end gap-4 pt-4 border-t">
                <a href="mailto:aisyah@example.com" class="inline-flex items-center px-4 py-2 text-sm rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">
                    Hubungi via Email
                </a>
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100">
                    Kembali ke Daftar Pelamar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
