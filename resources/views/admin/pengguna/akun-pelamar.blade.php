@extends('layouts.admin')

@section('title', 'User Management – Admin | Lunera Labs')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-indigo-50 via-white to-white py-12 px-6">
        <div class="max-w-7xl mx-auto space-y-8">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-4xl font-bold text-gray-900">👥 Manajemen Pelamar</h1>
                    <p class="text-sm text-gray-500 mt-1">Pantau dan kelola akun pelamar aktif.</p>
                </div>
                <a href="{{ route('admin.pengguna.create') }}"
                    class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-purple-600 text-white hover:bg-purple-700 transition-all text-sm font-medium shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Pelamar
                </a>
            </div>

            <div class="bg-white border border-gray-200 rounded-3xl p-8 shadow-sm mb-14 space-y-8">

                <div class="grid gap-6 md:grid-cols-3">
                    <div>
                        <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-2">Apa Gunanya Halaman
                            Ini?</h4>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Untuk membantu admin memantau dan mengelola semua akun pengguna yang mendaftar di platform,
                            terutama pelamar baru.
                        </p>
                    </div>

                    <div>
                        <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-2">Apa yang Bisa
                            Dilakukan?</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Lihat data pengguna yang mendaftar</li>
                            <li>• Aktifkan akun pelamar secara manual</li>
                            <li>• Hapus akun yang tidak valid atau ganda</li>
                            <li>• Cek log aktivitas pengguna</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-2">Tips Cepat</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Pastikan email & nama terlihat asli</li>
                            <li>• Jangan langsung hapus, cek riwayat dulu</li>
                            <li>• Prioritaskan akun dengan data lengkap</li>
                        </ul>
                    </div>
                </div>

                <div class="border-t border-dashed border-gray-200 pt-6 grid md:grid-cols-3 gap-6">
                    <div class="flex gap-3">
                        <div
                            class="shrink-0 h-9 w-9 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center font-semibold">
                            1</div>
                        <div>
                            <p class="text-sm font-semibold text-gray-800">Aktifkan Akun</p>
                            <p class="text-xs text-gray-500 leading-snug">Akun pelamar tidak bisa digunakan sebelum admin
                                aktifkan.</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <div
                            class="shrink-0 h-9 w-9 rounded-lg bg-indigo-100 text-indigo-600 flex items-center justify-center font-semibold">
                            2</div>
                        <div>
                            <p class="text-sm font-semibold text-gray-800">Cek Aktivitas</p>
                            <p class="text-xs text-gray-500 leading-snug">Riwayat login dan lamaran tercatat otomatis.</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <div
                            class="shrink-0 h-9 w-9 rounded-lg bg-green-100 text-green-600 flex items-center justify-center font-semibold">
                            3</div>
                        <div>
                            <p class="text-sm font-semibold text-gray-800">Hapus Akun</p>
                            <p class="text-xs text-gray-500 leading-snug">Hapus akun kosong, duplikat, atau tidak jelas.</p>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-2">Tanya Jawab Singkat
                        </h4>
                        <div class="space-y-4 text-sm">
                            <div>
                                <p class="font-medium text-gray-800">Apa semua bisa jadi admin?</p>
                                <p class="text-gray-600 text-xs mt-1">Sebaiknya hanya orang yang dipercaya.</p>
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">Log aktivitas itu apa?</p>
                                <p class="text-gray-600 text-xs mt-1">Catatan otomatis kapan pengguna daftar, atau
                                    melamar kerja.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 border border-purple-100">
                        <h4 class="text-sm font-semibold text-purple-700 uppercase tracking-wide mb-3">Checklist Harian</h4>
                        <ul class="text-xs text-purple-700 space-y-2">
                            <li>☑ Lihat akun pelamar baru</li>
                            <li>☑ Periksa apakah data mereka lengkap</li>
                            <li>☑ Aktifkan jika valid</li>
                            <li>☑ Hapus jika tidak masuk akal</li>
                            <li>☑ Cek log untuk aktivitas mencurigakan</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="bg-white border border-gray-200 shadow-xl rounded-3xl overflow-hidden">
                <table class="min-w-full divide-y divide-gray-100">
                    <thead class="bg-purple-50 text-xs text-purple-800 uppercase tracking-wider">
                        <tr>
                            <th class="px-6 py-5 text-left">#</th>
                            <th class="px-6 py-5 text-left">Profil</th>
                            <th class="px-6 py-5 text-left">Email</th>
                            <th class="px-6 py-5 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                        @forelse ($pengguna as $index => $user)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-5">{{ $index + 1 }}</td>
                                <td class="px-6 py-5 flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 bg-purple-100 text-purple-700 font-bold rounded-full flex items-center justify-center uppercase">
                                        {{ substr($user->name, 0, 1) }}
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-900">{{ $user->name }}</div>
                                        <div class="text-xs text-gray-400">ID: {{ $user->id }}</div>
                                    </div>
                                </td>
                                <td class="px-6 py-5">{{ $user->email }}</td>
                                <td class="px-6 py-5 text-center">
                                    <div class="flex justify-center gap-2">
                                        <a href="{{ route('admin.pengguna.edit', $user->id) }}"
                                            class="px-4 py-1.5 text-xs rounded-full bg-blue-100 text-blue-700 hover:bg-blue-200 transition font-medium">
                                            ✏️ Edit
                                        </a>
                                        <form method="POST" action="{{ route('admin.pengguna.destroy', $user->id) }}"
                                            onsubmit="return confirm('Yakin ingin menghapus pelamar ini?')">
                                            @csrf
                                            <button type="submit"
                                                class="px-4 py-1.5 text-xs rounded-full bg-red-100 text-red-600 hover:bg-red-200 transition font-medium">
                                                🗑️ Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-10 text-gray-400 italic">Belum ada pelamar
                                    terdaftar.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
