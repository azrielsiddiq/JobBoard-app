@extends('layouts.admin')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-white via-indigo-50 to-purple-100 px-6 py-12">
    <div class="max-w-7xl mx-auto space-y-14">

        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
            <div>
                <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight">🚀 Kelola Lowongan</h1>
                <p class="text-base text-gray-600 mt-1">Kelola semua posisi yang tersedia di <span class="font-semibold text-indigo-600">YouthWare</span>.</p>
            </div>
            <a href="#"
               class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-fuchsia-500 to-purple-600 text-white rounded-xl text-sm font-bold shadow-md hover:scale-105 hover:shadow-xl transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" /></svg>
                Tambah Lowongan
            </a>
        </div>

        <!-- Search & Filter -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
            <input type="text" placeholder="🔍 Cari posisi..."
                class="w-full md:w-1/3 px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none shadow-sm text-sm">
            <div class="flex gap-2">
                <select class="text-sm rounded-lg border-gray-300 shadow-sm px-4 py-2 focus:ring-indigo-400 focus:outline-none">
                    <option>Semua Status</option>
                    <option>Aktif</option>
                    <option>Nonaktif</option>
                    <option>Kontrak</option>
                </select>
                <select class="text-sm rounded-lg border-gray-300 shadow-sm px-4 py-2 focus:ring-indigo-400 focus:outline-none">
                    <option>Urutkan: Terbaru</option>
                    <option>Gaji Tertinggi</option>
                    <option>Gaji Terendah</option>
                </select>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl p-5 shadow hover:shadow-lg transition flex items-center gap-4">
                <div class="p-3 rounded-xl bg-purple-100 text-purple-600 text-lg">💼</div>
                <div>
                    <h4 class="text-sm text-gray-500">Total Lowongan</h4>
                    <p class="text-xl font-bold text-gray-800">12 Posisi</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl p-5 shadow hover:shadow-lg transition flex items-center gap-4">
                <div class="p-3 rounded-xl bg-blue-100 text-blue-600 text-lg">👥</div>
                <div>
                    <h4 class="text-sm text-gray-500">Total Pelamar</h4>
                    <p class="text-xl font-bold text-gray-800">56 Orang</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl p-5 shadow hover:shadow-lg transition flex items-center gap-4">
                <div class="p-3 rounded-xl bg-green-100 text-green-600 text-lg">✅</div>
                <div>
                    <h4 class="text-sm text-gray-500">Lowongan Aktif</h4>
                    <p class="text-xl font-bold text-gray-800">8 Aktif</p>
                </div>
            </div>
        </div>

        <!-- Kartu Lowongan -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

            <!-- Lowongan 1 -->
            <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-6 hover:shadow-2xl transition duration-300">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">🎨 Frontend Developer</h2>
                        <p class="text-sm text-gray-500">Remote · Rp 10–15 juta</p>
                    </div>
                    <span class="text-xs bg-purple-100 text-purple-700 px-3 py-1 rounded-full font-medium">Full-time</span>
                </div>
                <div class="flex flex-wrap gap-2 mt-3 mb-5 text-xs">
                    <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full font-medium">Vue.js</span>
                    <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full font-medium">Tailwind CSS</span>
                </div>
                <div class="flex justify-between items-center border-t pt-4">
                    <div class="flex gap-4 text-sm">
                        <a href="#" class="text-blue-600 font-medium hover:underline">Edit</a>
                        <a href="#" class="text-gray-500 font-medium hover:underline">Duplikat</a>
                        <button class="text-red-500 font-medium hover:underline">Hapus</button>
                    </div>
                    <a href="{{ route('admin.lamaran-masuk') }}" class="text-sm text-purple-600 font-semibold hover:underline">Detail</a>
                </div>
            </div>

            <!-- Lowongan 2 -->
            <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-6 hover:shadow-2xl transition duration-300">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">🖌️ UI/UX Designer</h2>
                        <p class="text-sm text-gray-500">Jakarta · Rp 12–18 juta</p>
                    </div>
                    <span class="text-xs bg-pink-100 text-pink-700 px-3 py-1 rounded-full font-medium">Kontrak</span>
                </div>
                <div class="flex flex-wrap gap-2 mt-3 mb-5 text-xs">
                    <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full font-medium">Figma</span>
                    <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full font-medium">Design System</span>
                </div>
                <div class="flex justify-between items-center border-t pt-4">
                    <div class="flex gap-4 text-sm">
                        <a href="#" class="text-blue-600 font-medium hover:underline">Edit</a>
                        <a href="#" class="text-gray-500 font-medium hover:underline">Duplikat</a>
                        <button class="text-red-500 font-medium hover:underline">Hapus</button>
                    </div>
                    <a href="#" class="text-sm text-purple-600 font-semibold hover:underline">Detail</a>
                </div>
            </div>

            <!-- Lowongan 3 -->
            <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-6 hover:shadow-2xl transition duration-300">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">💻 Backend Developer</h2>
                        <p class="text-sm text-gray-500">Yogyakarta · Rp 9–13 juta</p>
                    </div>
                    <span class="text-xs bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full font-medium">Full-time</span>
                </div>
                <div class="flex flex-wrap gap-2 mt-3 mb-5 text-xs">
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full font-medium">Laravel</span>
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full font-medium">REST API</span>
                </div>
                <div class="flex justify-between items-center border-t pt-4">
                    <div class="flex gap-4 text-sm">
                        <a href="#" class="text-blue-600 font-medium hover:underline">Edit</a>
                        <a href="#" class="text-gray-500 font-medium hover:underline">Duplikat</a>
                        <button class="text-red-500 font-medium hover:underline">Hapus</button>
                    </div>
                    <a href="#" class="text-sm text-purple-600 font-semibold hover:underline">Detail</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
