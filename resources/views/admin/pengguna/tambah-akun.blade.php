@extends('layouts.admin')

@section('title', 'Create Account User – Admin | Lunera Labs')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-purple-50 via-white to-white py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto space-y-10">
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                <div class="flex items-start sm:items-center justify-between gap-4">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 flex items-center gap-3">
                            <span class="bg-purple-100 text-purple-600 p-2 rounded-full">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                </svg>
                            </span>
                            Tambah Akun Pengguna
                        </h2>
                        <p class="text-sm text-gray-500 mt-1">Gunakan form ini untuk menambahkan akun baru ke sistem.</p>
                    </div>
                    <div class="hidden md:block">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="User Illustration"
                            class="w-16 h-16">
                    </div>
                </div>
            </div>

            <div
                class="bg-white shadow-md border border-gray-200 rounded-xl overflow-hidden grid grid-cols-1 md:grid-cols-3">
                <!-- Left Info Panel -->
                <div class="bg-purple-50 hidden md:flex flex-col justify-center p-6 space-y-4 border-r">
                    <h3 class="text-xl font-semibold text-purple-700">📋 Panduan Input</h3>
                    <ul class="text-sm text-gray-700 space-y-2 list-disc list-inside">
                        <li>Nama lengkap sesuai identitas</li>
                        <li>Email aktif yang valid</li>
                        <li>Gunakan password kuat</li>
                        <li>✔️ Role sebagai <span
                                class="inline-block bg-purple-100 text-purple-700 text-xs px-2 py-0.5 rounded">Admin</span>
                            atau <span
                                class="inline-block bg-blue-100 text-blue-700 text-xs px-2 py-0.5 rounded">Pelamar</span>
                        </li>
                    </ul>
                </div>

                <form action="{{ route('admin.pengguna.store') }}" method="POST" class="p-6 space-y-6 md:col-span-2">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="mt-1 w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                        @error('name')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="mt-1 w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                        @error('email')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Password</label>
                            <input type="password" name="password"
                                class="mt-1 w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                            @error('password')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation"
                                class="mt-1 w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Role</label>
                        <select name="role"
                            class="mt-1 w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="pelamar">Pelamar</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    <div class="pt-4 flex justify-end">
                        <button type="submit"
                            class="inline-flex items-center gap-2 px-5 py-3 bg-purple-600 hover:bg-purple-700 text-white text-sm font-semibold rounded-lg shadow transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            Simpan Akun
                        </button>
                    </div>
                </form>
            </div>

            <div class="mt-10">
                <div class="bg-white p-5 rounded-lg shadow flex items-center gap-4">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13 16h-1v-4h-1m1-4h.01M12 20.5C6.753 20.5 2.5 16.247 2.5 11S6.753 1.5 12 1.5 21.5 5.753 21.5 11 17.247 20.5 12 20.5z" />
                    </svg>
                    <p class="text-sm text-gray-600">
                        Ingin mengelola akun lebih lanjut? Kunjungi halaman <a href="{{ route('admin.pengguna') }}"
                            class="text-blue-600 hover:underline">Daftar Pengguna</a>.
                    </p>
                </div>
            </div>
        </div>
    @endsection
