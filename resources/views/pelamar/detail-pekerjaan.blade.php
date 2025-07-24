@extends('layouts.pelamar')

@section('title', 'Detail Pekerjaan')

@section('content')

        <div class="bg-[#f9fafb] min-h-screen pt-20 pb-24 font-sans text-gray-900">
            <div class="max-w-7xl mx-auto px-6 md:px-10 lg:px-16 grid grid-cols-1 lg:grid-cols-3 gap-12">
                <div class="lg:col-span-2 space-y-12">

                    <!-- Header -->
                    <section class="space-y-4">
                        <span
                            class="inline-block bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
                            {{ $lowongan->judul }}
                        </span>
                        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight tracking-tight">
                            Bergabung dengan <span class="text-purple-600">Lanera Labs.</span>
                        </h1>
                        <p class="text-sm text-gray-500">
                            Diposting: {{ \Carbon\Carbon::parse($lowongan->tanggal_diposting)->translatedFormat('d F Y') }}
                            @if ($lowongan->tanggal_berakhir)
                                • Berlaku hingga
                                {{ \Carbon\Carbon::parse($lowongan->tanggal_berakhir)->translatedFormat('d F Y') }}
                            @endif
                        </p>
                    </section>

                    <!-- Info Card -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <div class="bg-white border border-gray-200 shadow-sm rounded-xl p-4">
                            <p class="text-xs text-gray-500 mb-1">Lokasi</p>
                            <p class="font-medium text-purple-800">{{ $lowongan->lokasi }}</p>
                        </div>
                        <div class="bg-white border border-gray-200 shadow-sm rounded-xl p-4">
                            <p class="text-xs text-gray-500 mb-1">Tipe</p>
                            <p class="font-medium text-purple-800">{{ $lowongan->tipe }}</p>
                        </div>
                        <div class="bg-white border border-gray-200 shadow-sm rounded-xl p-4">
                            <p class="text-xs text-gray-500 mb-1">Gaji</p>
                            <p class="font-medium text-purple-800">Rp {{ number_format($lowongan->gaji, 0, ',', '.') }}</p>
                        </div>
                        <div class="bg-white border border-dashed border-gray-300 shadow-sm rounded-xl p-4">
                            <p class="text-xs text-gray-500 mb-1">Level</p>
                            <p class="font-medium text-gray-700">{{ $lowongan->level }}</p>
                        </div>
                        <div class="bg-white border border-dashed border-gray-300 shadow-sm rounded-xl p-4">
                            <p class="text-xs text-gray-500 mb-1">Department</p>
                            <p class="font-medium text-gray-700">Engineering</p>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <section class="space-y-6 prose max-w-none">
                        <div>
                            <h2 class="text-xl font-bold mb-2">Tentang Pekerjaan</h2>
                            {!! $lowongan->deskripsi !!}
                        </div>

                        <div>
                            <h2 class="text-xl font-bold mb-2">Tanggung Jawab</h2>
                            {!! $lowongan->tanggung_jawab !!}
                        </div>

                        <div>
                            <h2 class="text-xl font-bold mb-2">Kualifikasi</h2>
                            {!! $lowongan->kualifikasi !!}
                        </div>
                    </section>

                </div>

                <!-- Sidebar -->
                <aside class="sticky top-28 h-fit">
                    <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 space-y-6">
                        <div class="text-center">
                            <h3 class="text-lg font-bold">Tertarik dengan posisi ini?</h3>
                            <p class="text-sm text-gray-500 mt-1">Kami tunggu lamaran terbaikmu.</p>
                        </div>

                        <form id="lamarForm" action="{{ route('pelamar.lamar', $lowongan->id) }}" method="POST"
                            onsubmit="return confirm('Apakah anda yakin ingin melamar di posisi ini?')">
                            @csrf
                            <button type="submit"
                                class="block w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white text-center py-3 rounded-lg font-medium transition-all">
                                Lamar Sekarang 🚀
                            </button>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
@endsection
