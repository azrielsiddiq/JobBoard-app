@extends('layouts.admin')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-white via-indigo-50 to-purple-100 px-6 py-12">
    <div class="max-w-7xl mx-auto space-y-12">

        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900">📋 Lamaran Masuk</h1>
                <p class="text-sm text-gray-500 mt-1">Lihat dan kelola pelamar berdasarkan lowongan.</p>
            </div>
        </div>

        <form method="GET" action="{{ route('admin.lamaran-masuk') }}">
            <label for="lowongan" class="block mb-2 text-sm font-medium text-gray-700">Filter berdasarkan lowongan:</label>
            <select name="lowongan" id="lowongan" onchange="this.form.submit()"
                class="w-full sm:w-1/3 px-4 py-2 mb-8 rounded-lg border border-gray-300">
                <option value="">Semua Lowongan</option>
                @foreach ($lowongans as $lowongan)
                    <option value="{{ $lowongan->id }}" {{ request('lowongan') == $lowongan->id ? 'selected' : '' }}>
                        {{ $lowongan->judul }}
                    </option>
                @endforeach
            </select>
        </form>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($lamarans as $lamaran)
                <div class="bg-white rounded-2xl border border-gray-200 shadow-md p-6 space-y-4">
                    <div class="flex items-center gap-4">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Foto"
                             class="w-16 h-16 rounded-full object-cover">
                        <div>
                            <h2 class="text-lg font-bold text-gray-800">{{ $lamaran->user->name }}</h2>
                            <p class="text-sm text-gray-500">{{ $lamaran->user->email }}</p>
                        </div>
                    </div>

                    <div class="text-sm space-y-1">
                        <p class="text-gray-600">📍 {{ $lamaran->user->profil->alamat ?? '-' }}</p>
                        <p class="text-gray-600">🎓 {{ $lamaran->user->profil->pendidikan ?? '-' }}</p>
                        <p class="text-gray-600">📅 Melamar: {{ $lamaran->created_at->diffForHumans() }}</p>
                        <p class="text-gray-600">📌 Lowongan: {{ $lamaran->lowongan->judul ?? '-' }}</p>
                    </div>

                    <form action="{{ route('admin.lamaran.status', $lamaran->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <select name="status" onchange="this.form.submit()"
                            class="text-sm rounded-lg border-gray-300 px-3 py-1">
                            <option {{ $lamaran->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option {{ $lamaran->status == 'Interview' ? 'selected' : '' }}>Interview</option>
                            <option {{ $lamaran->status == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                            <option {{ $lamaran->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                        </select>
                    </form>

                    <div class="flex justify-between items-center border-t pt-4">
                        <a href="{{ route('admin.detail-profile') }}" class="text-sm font-medium text-indigo-600 hover:underline">Lihat Profil</a>
                        <a href="mailto:{{ $lamaran->user->email }}" class="text-sm font-medium text-emerald-600 hover:underline">Hubungi</a>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center text-gray-500">Belum ada lamaran untuk lowongan ini.</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
