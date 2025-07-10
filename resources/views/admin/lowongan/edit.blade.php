@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6">Edit Lowongan</h2>

    <form action="{{ route('lowongan.update', $lowongan->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Judul --}}
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Judul</label>
            <input type="text" name="judul" class="w-full border rounded p-2 @error('judul') border-red-500 @enderror" value="{{ old('judul', $lowongan->judul) }}">
            @error('judul') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        {{-- Deskripsi --}}
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="w-full border rounded p-2 @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi', $lowongan->deskripsi) }}</textarea>
            @error('deskripsi') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        {{-- Lokasi --}}
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Lokasi</label>
            <input type="text" name="lokasi" class="w-full border rounded p-2 @error('lokasi') border-red-500 @enderror" value="{{ old('lokasi', $lowongan->lokasi) }}">
            @error('lokasi') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        {{-- Tipe --}}
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Tipe</label>
            <select name="tipe" class="w-full border rounded p-2 @error('tipe') border-red-500 @enderror">
                <option value="">Pilih Tipe</option>
                <option value="Full-time" {{ old('tipe', $lowongan->tipe) == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                <option value="Part-time" {{ old('tipe', $lowongan->tipe) == 'Part-time' ? 'selected' : '' }}>Part-time</option>
            </select>
            @error('tipe') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        {{-- Gaji --}}
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Gaji</label>
            <input type="number" name="gaji" class="w-full border rounded p-2 @error('gaji') border-red-500 @enderror" value="{{ old('gaji', $lowongan->gaji) }}">
            @error('gaji') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        {{-- Level --}}
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Level</label>
            <select name="level" class="w-full border rounded p-2 @error('level') border-red-500 @enderror">
                <option value="">Pilih Level</option>
                @foreach(['Intern', 'Junior', 'Mid', 'Senior'] as $level)
                    <option value="{{ $level }}" {{ old('level', $lowongan->level) == $level ? 'selected' : '' }}>{{ $level }}</option>
                @endforeach
            </select>
            @error('level') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        {{-- Kualifikasi --}}
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Kualifikasi</label>
            <textarea name="kualifikasi" rows="3" class="w-full border rounded p-2 @error('kualifikasi') border-red-500 @enderror">{{ old('kualifikasi', $lowongan->kualifikasi) }}</textarea>
            @error('kualifikasi') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        {{-- Tanggung Jawab --}}
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Tanggung Jawab</label>
            <textarea name="tanggung_jawab" rows="3" class="w-full border rounded p-2 @error('tanggung_jawab') border-red-500 @enderror">{{ old('tanggung_jawab', $lowongan->tanggung_jawab) }}</textarea>
            @error('tanggung_jawab') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        {{-- Tanggal Berakhir --}}
        <div class="mb-6">
            <label class="block text-gray-700 font-medium mb-1">Tanggal Berakhir</label>
            <input type="date" name="tanggal_berakhir" class="w-full border rounded p-2 @error('tanggal_berakhir') border-red-500 @enderror" value="{{ old('tanggal_berakhir', $lowongan->tanggal_berakhir ? $lowongan->tanggal_berakhir->format('Y-m-d') : '') }}">
            @error('tanggal_berakhir') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        {{-- Status --}}
        <div class="mb-6">
            <label class="inline-flex items-center">
                <input type="checkbox" name="status" class="form-checkbox" {{ old('status', $lowongan->status) ? 'checked' : '' }}>
                <span class="ml-2 text-gray-700">Aktifkan Lowongan</span>
            </label>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Update</button>
        </div>
    </form>
</div>
@endsection
