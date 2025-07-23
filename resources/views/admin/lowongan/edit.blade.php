@extends('layouts.admin')

@section('title', 'Edit Job Listing – Admin | Lunera Labs')

@section('content')
    <div class="max-w-5xl mx-auto px-6 py-12">
        <div class="bg-white border border-gray-200 shadow-md rounded-2xl p-10">
            <h1 class="text-3xl font-bold text-gray-800 mb-8 flex items-center gap-2">
                <span>✏️</span> Edit Lowongan
            </h1>

            <form action="{{ route('admin.lowongan.update', $lowongan->id) }}" method="POST" class="space-y-8">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Judul</label>
                    <input type="text" name="judul"
                        class="w-full bg-gray-50 border text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 p-3 @error('judul') border-red-500 @enderror"
                        value="{{ old('judul', $lowongan->judul) }}">
                    @error('judul')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Deskripsi</label>
                    <textarea name="deskripsi" rows="4"
                        class="ckeditor w-full bg-gray-50 border text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 p-3 @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi', $lowongan->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Lokasi</label>
                        <input type="text" name="lokasi"
                            class="w-full bg-gray-50 border text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 p-3 @error('lokasi') border-red-500 @enderror"
                            value="{{ old('lokasi', $lowongan->lokasi) }}">
                        @error('lokasi')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Tipe</label>
                        <select name="tipe"
                            class="w-full bg-gray-50 border text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 p-3 @error('tipe') border-red-500 @enderror">
                            <option value="">Pilih Tipe</option>
                            <option value="Full-time" {{ old('tipe', $lowongan->tipe) == 'Full-time' ? 'selected' : '' }}>
                                Full-time</option>
                            <option value="Part-time" {{ old('tipe', $lowongan->tipe) == 'Part-time' ? 'selected' : '' }}>
                                Part-time</option>
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
                            value="{{ old('gaji', $lowongan->gaji) }}">
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
                                <option value="{{ $level }}"
                                    {{ old('level', $lowongan->level) == $level ? 'selected' : '' }}>{{ $level }}
                                </option>
                            @endforeach
                        </select>
                        @error('level')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Kualifikasi</label>
                    <textarea name="kualifikasi" rows="3"
                        class="ckeditor w-full bg-gray-50 border text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 p-3 @error('kualifikasi') border-red-500 @enderror">{{ old('kualifikasi', $lowongan->kualifikasi) }}</textarea>
                    @error('kualifikasi')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Tanggung Jawab</label>
                    <textarea name="tanggung_jawab" rows="3"
                        class="ckeditor w-full bg-gray-50 border text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 p-3 @error('tanggung_jawab') border-red-500 @enderror">{{ old('tanggung_jawab', $lowongan->tanggung_jawab) }}</textarea>
                    @error('tanggung_jawab')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Tanggal Berakhir</label>
                    <input type="date" name="tanggal_berakhir"
                        class="w-full bg-gray-50 border text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 p-3 @error('tanggal_berakhir') border-red-500 @enderror"
                        value="{{ old('tanggal_berakhir', $lowongan->tanggal_berakhir ? $lowongan->tanggal_berakhir->format('Y-m-d') : '') }}">
                    @error('tanggal_berakhir')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="status"
                            class="form-checkbox rounded text-indigo-600 focus:ring-indigo-500"
                            {{ old('status', $lowongan->status) ? 'checked' : '' }}>
                        <span class="ml-2 text-gray-700 text-sm">Aktifkan Lowongan</span>
                    </label>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit"
                        class="inline-flex items-center gap-2 px-6 py-3 bg-indigo-600 text-white font-semibold text-sm rounded-xl hover:bg-indigo-700 transition shadow">
                        💾 Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
