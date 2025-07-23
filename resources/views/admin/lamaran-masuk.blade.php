@extends('layouts.admin')

@section('title', 'Application Management – Admin | Lunera Labs')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-indigo-50 via-white to-white px-6 py-10">
        <div class="max-w-7xl mx-auto space-y-12">
            <div class="flex items-start justify-between">
                <div>
                    <h1 class="text-4xl font-bold text-indigo-900">📋 Lamaran Masuk</h1>
                    <p class="mt-1 text-sm text-gray-600">Kelola lamaran berdasarkan posisi dan status terkini.</p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
                <form method="GET" action="{{ route('admin.lamaran-masuk') }}" class="w-full sm:w-auto">
                    <label for="lowongan" class="block text-sm font-medium text-gray-700 mb-1">Filter berdasarkan
                        lowongan</label>
                    <select name="lowongan" id="lowongan" onchange="this.form.submit()"
                        class="px-4 py-2 rounded-lg border border-gray-300 bg-white shadow-sm text-sm">
                        <option value="">Semua Lowongan</option>
                        @foreach ($lowongans as $lowongan)
                            <option value="{{ $lowongan->id }}"
                                {{ request('lowongan') == $lowongan->id ? 'selected' : '' }}>
                                {{ $lowongan->judul }}
                            </option>
                        @endforeach
                    </select>
                </form>

                <div class="flex flex-wrap gap-2">
                    @php
                        $statuses = ['Semua', 'Pending', 'Interview', 'Diterima', 'Ditolak'];
                    @endphp
                    @foreach ($statuses as $item)
                        <a href="{{ route('admin.lamaran-masuk', [
                            'lowongan' => request('lowongan'),
                            'status' => $item !== 'Semua' ? $item : null,
                        ]) }}"
                            class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-200
                    {{ (isset($status) && $status == $item) || ($item == 'Semua' && !isset($status))
                        ? 'bg-indigo-600 text-white shadow'
                        : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                            {{ $item }}
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($lamarans as $lamaran)
                    <div
                        class="bg-white rounded-2xl shadow-md p-6 border hover:shadow-lg transition duration-200 space-y-5">

                        <div class="flex items-center gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-700 font-bold">
                                {{ strtoupper(substr($lamaran->user->name, 0, 1)) }}
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-800">{{ $lamaran->user->name }}</p>
                                <p class="text-xs text-gray-500">{{ $lamaran->user->email }}</p>
                            </div>
                        </div>

                        <div class="text-sm space-y-2 text-gray-700">
                            <p><strong>📌 Posisi:</strong> {{ $lamaran->lowongan->judul ?? '-' }}</p>
                            <p><strong>📍 Alamat:</strong> {{ $lamaran->user->profil->alamat ?? '-' }}</p>
                            <p><strong>🎓 Pendidikan:</strong> {{ $lamaran->user->profil->pendidikan_terakhir ?? '-' }}</p>
                            <p><strong>🕒 Tanggal Melamar:</strong> {{ $lamaran->created_at->translatedFormat('d M Y') }}
                            </p>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-gray-500 mb-1">Status Lamaran</label>
                            <form action="{{ route('admin.lamaran.status', $lamaran->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="status" onchange="this.form.submit()"
                                    class="w-full px-3 py-2 border rounded-lg text-sm bg-gray-50">
                                    @foreach (['Pending', 'Interview', 'Diterima', 'Ditolak'] as $s)
                                        <option value="{{ $s }}"
                                            {{ $lamaran->status == $s ? 'selected' : '' }}>{{ $s }}</option>
                                    @endforeach
                                </select>
                            </form>
                        </div>

                        <div class="flex justify-between items-center pt-4 border-t">
                            <a href="{{ route('admin.detail-profile', $lamaran->user->id) }}"
                                class="text-sm font-medium text-indigo-600 hover:underline">👤 Lihat Profil</a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center text-gray-500">Tidak ada lamaran ditemukan.</div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
