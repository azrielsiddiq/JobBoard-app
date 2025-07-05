@extends('layouts.pelamar')

@section('title', 'Detail Pekerjaan')

@section('content')
<x-nav-pelamar>

<div class="bg-[#f9fafb] min-h-screen pt-20 pb-24 font-sans text-gray-900">
  <div class="max-w-7xl mx-auto px-6 md:px-10 lg:px-16 grid grid-cols-1 lg:grid-cols-3 gap-12">
    <div class="lg:col-span-2 space-y-12">

      <section class="space-y-4">
        <span class="inline-block bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
          Frontend Developer
        </span>
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight tracking-tight">
          Bergabung dengan <span class="text-purple-600">YouthWare</span>
        </h1>
        <p class="text-sm text-gray-500">Diposting: 28 Juni 2025 • Berlaku hingga 30 Sep 2025</p>
      </section>

      <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
        <!-- Informasi pekerjaan -->
        <div class="bg-white border border-gray-200 shadow-sm rounded-xl p-4">
          <p class="text-xs text-gray-500 mb-1">Lokasi</p>
          <p class="font-medium text-purple-800">Remote</p>
        </div>
        <div class="bg-white border border-gray-200 shadow-sm rounded-xl p-4">
          <p class="text-xs text-gray-500 mb-1">Tipe</p>
          <p class="font-medium text-purple-800">Full-time</p>
        </div>
        <div class="bg-white border border-gray-200 shadow-sm rounded-xl p-4">
          <p class="text-xs text-gray-500 mb-1">Gaji</p>
          <p class="font-medium text-purple-800">Rp 10–15 juta</p>
        </div>
        <div class="bg-white border border-dashed border-gray-300 shadow-sm rounded-xl p-4">
          <p class="text-xs text-gray-500 mb-1">Level</p>
          <p class="font-medium text-gray-700">Junior - Mid</p>
        </div>
        <div class="bg-white border border-dashed border-gray-300 shadow-sm rounded-xl p-4">
          <p class="text-xs text-gray-500 mb-1">Department</p>
          <p class="font-medium text-gray-700">Engineering</p>
        </div>
      </div>

      <section class="space-y-6">
        <div>
          <h2 class="text-xl font-bold mb-2">Tentang Pekerjaan</h2>
          <p class="text-gray-700 leading-relaxed">
            YouthWare mencari Frontend Developer penuh semangat untuk membangun aplikasi modern menggunakan Vue.js dan Tailwind CSS. Lingkungan kerja fleksibel dan mendukung pertumbuhan.
          </p>
        </div>

        <div>
          <h2 class="text-xl font-bold mb-2">Tanggung Jawab</h2>
          <ul class="list-disc list-inside text-gray-700 space-y-1">
            <li>Ubah desain dari Figma ke Vue.js</li>
            <li>Kembangkan komponen UI reusable</li>
            <li>Kolaborasi erat dengan UI/UX dan Backend</li>
            <li>Pastikan performa dan aksesibilitas</li>
          </ul>
        </div>

        <div>
          <h2 class="text-xl font-bold mb-2">Kualifikasi</h2>
          <ul class="list-disc list-inside text-gray-700 space-y-1">
            <li>Pengalaman min. 1 tahun dengan Vue.js</li>
            <li>Menguasai Tailwind CSS</li>
            <li>Tahu Git, API, dan agile</li>
            <li>Komunikatif & terbuka terhadap feedback</li>
          </ul>
        </div>
      </section>
    </div>

    <aside class="sticky top-28 h-fit">
      <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 space-y-6">
        <div class="text-center">
          <h3 class="text-lg font-bold">Tertarik dengan posisi ini?</h3>
          <p class="text-sm text-gray-500 mt-1">Kami tunggu lamaran terbaikmu.</p>
        </div>
        <a href="{{ route('pelamar.form-lamarpekerjaan') }}"
           class="block w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white text-center py-3 rounded-lg font-medium transition-all">
          Lamar Sekarang 🚀
        </a>
      </div>
    </aside>

  </div>
</div>

</x-nav-pelamar>
@endsection
