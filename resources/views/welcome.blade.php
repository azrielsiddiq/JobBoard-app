<x-app-layout>
    {{-- ===== Hero Section ===== --}}
    <header class="section__container header__container" id="home">
        <h1>Lunera Labs – <br />Solusi Digital & <span>Inovasi Teknologi</span></h1>
        <p>
            Kami membangun produk digital yang efisien, scalable, dan siap pakai untuk masa depan.
            Lunera Labs hadir untuk membantu Anda membangun sistem yang tepat guna dan berdampak.
        </p>
        <div class="header__btns">
            <a href="#about" class="btn">Kenali Kami</a>
            <a href="#job" class="btn">Lihat Lowongan</a>
        </div>
    </header>

    {{-- ===== About / Steps Section ===== --}}
    <section class="steps" id="about">
        <div class="section__container steps__container">
            <h2 class="section__header">
                Membangun Masa Depan <span>Bersama Lunera Labs</span>
            </h2>
            <p class="section__description">
                Kami adalah tim pengembang, desainer, dan pemikir kreatif yang bekerja dengan semangat untuk menciptakan
                solusi teknologi yang berdampak nyata.
            </p>
            <div class="steps__grid">
                <div class="steps__card">
                    <span><i class="ri-lightbulb-flash-fill"></i></span>
                    <h4>Ideasi</h4>
                    <p>Kami mulai dari memahami masalah Anda dan merancang solusi yang sesuai dengan kebutuhan bisnis
                        Anda.</p>
                </div>
                <div class="steps__card">
                    <span><i class="ri-code-box-fill"></i></span>
                    <h4>Development</h4>
                    <p>Mengembangkan aplikasi web & mobile dengan teknologi terkini yang stabil, aman, dan efisien.</p>
                </div>
                <div class="steps__card">
                    <span><i class="ri-rocket-2-fill"></i></span>
                    <h4>Deployment</h4>
                    <p>Produk Anda kami deploy ke cloud terbaik, agar siap diakses dengan performa optimal kapan pun dan
                        di mana pun.</p>
                </div>
                <div class="steps__card">
                    <span><i class="ri-shield-check-fill"></i></span>
                    <h4>Support</h4>
                    <p>Layanan purna jual dan support jangka panjang untuk memastikan sistem Anda terus berjalan
                        optimal.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== Services Section (Optional) ===== --}}
    <section class="section__container explore__container">
        <h2 class="section__header">
            <span>Layanan Unggulan</span> Kami di Lunera Labs
        </h2>
        <p class="section__description">
            Kami menggabungkan kreativitas dan teknologi untuk memberikan solusi IT terbaik bagi klien kami.
        </p>
        <div class="explore__grid">
            <div class="explore__card">
                <span><i class="ri-global-line"></i></span>
                <h4>Web Development</h4>
                <p>Aplikasi website modern & cepat</p>
            </div>
            <div class="explore__card">
                <span><i class="ri-smartphone-line"></i></span>
                <h4>Mobile Apps</h4>
                <p>Aplikasi Android & iOS custom</p>
            </div>
            <div class="explore__card">
                <span><i class="ri-server-line"></i></span>
                <h4>Cloud Integration</h4>
                <p>Deploy cepat & aman ke cloud</p>
            </div>
            <div class="explore__card">
                <span><i class="ri-user-settings-line"></i></span>
                <h4>Sistem HR & Rekrutmen</h4>
                <p>Manajemen SDM & lamaran kerja</p>
            </div>
        </div>
    </section>

    {{-- ===== Job Section (Reusable) ===== --}}
    <section class="section__container job__container" id="job">
        <h2 class="section__header">
            <span>Karier di Lunera Labs</span> – Lowongan Terbaru
        </h2>
        <p class="section__description">
            Bergabunglah dengan tim kami dan kembangkan potensi Anda di lingkungan kerja yang inovatif.
        </p>

        <div class="job__grid">
            @forelse($lowongans as $lowongan)
                <div class="job__card">
                    <div class="job__card__header">
                        <div>
                            <h5>Lunera Labs</h5>
                            <h6>{{ $lowongan->lokasi }}</h6>
                        </div>
                    </div>
                    <h4>{{ $lowongan->judul }}</h4>
                    <p>{{ Str::limit(strip_tags($lowongan->deskripsi), 100) }}</p>
                    <div class="job__card__footer">
                        <span>{{ $lowongan->tipe }}</span>
                        <span>{{ $lowongan->level }}</span>
                        <span>Rp {{ number_format($lowongan->gaji, 0, ',', '.') }}/Bulan</span>
                    </div>
                </div>
            @empty
                <p>Tidak ada lowongan yang tersedia saat ini.</p>
            @endforelse
        </div>

    </section>

    @push('scripts')
        <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/scrollreveal.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Cegah scroll ke anchor saat refresh (kembali ke atas)
                if (!window.location.hash) {
                    const homeSection = document.getElementById("home");
                    if (homeSection) {
                        homeSection.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                }

                // Toggle menu
                const menuBtn = document.getElementById("menu-btn");
                const navLinks = document.getElementById("nav-links");
                const menuBtnIcon = menuBtn.querySelector("i");

                menuBtn.addEventListener("click", () => {
                    navLinks.classList.toggle("open");
                    const isOpen = navLinks.classList.contains("open");
                    menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
                });

                navLinks.addEventListener("click", (e) => {
                    if (e.target.tagName === 'A') {
                        navLinks.classList.remove("open");
                        menuBtnIcon.setAttribute("class", "ri-menu-line");
                    }
                });

                // ScrollReveal animations
                const scrollRevealOption = {
                    distance: "50px",
                    origin: "bottom",
                    duration: 1000
                };

                ScrollReveal().reveal(".header__container h1", scrollRevealOption);
                ScrollReveal().reveal(".header__container p", {
                    ...scrollRevealOption,
                    delay: 400
                });
                ScrollReveal().reveal(".header__btns", {
                    ...scrollRevealOption,
                    delay: 800
                });
                ScrollReveal().reveal(".steps__card", {
                    ...scrollRevealOption,
                    interval: 400
                });
                ScrollReveal().reveal(".explore__card", {
                    ...scrollRevealOption,
                    interval: 300
                });
                ScrollReveal().reveal(".job__card", {
                    ...scrollRevealOption,
                    interval: 300
                });

                const swiper = new Swiper(".swiper", {
                    loop: true
                });
            });
        </script>
    @endpush


</x-app-layout>
