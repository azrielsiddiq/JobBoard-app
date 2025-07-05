@extends('layouts.admin')

@section('content')
<div class="min-h-screen bg-gray-100 px-6 py-10">
    <div class="max-w-7xl mx-auto space-y-10">

        <!-- Header -->
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-gray-800">Dashboard Admin</h1>
                <p class="text-sm text-gray-500 mt-1">Selamat datang kembali. Kelola data job board Anda dengan mudah.</p>
            </div>
            <a href="#"
               class="inline-flex items-center gap-2 px-4 py-2 bg-indigo-600 text-white rounded-md text-sm font-medium shadow hover:bg-indigo-700 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Lowongan
            </a>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-xl p-6 shadow border border-gray-200 hover:shadow-md transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Total Lowongan</p>
                        <h2 class="mt-1 text-2xl font-semibold text-gray-900">14</h2>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M6 7V4h12v3M6 7H3v13h18V7h-3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl p-6 shadow border border-gray-200 hover:shadow-md transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Total Pelamar</p>
                        <h2 class="mt-1 text-2xl font-semibold text-gray-900">87</h2>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl p-6 shadow border border-gray-200 hover:shadow-md transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Lamaran Masuk</p>
                        <h2 class="mt-1 text-2xl font-semibold text-gray-900">230</h2>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6m16 0l-8 5-8-5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-xl p-6 shadow border border-gray-200 hover:shadow-md transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Review Pending</p>
                        <h2 class="mt-1 text-2xl font-semibold text-gray-900">12</h2>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-yellow-100 text-yellow-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 8v4l3 3M12 20a8 8 0 100-16 8 8 0 000 16z" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Applications -->
        <div class="bg-white rounded-xl shadow border border-gray-200 p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Lamaran Terbaru</h2>
            <div class="divide-y divide-gray-100">
                <!-- Applicant 1 -->
                <div class="py-3 flex justify-between items-center">
                    <div>
                        <h3 class="text-gray-900 font-medium">Rizky Saputra</h3>
                        <p class="text-sm text-gray-500">Frontend Developer · 24 Juni 2025</p>
                    </div>
                    <span class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full">Diterima</span>
                </div>

                <!-- Applicant 2 -->
                <div class="py-3 flex justify-between items-center">
                    <div>
                        <h3 class="text-gray-900 font-medium">Andini Rahmawati</h3>
                        <p class="text-sm text-gray-500">UI/UX Designer · 22 Juni 2025</p>
                    </div>
                    <span class="text-xs bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">Menunggu</span>
                </div>

                <!-- Applicant 3 -->
                <div class="py-3 flex justify-between items-center">
                    <div>
                        <h3 class="text-gray-900 font-medium">Fajar Nugraha</h3>
                        <p class="text-sm text-gray-500">Backend Developer · 21 Juni 2025</p>
                    </div>
                    <span class="text-xs bg-red-100 text-red-600 px-3 py-1 rounded-full">Ditolak</span>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
