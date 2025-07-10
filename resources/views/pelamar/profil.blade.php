@extends('layouts.pelamar')

@section('title', 'Profil Pelamar')

@section('content')
    <x-nav-pelamar>
        <div class="min-h-screen bg-gray-50 py-12 px-4">
            <div class="max-w-4xl mx-auto bg-white border border-gray-200 shadow-sm rounded-xl p-8 space-y-10">

                <!-- Header -->
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-semibold text-gray-900">Profil Pelamar</h1>
                        <p class="text-sm text-gray-500 mt-1">
                            Terakhir diperbarui: {{ $profil?->updated_at->format('d M Y') ?? '-' }}
                        </p>
                    </div>
                </div>

                <!-- Info Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Left -->
                    <div class="space-y-5">
                        <x-detail label="Nama Lengkap" :value="$profil?->nama_lengkap" />
                        <x-detail label="Nomor HP" :value="$profil?->nomor_telepon" />
                        <x-detail label="Tanggal Lahir" :value="$profil?->tanggal_lahir" />
                        <x-detail label="Jenis Kelamin" :value="$profil?->jenis_kelamin" />
                        <x-detail label="Status Perkawinan" :value="$profil?->status_perkawinan" />
                    </div>

                    <!-- Right -->
                    <div class="space-y-5">
                        <x-detail label="Alamat" :value="$profil?->alamat" />
                        <x-detail label="Pendidikan Terakhir" :value="$profil?->pendidikan_terakhir" />
                        <x-detail label="Pengalaman Kerja" :value="$profil?->pengalaman_kerja" />

                        <div>
                            <dt class="text-sm text-gray-500">CV Saya</dt>
                            <dd>
                                @if ($profil?->cv)
                                    <a href="{{ asset('storage/' . $profil->cv) }}" target="_blank"
                                        class="text-indigo-600 font-medium hover:underline">
                                        Lihat CV
                                    </a>
                                @else
                                    <span class="text-gray-400">Belum ada</span>
                                @endif
                            </dd>
                        </div>

                        <div>
                            <dt class="text-sm text-gray-500">Portofolio</dt>
                            <dd>
                                @if ($profil?->portfolio)
                                    <a href="{{ $profil->portfolio }}" target="_blank"
                                        class="text-blue-600 font-medium hover:underline">
                                        {{ $profil->portfolio }}
                                    </a>
                                @else
                                    <span class="text-gray-400">Belum ada</span>
                                @endif
                            </dd>
                        </div>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="pt-4 border-t border-gray-100 text-end">
                    @if (!$profil || !$profil->is_complete)
                        <a href="{{ route('pelamar.profil.create') }}"
                            class="inline-flex items-center gap-2 text-white bg-indigo-600 hover:bg-indigo-700 px-6 py-2 rounded-md transition text-sm font-medium">
                            <i class="ri-edit-line text-lg"></i>
                            Lengkapi Data Diri
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
    </x-nav-pelamar>
@endsection
