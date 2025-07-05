@extends('layouts.pelamar')

@section('title', 'Formulir Lamaran')

@section('content')
    <x-nav-pelamar>

        <section class="bg-gray-50 py-16">
            <div class="max-w-2xl mx-auto px-6">
                <div class="bg-white border border-gray-200 p-8 rounded-2xl shadow-sm">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">
                        Formulir Lamaran Kerja
                    </h2>

                    <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" name="nama" placeholder="Masukkan nama lengkap"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" name="email" placeholder="contoh@email.com"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                            <input type="text" name="telepon" placeholder="08xxxxxxxxxx"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Posisi Dilamar
                            </label>
                            <div
                                class="w-full px-4 py-3 bg-gray-100 text-gray-800 text-sm rounded-lg border border-gray-200 shadow-sm flex items-center justify-between">
                                <span class="font-medium">Frontend Developer</span>
                                <span class="text-xs text-gray-500 italic">Tidak dapat diubah</span>
                            </div>
                            <p class="mt-1 text-xs text-purple-500">
                                Posisi ini otomatis terisi sesuai lowongan yang Anda pilih sebelumnya.
                            </p>
                            <input type="hidden" name="posisi" value="Frontend Developer">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Upload CV</label>
                            <div class="flex items-center space-x-4">
                                <label
                                    class="flex flex-col w-full border-2 border-dashed border-gray-300 rounded-lg p-6 cursor-pointer hover:border-purple-400 transition text-center">
                                    <span class="text-sm text-gray-500">Klik atau seret file ke sini</span>
                                    <input type="file" name="cv" class="hidden"
                                        accept=".pdf,.doc,.docx,.png,.jpg,.jpeg">
                                </label>
                            </div>
                            <p class="mt-1 text-xs text-purple-500">Format yang didukung: PDF, DOC, JPG, PNG.</p>
                        </div>

                        <!-- Deskripsi Diri -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Ceritakan tentang diri Anda</label>
                            <textarea name="deskripsi" rows="4"
                                placeholder="Tuliskan deskripsi singkat tentang pengalaman dan motivasi Anda..."
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 text-sm"></textarea>
                        </div>

                        <div>
                            <button type="submit"
                                class="w-full inline-flex justify-center items-center px-5 py-3 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
                                Kirim Lamaran
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </x-nav-pelamar>
@endsection
