@extends('layouts.pelamar')

@section('title', 'Lamaran Terkirim')

@section('content')
    <x-nav-pelamar>
        <section class="min-h-screen bg-gray-50 py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <div class="mb-10">
                    <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-gray-900">Riwayat Lamaran</h1>
                    <p class="mt-1 text-gray-500 text-sm">Lamaran kamu di <strong>PT YouthWare Indonesia</strong></p>
                </div>

                <div class="space-y-6">

                    @foreach ($lamaran as $item)
    <div
        class="relative bg-white rounded-2xl shadow-sm border border-gray-200 hover:shadow-lg transition-all p-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
        
        <div class="flex flex-col gap-1">
            <h3 class="text-lg font-semibold text-gray-900">{{ $item->lowongan->judul }}</h3>
            <div class="text-sm text-gray-500">
                Dilamar pada 
                <span class="font-medium text-gray-700">{{ $item->created_at->format('d M Y') }}</span>
            </div>
            <div class="mt-2 flex flex-wrap gap-2 text-xs text-gray-600">
                {{-- Tambahkan info tambahan jika tersedia --}}
                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">{{$item->lowongan->tipe}}</span>
                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">{{ $item->lowongan->level }} </span>
                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Rp {{$item->lowongan->gaji}} Juta</span>
            </div>
        </div>

        <div class="flex items-center gap-2">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-sm font-medium
                {{ 
                    $item->status === 'Diterima' ? 'bg-green-100 text-green-700' : 
                    ($item->status === 'Ditolak' ? 'bg-red-100 text-red-700' : 
                    ($item->status === 'Interview' ? 'bg-yellow-100 text-yellow-700' : 
                    'bg-gray-100 text-gray-700')) }}">
                
                {{-- Icon tanda centang hanya untuk status "Diterima" --}}
                @if($item->status === 'Diterima')
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                @elseif($item->status === 'Ditolak')
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                @elseif($item->status === 'Interview')
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v1m0 14v1m8-8h1M4 12H3m15.36 6.36l.707.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l.707.707" />
                    </svg>
                @else
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3" />
                    </svg>
                @endif

                {{ $item->status }}
            </span>
        </div>
    </div>
@endforeach


                </div>
            </div>
        </section>
    </x-nav-pelamar>
@endsection
