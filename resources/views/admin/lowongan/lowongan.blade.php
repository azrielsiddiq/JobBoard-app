@extends('layouts.admin')

@section('title', 'Job Listings – Admin | Lunera Labs')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-white via-indigo-50 to-purple-100 px-6 py-12">
        <div class="max-w-7xl mx-auto space-y-14">

            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
                <div>
                    <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight">🚀 Kelola Lowongan</h1>
                    <p class="text-base text-gray-600 mt-1">Kelola semua posisi yang tersedia di <span
                            class="font-semibold text-indigo-600">Lunera Labs.</span>.</p>
                </div>
                <a href="{{ route('admin.lowongan.create') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-fuchsia-500 to-purple-600 text-white rounded-xl text-sm font-bold shadow-md hover:scale-105 hover:shadow-xl transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Lowongan
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl p-5 shadow hover:shadow-lg transition flex items-center gap-4">
                    <div class="p-3 rounded-xl bg-purple-100 text-purple-600 text-lg">💼</div>
                    <div>
                        <h4 class="text-sm text-gray-500">Total Lowongan</h4>
                        <p class="text-xl font-bold text-gray-800">{{ $totalLowongan }} Lowongan</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-5 shadow hover:shadow-lg transition flex items-center gap-4">
                    <div class="p-3 rounded-xl bg-blue-100 text-blue-600 text-lg">👥</div>
                    <div>
                        <h4 class="text-sm text-gray-500">Total Pelamar</h4>
                        <p class="text-xl font-bold text-gray-800">{{ $totalPelamar }} Orang</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-5 shadow hover:shadow-lg transition flex items-center gap-4">
                    <div class="p-3 rounded-xl bg-green-100 text-green-600 text-lg">✅</div>
                    <div>
                        <h4 class="text-sm text-gray-500">Lowongan Aktif</h4>
                        <p class="text-xl font-bold text-gray-800">{{ $lowonganAktif }} Aktif</p>
                    </div>
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                @forelse ($lowongans as $lowongan)
                    <div
                        class="bg-white rounded-3xl shadow-xl border border-gray-100 p-6 hover:shadow-2xl transition duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h2 class="text-xl font-bold text-gray-900">{{$lowongan->judul }}</h2>
                                <p class="text-sm text-gray-500">{{ $lowongan->lokasi }} · Rp
                                    {{ number_format($lowongan->gaji, 0, ',', '.') }}</p>
                            </div>
                            <span
                                class="text-xs px-3 py-1 rounded-full font-medium
                                {{ $lowongan->tipe === 'Full-time' ? 'bg-purple-100 text-purple-700' : 'bg-pink-100 text-pink-700' }}">
                                {{ $lowongan->tipe }}
                            </span>
                        </div>

                        <div class="flex flex-wrap gap-2 mt-3 mb-5 text-xs">
                            <span
                                class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full font-medium">{{ $lowongan->level }}</span>
                        </div>

                        <div class="flex justify-between items-center border-t pt-4 text-sm">
                            <div class="flex gap-4">
                                <a href="{{ route('admin.lowongan.edit', $lowongan->id) }}"
                                    class="text-blue-600 font-medium hover:underline">Edit</a>
                                <form action="{{ route('admin.lowongan.destroy', $lowongan->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 font-medium hover:underline">Hapus</button>
                                </form>
                            </div>
                            <a href="{{ route('admin.lamaran-masuk', ['lowongan' => $lowongan->id]) }}"
                                class="text-purple-600 font-semibold hover:underline">Detail Pelamar</a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center text-gray-500">Belum ada lowongan tersedia.</div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
