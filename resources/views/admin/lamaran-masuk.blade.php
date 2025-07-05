@extends('layouts.admin')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-white via-indigo-50 to-purple-100 px-6 py-12">
    <div class="max-w-7xl mx-auto space-y-12">

        <!-- Header -->
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900">📋 Lamaran: UI/UX Designer</h1>
                <p class="text-sm text-gray-500 mt-1">Lihat dan kelola daftar pelamar untuk posisi ini.</p>
            </div>
            <a href="#" class="inline-flex items-center gap-2 text-sm font-medium text-indigo-600 hover:underline">
                ← Kembali ke Daftar Lowongan
            </a>
        </div>

        <!-- Pelamar Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card Pelamar -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-md hover:shadow-xl transition duration-300 p-6 space-y-4">
                <div class="flex items-center gap-4">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Foto" class="w-16 h-16 rounded-full object-cover shadow-sm">
                    <div>
                        <h2 class="text-lg font-bold text-gray-800">Aisyah Putri</h2>
                        <p class="text-sm text-gray-500">aisyah@example.com</p>
                    </div>
                </div>

                <div class="text-sm space-y-1">
                    <p class="text-gray-600">📍 Jakarta</p>
                    <p class="text-gray-600">🎓 S1 Desain Komunikasi Visual</p>
                    <p class="text-gray-600">📅 Melamar: 3 hari lalu</p>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1">Status Lamaran</label>
                    <select class="w-full px-3 py-2 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 text-sm">
                        <option>Pending</option>
                        <option selected>Interview</option>
                        <option>Diterima</option>
                        <option>Ditolak</option>
                    </select>
                </div>

                <div class="flex justify-between items-center border-t pt-4">
                    <a href="{{ route('admin.detail-profile') }}" class="text-sm font-medium text-indigo-600 hover:underline">Lihat Profil</a>
                    <a href="#" class="text-sm font-medium text-emerald-600 hover:underline">Hubungi</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
