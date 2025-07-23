@extends('layouts.auth')

@section('content')
<div class="min-h-screen grid grid-cols-1 md:grid-cols-2 bg-white">
    <!-- Kiri: Branding / Visual -->
    <div class="hidden md:flex items-center justify-center bg-gradient-to-br from-[#2D2A6A] to-[#3F3C9E] p-10">
        <div class="text-center">
            <img src="{{ asset('images/logoitem.png') }}" alt="Lunera Labs" class="mx-auto mb-6" style="max-width: 120px">
            <h1 class="text-white text-4xl font-extrabold tracking-tight">Lunera Labs</h1>
            <p class="text-purple-100 mt-4 max-w-md mx-auto text-base leading-relaxed">
                Solusi digital inovatif untuk masa depan Anda. Kami bantu bisnis Anda melesat dengan teknologi.
            </p>
        </div>
    </div>

    <!-- Kanan: Formulir Registrasi -->
    <div class="flex items-center justify-center bg-gray-50 px-6 py-12">
        <div class="w-full max-w-md bg-white shadow-2xl rounded-3xl p-8 border border-gray-100">
            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/logoungu.png') }}" alt="Lunera Labs" class="mx-auto" style="width: 120px">
            </div>

            <!-- Heading -->
            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold text-gray-800">Buat Akun Baru 🚀</h2>
                <p class="text-sm text-gray-500 mt-1">
                    Bergabung dan mulai kelola <span class="text-purple-600 font-medium">Dashboard Lunera</span>
                </p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <x-input-label for="name" :value="__('Nama Lengkap')" />
                    <x-text-input id="name" class="mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="mt-1 w-full" type="password" name="password"
                        required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
                    <x-text-input id="password_confirmation" class="mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-3 mt-2 text-lg font-semibold bg-purple-600 text-white rounded-xl hover:bg-purple-700 transition-all duration-300">
                    {{ __('Daftar Sekarang') }}
                </button>
            </form>

            <!-- Link ke Login -->
            <div class="mt-6 text-center text-sm text-gray-500">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-purple-600 hover:underline font-medium">
                    Masuk di sini
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
