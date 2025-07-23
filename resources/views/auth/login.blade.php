@extends('layouts.auth')

@section('content')
    <div class="min-h-screen grid grid-cols-1 md:grid-cols-2 bg-white">
        <!-- Kiri: Gambar / Branding -->
        <div class="hidden md:flex items-center justify-center bg-gradient-to-br from-[#2D2A6A] to-[#3F3C9E] p-10">
            <div class="text-center">
                <img src="{{ asset('images/logoitem.png') }}" alt="Lunera Labs" class="mx-auto" style="max-width: 25%">
                <h1 class="text-white text-4xl font-bold leading-snug">Lunera Labs</h1>
                <p class="text-purple-100 mt-4 max-w-sm mx-auto">Solusi digital yang inovatif untuk masa depan Anda.</p>
            </div>
        </div>

        <!-- Kanan: Form Login -->
        <div class="flex items-center justify-center bg-gray-50 px-6 py-12">
            <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8">
                <!-- Branding -->
                <div class="flex justify-center">
                    <img src="{{ asset('images/logoungu.png') }}"
                        alt="Lunera Labs" class="mx-auto" style="width: 50%; height: 30%;">
                </div>

                <!-- Heading -->
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">
                    Selamat Datang Kembali 👋
                </h2>
                <p class="text-center text-sm text-gray-500 mb-6">
                    Login untuk mulai mengelola <span class="font-medium text-purple-600">Dashboard Lunera</span>
                </p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember + Forgot -->
                    <div class="flex items-center justify-between mb-6">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-purple-600 shadow-sm focus:ring-purple-500"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a class="text-sm text-purple-600 hover:underline" href="{{ route('password.request') }}">
                                {{ __('Lupa password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full justify-center py-2 text-lg bg-purple-600 text-white hover:bg-purple-700 transition duration-300">
                        {{ __('Masuk') }}
                </button>
                </form>

                <!-- Register -->
                <div class="mt-6 text-center text-sm text-gray-500">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-purple-600 hover:underline font-medium">
                        Daftar di sini
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
