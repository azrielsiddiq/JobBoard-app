@extends('layouts.admin')

@section('title', 'Dashboard – Admin | Lunera Labs')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-indigo-50 via-white to-white px-6 py-10">
        <div class="max-w-7xl mx-auto space-y-10">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-semibold text-gray-800">Dashboard Admin</h1>
                    <p class="text-sm text-gray-500 mt-1">Selamat datang kembali. Kelola data job board Anda dengan mudah.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl p-6 shadow border border-gray-200 hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Total Lowongan</p>
                            <h2 class="mt-1 text-2xl font-semibold text-gray-900">{{ $totalLowongan }}</h2>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M6 7V4h12v3M6 7H3v13h18V7h-3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow border border-gray-200 hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Total Pelamar</p>
                            <h2 class="mt-1 text-2xl font-semibold text-gray-900">{{ $totalPelamar }}</h2>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow border border-gray-200 hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Lamaran Masuk</p>
                            <h2 class="mt-1 text-2xl font-semibold text-gray-900">{{ $totalLamaran }}</h2>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6m16 0l-8 5-8-5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow border border-gray-200 hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Review Pending</p>
                            <h2 class="mt-1 text-2xl font-semibold text-gray-900">{{ $totalPending }}</h2>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-yellow-100 text-yellow-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 8v4l3 3M12 20a8 8 0 100-16 8 8 0 000 16z" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow border border-gray-200 p-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Lamaran Terbaru</h2>
                <div class="divide-y divide-gray-100">
                    @forelse($lamaranTerbaru as $lamaran)
                        <div class="py-3 flex justify-between items-center">
                            <div>
                                <h3 class="text-gray-900 font-medium">{{ $lamaran->user->name }}</h3>
                                <p class="text-sm text-gray-500">
                                    {{ $lamaran->lowongan->judul ?? '-' }} ·
                                    {{ \Carbon\Carbon::parse($lamaran->created_at)->translatedFormat('d F Y') }}
                                </p>
                            </div>
                            @php
                                $status = strtolower($lamaran->status);
                                $statusClass = match ($status) {
                                    'diterima' => 'bg-green-100 text-green-700',
                                    'ditolak' => 'bg-red-100 text-red-600',
                                    'pending', 'menunggu' => 'bg-yellow-100 text-yellow-700',
                                    default => 'bg-gray-100 text-gray-600',
                                };
                            @endphp
                            <span
                                class="text-xs {{ $statusClass }} px-3 py-1 rounded-full capitalize">{{ $lamaran->status }}</span>
                        </div>
                    @empty
                        <p class="text-sm text-gray-500">Belum ada lamaran.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
