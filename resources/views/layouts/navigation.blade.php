<nav x-data="{ open: false }" class="bg-white dark:bg-gray-900 shadow border-b border-gray-200 dark:border-gray-700">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      
      <!-- Kiri: Logo dan Navigasi -->
      <div class="flex items-center space-x-8">
        <!-- Logo -->
        <a href="{{ route('dashboard') }}">
          <x-application-logo class="h-9 w-auto text-gray-800 dark:text-white" />
        </a>

        <!-- Link Navigasi -->
        <div class="hidden sm:flex space-x-6">
          <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
          </x-nav-link>
          <!-- Tambah link lain jika perlu -->
        </div>
      </div>

      <!-- Kanan: User Dropdown -->
      <div class="hidden sm:flex items-center space-x-4">
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-600 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
              <span>{{ Auth::user()->name }}</span>
              <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </x-slot>

          <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
              {{ __('Profile') }}
            </x-dropdown-link>

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
              </x-dropdown-link>
            </form>
          </x-slot>
        </x-dropdown>
      </div>

      <!-- Mobile: Hamburger -->
      <div class="flex sm:hidden">
        <button @click="open = ! open" class="p-2 rounded-md text-gray-500 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div :class="{'block': open, 'hidden': !open}" class="sm:hidden">
    <div class="pt-4 pb-3 border-t border-gray-200 dark:border-gray-600">
      <div class="px-4">
        <div class="font-medium text-base text-gray-800 dark:text-white">{{ Auth::user()->name }}</div>
        <div class="font-medium text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</div>
      </div>

      <div class="mt-3 space-y-1 px-4">
        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
          {{ __('Dashboard') }}
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('profile.edit')">
          {{ __('Profile') }}
        </x-responsive-nav-link>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </form>
      </div>
    </div>
  </div>
</nav>
