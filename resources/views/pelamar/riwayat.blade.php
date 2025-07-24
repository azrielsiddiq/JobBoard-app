@extends('layouts.pelamar')

@section('title', 'Riwayat Lamaran')

@section('content')
        <section class="min-h-screen bg-gray-50 py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto space-y-10">

                <!-- Heading -->
                <div class="mb-6">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900">📄 Riwayat Lamaran</h1>
                    <p class="text-sm text-gray-500 mt-1">Semua lamaran kamu di <strong>Lunera Labs.</strong>.</p>
                </div>

                <!-- Card Tahapan Pelamaran -->
                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">📌 Tahapan Proses Pelamaran</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 text-center">
                        <div class="bg-blue-50 p-4 rounded-lg shadow-sm">
                            <div class="text-2xl font-bold text-blue-600">1</div>
                            <p class="text-gray-800 font-semibold mt-2">Pending</p>
                            <p class="text-sm text-gray-500">Lamaran Anda telah dikirim dan sedang dalam proses verifikasi
                                oleh tim HRD.</p>
                        </div>
                        <div class="bg-yellow-50 p-4 rounded-lg shadow-sm">
                            <div class="text-2xl font-bold text-yellow-500">2</div>
                            <p class="text-gray-800 font-semibold mt-2">Interview</p>
                            <p class="text-sm text-gray-500">Apabila lolos seleksi awal, undangan wawancara akan dikirimkan
                                melalui email.</p>
                        </div>
                        <div class="bg-green-50 p-4 rounded-lg shadow-sm">
                            <div class="text-2xl font-bold text-green-500">3</div>
                            <p class="text-gray-800 font-semibold mt-2">Diterima</p>
                            <p class="text-sm text-gray-500">Selamat! Anda akan dihubungi secara resmi melalui email terkait
                                proses selanjutnya.</p>
                        </div>
                        <div class="bg-red-50 p-4 rounded-lg shadow-sm">
                            <div class="text-2xl font-bold text-red-500">4</div>
                            <p class="text-gray-800 font-semibold mt-2">Ditolak</p>
                            <p class="text-sm text-gray-500">Status lamaran akan diperbarui di website, dan informasi lebih
                                lanjut dapat dilihat di akun Anda.</p>
                        </div>
                    </div>
                </div>


                <!-- Tips untuk Pelamar -->
                <div class="bg-indigo-50 border-l-4 border-indigo-500 p-5 rounded-lg shadow-sm">
                    <h3 class="font-semibold text-indigo-800 text-lg mb-2">💡 Tips untuk Kamu</h3>
                    <ul class="list-disc list-inside text-sm text-indigo-700 space-y-1">
                        <li>Periksa email kamu secara berkala (termasuk folder spam).</li>
                        <li>Pastikan nomor telepon dan CV terbaru sudah sesuai.</li>
                        <li>Persiapkan diri jika dihubungi untuk wawancara.</li>
                        <li>Follow up jika tidak ada kabar setelah 7 hari kerja.</li>
                    </ul>
                </div>

                <!-- List Lamaran -->
                <div class="space-y-6">
                    @forelse ($lamaran as $item)
                        <div
                            class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">

                            <div class="flex flex-col gap-1">
                                <h3 class="text-lg font-semibold text-gray-900">{{ $item->lowongan->judul }}</h3>
                                <p class="text-sm text-gray-500">
                                    Dilamar pada <span
                                        class="font-medium text-gray-700">{{ $item->created_at->format('d M Y') }}</span>
                                </p>
                                <div class="mt-2 flex flex-wrap gap-2 text-xs text-gray-600">
                                    <span
                                        class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">{{ $item->lowongan->tipe }}</span>
                                    <span
                                        class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">{{ $item->lowongan->level }}</span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Rp
                                        {{ $item->lowongan->gaji }} Juta</span>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="flex items-center gap-2">
                                <span
                                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-sm font-medium
                                {{ $item->status === 'Diterima'
                                    ? 'bg-green-100 text-green-700'
                                    : ($item->status === 'Ditolak'
                                        ? 'bg-red-100 text-red-700'
                                        : ($item->status === 'Interview'
                                            ? 'bg-yellow-100 text-yellow-700'
                                            : 'bg-gray-100 text-gray-700')) }}">

                                    @if ($item->status === 'Diterima')
                                        ✅
                                    @elseif($item->status === 'Ditolak')
                                        ❌
                                    @elseif($item->status === 'Interview')
                                        📅
                                    @else
                                        ⏳
                                    @endif
                                    {{ $item->status }}
                                </span>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 text-sm">Belum ada lamaran yang dikirim.</p>
                    @endforelse
                </div>

            </div>
        </section>
@endsection
