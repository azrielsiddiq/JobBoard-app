<div x-data="{ open: true }"
    class="bg-white/80 backdrop-blur-xl border-r border-gray-200 shadow-lg transition-all duration-300 ease-in-out flex flex-col"
    :class="open ? 'w-72' : 'w-20'">

    <!-- Sidebar Header -->
    <div class="flex items-center justify-between px-4 py-5 border-b border-gray-200">
        <div class="flex items-center space-x-3">
            <span x-show="open"
                class="text-xl font-semibold tracking-tight text-gray-800 transition-opacity duration-300">Admin</span>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-3 py-6 space-y-2 overflow-y-auto">

        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}"
            @click.prevent="document.body.classList.add('page-exit'); setTimeout(() => window.location.href='{{ route('admin.dashboard') }}', 400)"
            class="group flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-200 text-gray-700 hover:bg-purple-100 hover:text-purple-700 font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-purple-50 text-purple-700' : '' }}">
            <span x-show="open" class="whitespace-nowrap">Dashboard</span>
        </a>

        <!-- Lowongan -->
        <a href="{{ route('admin.lowongan') }}"
            @click.prevent="document.body.classList.add('page-exit'); setTimeout(() => window.location.href='{{ route('admin.lowongan') }}', 400)"
            class="group flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-200 text-gray-700 hover:bg-purple-100 hover:text-purple-700 font-medium {{ request()->routeIs('admin.lowongan') ? 'bg-purple-50 text-purple-700' : '' }}">
            <span x-show="open" class="whitespace-nowrap">Lowongan</span>
        </a>

        <!-- Akun Pelamar -->
        <a href="{{ route('admin.akun-pelamar') }}"
            @click.prevent="document.body.classList.add('page-exit'); setTimeout(() => window.location.href='{{ route('admin.akun-pelamar') }}', 400)"
            class="group flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-200 text-gray-700 hover:bg-purple-100 hover:text-purple-700 font-medium {{ request()->routeIs('admin.akun-pelamar') ? 'bg-purple-50 text-purple-700' : '' }}">
            <span x-show="open" class="whitespace-nowrap">Akun Pelamar</span>
        </a>
    </nav>

    <!-- Logout -->
<div x-data="{ logoutConfirm: false }" class="px-4 py-4 border-t border-gray-200">
    <form method="POST" action="{{ route('logout') }}" x-ref="logoutForm">
        @csrf
        <button type="button" @click="logoutConfirm = true"
            class="flex items-center gap-3 text-sm text-red-600 hover:text-red-700 transition w-full">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M17 16l4-4m0 0l-4-4m4 4H7"
                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span x-show="open">Logout</span>
        </button>

        <!-- Modal -->
        <div x-show="logoutConfirm" x-transition x-cloak
             class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50">
            <div class="bg-white w-full max-w-md mx-4 rounded-2xl p-6 text-center shadow-2xl">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Konfirmasi Logout</h2>
                <p class="text-sm text-gray-600 mb-5">Apakah Anda yakin ingin keluar dari akun?</p>
                <div class="flex justify-center gap-4">
                    <button type="button" @click="logoutConfirm = false"
                            class="px-4 py-2 text-sm rounded-lg border text-gray-600 hover:bg-gray-100">Batal</button>
                    <button type="submit"
                            class="px-4 py-2 text-sm rounded-lg bg-red-600 text-white hover:bg-red-700">Keluar</button>
                </div>
            </div>
        </div>
    </form>
</div>

</div>
