@extends('layouts.pelamar')

@section('title', 'Profil Pelamar')

@section('content')
    <div class="min-h-screen bg-gray-50 py-12 px-4">
        <div class="max-w-4xl mx-auto bg-white border border-gray-200 shadow-sm rounded-xl p-8 space-y-10">

            <!-- Header -->
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-semibold text-gray-900">📄 Profil Pelamar</h1>
                    <p class="text-sm text-gray-500 mt-1">
                        Terakhir diperbarui: {{ $profil?->updated_at->format('d M Y') ?? '-' }}
                    </p>
                </div>
            </div>

            <!-- Alert Penting -->
            <div class="bg-yellow-50 border border-yellow-200 text-yellow-800 p-4 rounded-lg text-sm">
                ⚠️ Pastikan email dan nomor WhatsApp Anda aktif dan dapat dihubungi. Semua informasi terkait lamaran akan dikirim melalui salah satu dari keduanya.
            </div>

            <!-- Status Kelengkapan Profil -->
            @if (!$profil || !$profil->is_complete)
                <div class="bg-red-50 border border-red-200 text-red-700 p-4 rounded-lg text-sm mt-4">
                    ❌ Profil Anda belum lengkap. Silakan lengkapi data diri untuk melamar lowongan.
                </div>
            @else
                <div class="bg-green-50 border border-green-200 text-green-700 p-4 rounded-lg text-sm mt-4">
                    ✅ Profil Anda sudah lengkap dan siap digunakan untuk melamar.
                </div>
            @endif

            <!-- Info Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                <!-- Kolom Kiri -->
                <div class="space-y-5">
                    <div>
                        <dt class="text-sm text-gray-500">Nama Lengkap</dt>
                        <dd class="text-base font-medium text-gray-800">{{ $profil?->nama_lengkap ?? '-' }}</dd>
                    </div>

                    <div>
                        <dt class="text-sm text-gray-500">Email Aktif</dt>
                        <dd class="text-base font-medium text-gray-800">{{ $user?->email ?? '-' }}</dd>
                    </div>

                    <div>
                        <dt class="text-sm text-gray-500">Nomor HP / WhatsApp</dt>
                        <dd class="text-base font-medium text-gray-800">{{ $profil?->nomor_telepon ?? '-' }}</dd>
                    </div>

                    <div>
                        <dt class="text-sm text-gray-500">Tanggal Lahir</dt>
                        <dd class="text-base font-medium text-gray-800">{{ $profil?->tanggal_lahir ?? '-' }}</dd>
                    </div>

                    <div>
                        <dt class="text-sm text-gray-500">Jenis Kelamin</dt>
                        <dd class="text-base font-medium text-gray-800">{{ $profil?->jenis_kelamin ?? '-' }}</dd>
                    </div>

                    <div>
                        <dt class="text-sm text-gray-500">Status Perkawinan</dt>
                        <dd class="text-base font-medium text-gray-800">{{ $profil?->status_perkawinan ?? '-' }}</dd>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="space-y-5">
                    <div>
                        <dt class="text-sm text-gray-500">Alamat Domisili</dt>
                        <dd class="text-base font-medium text-gray-800">{{ $profil?->alamat ?? '-' }}</dd>
                    </div>

                    <div>
                        <dt class="text-sm text-gray-500">Pendidikan Terakhir</dt>
                        <dd class="text-base font-medium text-gray-800">{{ $profil?->pendidikan_terakhir ?? '-' }}</dd>
                    </div>

                    <div>
                        <dt class="text-sm text-gray-500">Pengalaman Kerja</dt>
                        <dd class="text-base font-medium text-gray-800">{{ $profil?->pengalaman_kerja ?? '-' }}</dd>
                    </div>

                    <!-- CV -->
                    <div>
                        <dt class="text-sm text-gray-500">CV Terunggah</dt>
                        <dd>
                            @if ($profil?->cv)
                                <a href="{{ asset('storage/' . $profil->cv) }}" target="_blank"
                                   class="text-indigo-600 font-medium hover:underline">
                                    📄 Lihat CV
                                </a>
                            @else
                                <span class="text-gray-400">Belum diunggah</span>
                            @endif
                        </dd>
                    </div>

                    <!-- Portofolio -->
                    <div>
                        <dt class="text-sm text-gray-500">Link Portofolio</dt>
                        <dd>
                            @if ($profil?->portfolio)
                                <a href="{{ $profil->portfolio }}" target="_blank"
                                   class="text-blue-600 font-medium hover:underline">
                                    🌐 {{ $profil->portfolio }}
                                </a>
                            @else
                                <span class="text-gray-400">Belum tersedia</span>
                            @endif
                        </dd>
                    </div>
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="pt-6 border-t border-gray-100 text-end">
                @if (!$profil || !$profil->is_complete)
                    <a href="{{ route('pelamar.profil.create') }}"
                       class="inline-flex items-center gap-2 text-white bg-indigo-600 hover:bg-indigo-700 px-6 py-2 rounded-md transition text-sm font-medium">
                        <i class="ri-edit-line text-lg"></i>
                        Lengkapi Profil
                    </a>
                @else
                    <a href="{{ route('pelamar.profil.edit') }}"
                       class="inline-flex items-center gap-2 text-white bg-indigo-600 hover:bg-indigo-700 px-6 py-2 rounded-md transition text-sm font-medium">
                        <i class="ri-edit-line text-lg"></i>
                        Ubah Data
                    </a>
                @endif
            </div>
        </div>
    </div>
@endsection
