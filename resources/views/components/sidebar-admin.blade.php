<div x-data="{ open: true }"
    class="bg-white/90 backdrop-blur-xl border-r border-gray-200 shadow-xl transition-all duration-300 ease-in-out flex flex-col min-h-screen"
    :class="open ? 'w-72' : 'w-20'">

    <!-- Header -->
    <div class="px-4 py-5 border-b border-gray-200 flex flex-col items-center gap-2">
        <div class="w-full flex items-center" :class="open ? 'justify-between' : 'justify-center'">
            <span x-show="open" class="text-lg font-bold text-gray-800 tracking-wide">Lunera Labs</span>
            <button @click="open = !open" class="text-gray-500 hover:text-gray-700 transition-all">
                <svg x-show="open" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <svg x-show="!open" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-3 py-6 space-y-2 overflow-y-auto text-sm font-medium text-gray-700">

        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}" @click.prevent="loadPage('{{ route('admin.dashboard') }}')"
            data-route="admin.dashboard"
            class="sidebar-link group flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-200 hover:bg-purple-50 hover:text-purple-700">
            <svg class="w-5 h-5 text-gray-500 group-hover:text-purple-600" fill="none" stroke="currentColor"
                stroke-width="1.8" viewBox="0 0 24 24">
                <path d="M3 12l9-9 9 9M4 10v10a1 1 0 001 1h5v-6h4v6h5a1 1 0 001-1V10" />
            </svg>
            <span x-show="open">Dashboard</span>
        </a>

        <!-- Lowongan -->
        <a href="{{ route('admin.lowongan') }}" @click.prevent="loadPage('{{ route('admin.lowongan') }}')"
            data-route="admin.lowongan"
            class="sidebar-link group flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-200 hover:bg-purple-50 hover:text-purple-700">

            <svg class="w-5 h-5 text-gray-500 group-hover:text-purple-600" fill="none" stroke="currentColor"
                stroke-width="1.8" viewBox="0 0 24 24">
                <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
            </svg>
            <span x-show="open">Lowongan</span>
        </a>

        <!-- Pengguna -->
        <a href="{{ route('admin.pengguna') }}" @click.prevent="loadPage('{{ route('admin.pengguna') }}')"
            data-route="admin.pengguna"
            class="sidebar-link group flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-200 hover:bg-purple-50 hover:text-purple-700">

            <svg class="w-5 h-5 text-gray-500 group-hover:text-purple-600" fill="none" stroke="currentColor"
                stroke-width="1.8" viewBox="0 0 24 24">
                <path d="M5.121 17.804A8 8 0 0112 16a8 8 0 016.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span x-show="open">Pengguna</span>
        </a>
    </nav>

    <!-- Footer / Logout -->
    <div class="px-4 pb-6 pt-3 border-t border-gray-200">

        <!-- Tips -->
        <div x-show="open" class="text-xs text-gray-600 mb-4">
            <div class="bg-purple-50 rounded-lg p-3 space-y-1">
                <p><strong>Tips:</strong> Navigasi cepat dari sidebar kiri.</p>
                <p>Terakhir login: <span class="font-semibold text-gray-700">Hari ini</span></p>
            </div>
        </div>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}" x-data="{ logoutConfirm: false }">
            @csrf
            <button type="button" @click="logoutConfirm = true"
                class="w-full flex items-center gap-3 text-sm text-red-600 hover:text-red-700 transition px-3 py-2 rounded-lg hover:bg-red-50">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M17 16l4-4m0 0l-4-4m4 4H7" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span x-show="open">Logout</span>
            </button>

            <!-- Logout Modal -->
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

        <!-- Version Info -->
        <div x-show="open" class="mt-6 text-center text-[11px] text-gray-400">
            <p>Lunera Labs v1.0</p>
            <p>&copy; {{ now()->year }}</p>
        </div>
    </div>
</div>
