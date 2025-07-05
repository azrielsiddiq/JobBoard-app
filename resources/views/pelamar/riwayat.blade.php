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

        <!-- Card -->
        <div class="relative bg-white rounded-2xl shadow-sm border border-gray-200 hover:shadow-lg transition-all p-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
          <div class="flex flex-col gap-1">
            <h3 class="text-lg font-semibold text-gray-900">Frontend Developer</h3>
            <div class="text-sm text-gray-500">Dilamar pada <span class="font-medium text-gray-700">18 Juni 2025</span></div>
            <div class="mt-2 flex flex-wrap gap-2 text-xs text-gray-600">
              <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Remote</span>
              <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Full-time</span>
              <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Rp 10–15 juta</span>
            </div>
          </div>

          <div class="flex items-center gap-2">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-700">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
              </svg>
              Diterima
            </span>
          </div>
        </div>

        <!-- Card -->
        <div class="relative bg-white rounded-2xl shadow-sm border border-gray-200 hover:shadow-lg transition-all p-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
          <div class="flex flex-col gap-1">
            <h3 class="text-lg font-semibold text-gray-900">UI/UX Designer</h3>
            <div class="text-sm text-gray-500">Dilamar pada <span class="font-medium text-gray-700">21 Juni 2025</span></div>
            <div class="mt-2 flex flex-wrap gap-2 text-xs text-gray-600">
              <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Remote</span>
              <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Kontrak</span>
              <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Rp 8–10 juta</span>
            </div>
          </div>

          <div class="flex items-center gap-2">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-700">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l2 2" />
              </svg>
              Menunggu
            </span>
          </div>
        </div>

        <!-- Card -->
        <div class="relative bg-white rounded-2xl shadow-sm border border-gray-200 hover:shadow-lg transition-all p-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
          <div class="flex flex-col gap-1">
            <h3 class="text-lg font-semibold text-gray-900">Backend Developer</h3>
            <div class="text-sm text-gray-500">Dilamar pada <span class="font-medium text-gray-700">23 Juni 2025</span></div>
            <div class="mt-2 flex flex-wrap gap-2 text-xs text-gray-600">
              <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Yogyakarta</span>
              <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Full-time</span>
              <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Rp 9–13 juta</span>
            </div>
          </div>

          <div class="flex items-center gap-2">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-700">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
              Ditolak
            </span>
          </div>
        </div>

      </div>
    </div>
  </section>
</x-nav-pelamar>
@endsection
