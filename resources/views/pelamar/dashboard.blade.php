@extends('layouts.pelamar')

@section('title', 'Dashboard – Pelamar | Lunera Labs')

@section('content')
    <x-nav-pelamar>

        <!-- Hero Section -->
        <section class="relative bg-[#fafafa] py-28 overflow-hidden">
            <div
                class="absolute top-0 left-1/2 transform -translate-x-1/2 w-[40rem] h-[40rem] bg-purple-300 rounded-full blur-[160px] opacity-20 -z-10">
            </div>
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h1 class="text-5xl font-extrabold text-gray-900 leading-tight">
                    Bekerja di <span class="text-purple-600">Lunera Labs</span>
                </h1>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Temukan peluang karier yang membuka masa depanmu. Kami mencari talenta terbaik untuk tumbuh bersama.
                </p>
                <a href="#lowongan"
                    class="mt-10 inline-flex items-center gap-2 px-6 py-3 bg-purple-600 text-white rounded-full text-sm font-medium hover:bg-purple-700 shadow transition duration-300">
                    Jelajahi Lowongan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </section>

        <!-- Tentang YouthWare -->
        <section class="bg-white py-20 border-b border-gray-100">
            <div class="max-w-5xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Siapa Kami?</h2>
                <p class="text-gray-600 text-base leading-relaxed">
                    Lunera Labs adalah perusahaan teknologi yang berfokus pada pengembangan solusi digital
                    kreatif untuk generasi muda. Kami menggabungkan semangat anak muda dengan teknologi untuk menciptakan
                    inovasi yang berdampak.
                </p>
            </div>
        </section>

        <!-- Lowongan Section -->
        <section id="lowongan" class="bg-gray-50 py-24">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex justify-between items-center mb-12">
                    <h2 class="text-2xl font-semibold text-gray-900">📌 Lowongan Tersedia</h2>
                    <span class="text-sm text-gray-500">
                        Total: {{ count($lowongans) }} posisi
                    </span>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    @forelse ($lowongans as $lowongan)
                        <div
                            class="bg-white border border-gray-200 rounded-2xl p-6 shadow-md hover:shadow-lg transition flex flex-col gap-5">

                            <!-- Bagian Atas -->
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 sm:w-14 sm:h-14 bg-purple-100 text-purple-600 flex items-center justify-center rounded-xl text-xl sm:text-2xl font-bold">
                                        {{ strtoupper(substr($lowongan->judul, 0, 1)) }}
                                    </div>
                                    <div>
                                        <h3 class="text-lg sm:text-xl font-bold text-gray-900">{{ $lowongan->judul }}</h3>
                                        <p class="text-sm text-gray-500 mt-1">📍 {{ $lowongan->lokasi }}</p>
                                    </div>
                                </div>
                                <div class="text-left sm:text-right">
                                    <p class="text-xs text-gray-400">Gaji</p>
                                    <p class="text-purple-600 font-semibold text-sm sm:text-base">
                                        Rp {{ number_format($lowongan->gaji, 0, ',', '.') }}
                                    </p>
                                </div>
                            </div>

                            <!-- Deskripsi -->
                            <p class="text-sm text-gray-600 leading-relaxed">
                                {{ Str::limit(strip_tags($lowongan->deskripsi), 120) }}
                            </p>

                            <!-- Tags + Tombol -->
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 sm:gap-0">
                                <div class="flex gap-2 text-xs text-gray-600 flex-wrap">
                                    <span class="bg-gray-100 px-3 py-1 rounded-full">{{ $lowongan->tipe }}</span>
                                    <span class="bg-gray-200 px-3 py-1 rounded-full">{{ $lowongan->level }}</span>
                                </div>
                                <a href="{{ route('pelamar.detail-pekerjaan', $lowongan->slug) }}"
                                    class="w-full sm:w-auto text-center bg-purple-600 text-white px-5 py-2 rounded-md text-sm font-medium hover:bg-purple-700 transition">
                                    Lamar Sekarang
                                </a>
                            </div>

                        </div>
                    @empty
                        <div class="col-span-full text-center text-gray-500">
                            Tidak ada lowongan tersedia saat ini.
                        </div>
                    @endforelse
                </div>


            </div>
        </section>

    </x-nav-pelamar>
@endsection
