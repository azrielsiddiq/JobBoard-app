@extends('layouts.admin')

@section('title', 'Create Job Listing – Admin | Lunera Labs')

@section('content')
    <div class="max-w-5xl mx-auto px-6 py-12">
        <div class="bg-white border border-gray-200 shadow-md rounded-2xl p-10">
            <h1 class="text-3xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span>📝</span> Tambah Lowongan
            </h1>

            <form action="{{ route('admin.lowongan.store') }}" method="POST" class="space-y-8">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Judul</label>
                    <input type="text" name="judul"
                        class="w-full bg-gray-50 border text-gray-800 text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 p-3 @error('judul') border-red-500 @enderror"
                        value="{{ old('judul') }}">
                    @error('judul')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-600 mb-2">Deskripsi</label>
                    <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
                    <trix-editor input="deskripsi"
                        class="bg-white trix-content border text-sm rounded-xl @error('deskripsi') border-red-500 @enderror"></trix-editor>
                    @error('deskripsi')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Lokasi</label>
                        <input type="text" name="lokasi"
                            class="w-full bg-gray-50 border text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 p-3 @error('lokasi') border-red-500 @enderror"
                            value="{{ old('lokasi') }}">
                        @error('lokasi')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Tipe</label>
                        <select name="tipe"
                            class="w-full bg-gray-50 border text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 p-3 @error('tipe') border-red-500 @enderror">
                            <option value="">Pilih Tipe</option>
                            <option value="Full-time" {{ old('tipe') == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                            <option value="Part-time" {{ old('tipe') == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                        </select>
                        @error('tipe')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Gaji (Rp)</label>
                        <input type="number" name="gaji"
                            class="w-full bg-gray-50 border text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 p-3 @error('gaji') border-red-500 @enderror"
                            value="{{ old('gaji') }}">
                        @error('gaji')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Level</label>
                        <select name="level"
                            class="w-full bg-gray-50 border text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 p-3 @error('level') border-red-500 @enderror">
                            <option value="">Pilih Level</option>
                            @foreach (['Intern', 'Junior', 'Mid', 'Senior'] as $level)
                                <option value="{{ $level }}" {{ old('level') == $level ? 'selected' : '' }}>
                                    {{ $level }}</option>
                            @endforeach
                        </select>
                        @error('level')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-600 mb-2">Kualifikasi</label>
                    <input id="kualifikasi" type="hidden" name="kualifikasi" value="{{ old('kualifikasi') }}">
                    <trix-editor input="kualifikasi"
                        class="bg-white trix-content border text-sm rounded-xl @error('kualifikasi') border-red-500 @enderror"></trix-editor>
                    @error('kualifikasi')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-600 mb-2">Tanggung Jawab</label>
                    <input id="tanggung_jawab" type="hidden" name="tanggung_jawab" value="{{ old('tanggung_jawab') }}">
                    <trix-editor input="tanggung_jawab"
                        class="bg-white trix-content border text-sm rounded-xl @error('tanggung_jawab') border-red-500 @enderror"></trix-editor>
                    @error('tanggung_jawab')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Tanggal Berakhir</label>
                    <input type="date" name="tanggal_berakhir"
                        class="w-full bg-gray-50 border text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 p-3 @error('tanggal_berakhir') border-red-500 @enderror"
                        value="{{ old('tanggal_berakhir') }}">
                    @error('tanggal_berakhir')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit"
                        class="inline-flex items-center gap-2 px-6 py-3 bg-indigo-600 text-white font-semibold text-sm rounded-xl hover:bg-indigo-700 transition shadow">
                        💾 Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
