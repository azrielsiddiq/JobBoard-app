<header class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-gray-200 shadow-sm">
    <div class="max-w-screen-xl mx-auto px-6 md:px-10">

        <div class="relative">
            <!-- Toggle checkbox (hidden) -->
            <input type="checkbox" id="menu-toggle" class="hidden peer" />

            <!-- Navbar -->
            <nav class="flex items-center justify-between h-16">

                <!-- Left: Logo + User -->
                <div class="flex items-center gap-4">
                    <div
                        class="bg-black text-white w-8 h-8 flex items-center justify-center rounded-full font-bold text-sm">
                        Y</div>
                    <h2 class="text-sm md:text-base font-medium text-gray-800">
                        Hi, <span class="font-semibold">{{ Auth::user()->name }}</span>
                    </h2>
                </div>

                <!-- Desktop Nav -->
                <ul class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-700">
                    <li>
                        <a href="{{ route('pelamar.dashboard') }}"
                            class="hover:text-purple-600 transition {{ request()->routeIs('pelamar.dashboard') ? 'text-purple-600 font-semibold' : '' }}">
                            Lowongan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pelamar.riwayat') }}"
                            class="hover:text-purple-600 transition {{ request()->routeIs('pelamar.riwayat') ? 'text-purple-600 font-semibold' : '' }}">
                            Riwayat
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="hover:text-purple-600 transition {{ request()->routeIs('pelamar.profil') ? 'text-purple-600 font-semibold' : '' }}">
                            Profil
                        </a>

                    </li>
                </ul>

                <!-- Logout (Desktop) -->
                <div class="hidden md:flex">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="bg-gray-900 hover:bg-gray-800 text-white px-4 py-2 rounded-md text-sm font-medium transition">
                            Log Out
                        </button>
                    </form>
                </div>

                <!-- Hamburger Button -->
                <label for="menu-toggle" class="md:hidden cursor-pointer">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </label>
            </nav>

            <!-- Mobile Nav -->
            <div
                class="md:hidden hidden peer-checked:flex flex-col gap-4 px-4 py-4 bg-white border-t border-gray-200 text-sm font-medium text-gray-700 shadow">
                <a href="{{ route('pelamar.dashboard') }}"
                    class="hover:text-purple-600 transition {{ request()->routeIs('pelamar.dashboard') ? 'text-purple-600 font-semibold' : '' }}">
                    Lowongan
                </a>
                <a href="{{ route('pelamar.riwayat') }}"
                    class="hover:text-purple-600 transition {{ request()->routeIs('pelamar.riwayat') ? 'text-purple-600 font-semibold' : '' }}">
                    Riwayat
                </a>
                <a href=""
                    class="hover:text-purple-600 transition {{ request()->routeIs('pelamar.profil') ? 'text-purple-600 font-semibold' : '' }}">
                    Profil
                </a>


                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="mt-2 w-full bg-gray-900 hover:bg-gray-800 text-white py-2 rounded-md transition">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

<main class="px-6 md:px-10 mt-6">
    {{ $slot }}
</main>

<script>
    const toggle = document.getElementById('menu-toggle');

    function closeMobileMenuOnResize() {
        if (window.innerWidth >= 768) {
            toggle.checked = false;
        }
    }

    window.addEventListener('resize', closeMobileMenuOnResize);
</script>
