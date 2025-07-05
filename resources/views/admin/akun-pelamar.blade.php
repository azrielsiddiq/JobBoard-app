@extends('layouts.admin')

@section('content')
<div class="min-h-screen bg-gray-50 py-10 px-6">

    <div class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">👤 Akun Pelamar</h1>
            <p class="text-sm text-gray-500 mt-1">Kelola akun pelamar secara efisien</p>
        </div>
        <a href="#"
           class="inline-flex items-center gap-2 px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white text-sm font-medium rounded-lg shadow">
            ➕ Tambah Pelamar
        </a>
    </div>

    <div class="bg-white border border-gray-200 shadow-md rounded-2xl overflow-hidden">
        <table class="min-w-full text-sm text-gray-700">
            <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                <tr>
                    <th class="px-6 py-4 text-left">#</th>
                    <th class="px-6 py-4 text-left">Nama</th>
                    <th class="px-6 py-4 text-left">Email</th>
                    <th class="px-6 py-4 text-left">Telepon</th>
                    <th class="px-6 py-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 font-medium text-gray-900">1</td>
                    <td class="px-6 py-4">Aldo Saputra</td>
                    <td class="px-6 py-4">aldo@example.com</td>
                    <td class="px-6 py-4">0812 3456 7890</td>
                    <td class="px-6 py-4">
                        <div class="flex justify-center gap-2">
                            <a href="#"
                               class="px-3 py-1.5 text-xs bg-blue-100 text-blue-700 rounded-full hover:bg-blue-200 transition">✏️ Edit</a>
                            <form method="POST" action="#" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="px-3 py-1.5 text-xs bg-red-100 text-red-700 rounded-full hover:bg-red-200 transition">🗑️ Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
