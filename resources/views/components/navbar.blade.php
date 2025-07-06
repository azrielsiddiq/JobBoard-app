<nav>
  <div class="nav__header">
    <div class="nav__logo">
      <a href="#" class="logo">Job<span>Board</span></a>
    </div>
    <div class="nav__menu__btn" id="menu-btn">
      <i class="ri-menu-line"></i>
    </div>
  </div>

  <ul class="nav__links" id="nav-links">
    <li><a href="#home">Beranda</a></li>
    <li><a href="#about">Panduan</a></li>
    <li><a href="#job">Pekerjaan</a></li>

    @if (Route::has('login'))
      @auth
        <li>
          @if (Auth::user()->role === 'pelamar')
            <a href="{{ route('pelamar.dashboard') }}" class="btn">
              Pelamar Dashboard
            </a>
          @elseif (Auth::user()->role === 'admin')
            <a href="{{ route('admin.dashboard') }}" class="btn">
              Admin Dashboard
            </a>
          @endif
        </li>
      @else
        <li>
          <a href="{{ route('login') }}" class="btn bg-purple-600 text-white font-medium py-2 px-4 rounded hover:bg-purple-700 transition">
            Masuk
          </a>
        </li>

        @if (Route::has('register'))
          <li>
            <a href="{{ route('register') }}" class="btn bg-purple-600 text-white font-medium py-2 px-4 rounded hover:bg-purple-700 transition">
              Daftar
            </a>
          </li>
        @endif
      @endauth
    @endif
  </ul>
</nav>
