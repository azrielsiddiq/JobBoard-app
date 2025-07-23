@extends('layouts.admin')

@section('title', 'Edit Account User – Admin | Lunera Labs')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-indigo-50 via-white to-white py-10 px-6">
        <div class="max-w-6xl mx-auto mb-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">👤 Edit Akun Pengguna</h1>
                <p class="text-sm text-gray-600 mt-1">Kelola informasi pengguna aktif di sistem Anda.</p>
            </div>
            <a href="{{ route('admin.pengguna') }}"
                class="inline-flex items-center px-4 py-2 text-sm bg-white border border-gray-300 text-gray-700 rounded-lg shadow-sm hover:bg-gray-50">
                ← Kembali ke Daftar Pengguna
            </a>
        </div>

        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-purple-50 to-white rounded-xl p-6 shadow-md border">
                <div class="mb-4 flex items-center gap-2">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 17h5l-1.405-1.405M19.5 12A7.5 7.5 0 112 12a7.5 7.5 0 0117.5 0z" />
                    </svg>
                    <h2 class="text-lg font-semibold text-gray-800">Panduan Pengeditan</h2>
                </div>
                <ul class="list-disc ml-5 text-sm text-gray-700 space-y-2">
                    <li>Pastikan <strong>nama</strong> dan <strong>email</strong> valid.</li>
                    <li>Role <code>admin</code> memiliki hak penuh pada sistem.</li>
                    <li>Email harus unik, tidak boleh duplikat.</li>
                    <li>Periksa kembali sebelum klik simpan.</li>
                </ul>

                <div class="mt-6 bg-purple-50 border border-purple-200 text-sm text-purple-700 p-4 rounded-md">
                    ✅ Perubahan akan langsung aktif setelah disimpan.
                </div>

                <div class="mt-6 bg-white border rounded-lg p-4 shadow-sm text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/9131/9131546.png" class="w-16 h-16 mx-auto mb-3"
                        alt="User Icon">
                    <p class="text-sm text-gray-600">Sedang mengedit akun milik:</p>
                    <h3 class="text-md font-semibold text-gray-800 mt-1">{{ $pengguna->name }}</h3>
                    <p class="text-xs text-gray-400">{{ $pengguna->email }}</p>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="bg-white p-8 rounded-xl shadow-lg border">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold text-gray-800 flex items-center gap-2">
                            ✏️ Formulir Edit Akun
                        </h2>
                        <p class="text-sm text-gray-600 mt-1">Perbarui informasi pengguna sesuai kebutuhan sistem.</p>
                    </div>

                    <form action="{{ route('admin.pengguna.update', $pengguna->id) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" name="name" value="{{ old('name', $pengguna->name) }}"
                                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-purple-500 focus:border-purple-500">
                            @error('name')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="text" name="email" value="{{ old('email', $pengguna->email) }}"
                                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-purple-500 focus:border-purple-500">
                            @error('email')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Role</label>
                            <select name="role"
                                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-purple-500 focus:border-purple-500">
                                <option value="pelamar" {{ $pengguna->role === 'pelamar' ? 'selected' : '' }}>Pelamar
                                </option>
                                <option value="admin" {{ $pengguna->role === 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="inline-flex items-center gap-2 px-5 py-3 bg-purple-600 hover:bg-purple-700 text-white text-sm font-medium rounded-lg shadow-md transition-all">
                                💾 Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
