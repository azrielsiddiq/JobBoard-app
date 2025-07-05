@extends('layouts.pelamar')

@section('content')
    <x-nav-pelamar>

        <section class="relative isolate overflow-hidden bg-white py-32">
            <div class="absolute inset-0 -z-10 bg-gradient-to-br from-[#f3f4f6] via-white to-[#fafafa]"></div>
            <div
                class="absolute top-0 left-1/2 transform -translate-x-1/2 w-[40rem] h-[40rem] bg-purple-300 rounded-full blur-[140px] opacity-20 -z-10">
            </div>

            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-8 text-center">
                <div class="inline-flex items-center gap-3 mb-6">
                    <div
                        class="bg-black text-white w-10 h-10 flex items-center justify-center rounded-full font-bold text-sm">
                        Y</div>
                    <span class="text-gray-800 text-sm font-medium">PT YouthWare Indonesia</span>
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold leading-tight tracking-tight text-gray-900">
                    Bangun Masa Depanmu bersama <span class="text-purple-600">YouthWare</span>
                </h1>
                <p class="text-lg mt-4 text-gray-500 max-w-2xl mx-auto">
                    Platform karier modern untuk generasi muda yang kreatif dan penuh semangat.
                </p>
                <a href="#lowongan"
                    class="mt-8 inline-flex items-center gap-2 px-6 py-3 rounded-full text-sm font-medium bg-gradient-to-r from-purple-600 to-indigo-600 text-white hover:from-purple-700 hover:to-indigo-700 shadow-lg transition duration-300">
                    <span>Telusuri Lowongan</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </section>

        <section id="lowongan" class="py-24 bg-white">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-8">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-16">Lowongan Terbaru</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <div
                        class="bg-gradient-to-b from-white to-gray-50 border border-gray-200 p-6 rounded-3xl shadow-md hover:shadow-xl transition-transform hover:-translate-y-1">
                        <div class="flex items-center gap-4">
                            <div class="bg-purple-100 text-purple-600 p-2 rounded-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-6h13M9 5l7 7-7 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Frontend Developer</h3>
                                <p class="text-sm text-gray-500">PT YouthWare • Remote</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-4">Berkontribusi dalam pengembangan teknologi modern.</p>
                        <div class="flex flex-wrap gap-2 mt-4 text-xs text-gray-600">
                            <span class="bg-gray-200 px-3 py-1 rounded-full">Full-time</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full">Vue.js</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full">Tailwind CSS</span>
                        </div>
                        <div class="flex items-center justify-between mt-6">
                            <span class="text-sm font-semibold text-purple-600">💰 Rp 10–15 juta</span>
                            <button
                                class="bg-purple-600 text-white px-4 py-2 text-sm rounded-md hover:bg-purple-700 transition">Lamar</button>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-b from-white to-gray-50 border border-gray-200 p-6 rounded-3xl shadow-md hover:shadow-xl transition-transform hover:-translate-y-1">
                        <div class="flex items-center gap-4">
                            <div class="bg-purple-100 text-purple-600 p-2 rounded-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-6h13M9 5l7 7-7 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">UI/UX Designer</h3>
                                <p class="text-sm text-gray-500">PT YouthWare • Jakarta</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-4">Berkontribusi dalam pengembangan teknologi modern.</p>
                        <div class="flex flex-wrap gap-2 mt-4 text-xs text-gray-600">
                            <span class="bg-gray-200 px-3 py-1 rounded-full">Kontrak</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full">Figma</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full">Design System</span>
                        </div>
                        <div class="flex items-center justify-between mt-6">
                            <span class="text-sm font-semibold text-purple-600">💰 Rp 12–18 juta</span>
                            <a href="{{ route('pelamar.detail-pekerjaan') }}"
                                class="bg-purple-600 text-white px-4 py-2 text-sm rounded-md hover:bg-purple-700 transition">
                                Lamar
                            </a>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-b from-white to-gray-50 border border-gray-200 p-6 rounded-3xl shadow-md hover:shadow-xl transition-transform hover:-translate-y-1">
                        <div class="flex items-center gap-4">
                            <div class="bg-purple-100 text-purple-600 p-2 rounded-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-6h13M9 5l7 7-7 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Backend Developer</h3>
                                <p class="text-sm text-gray-500">PT YouthWare • Yogyakarta</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-4">Berkontribusi dalam pengembangan teknologi modern.</p>
                        <div class="flex flex-wrap gap-2 mt-4 text-xs text-gray-600">
                            <span class="bg-gray-200 px-3 py-1 rounded-full">Full-time</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full">Laravel</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full">API</span>
                        </div>
                        <div class="flex items-center justify-between mt-6">
                            <span class="text-sm font-semibold text-purple-600">💰 Rp 9–13 juta</span>
                            <button
                                class="bg-purple-600 text-white px-4 py-2 text-sm rounded-md hover:bg-purple-700 transition">Lamar</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </x-nav-pelamar>
@endsection
