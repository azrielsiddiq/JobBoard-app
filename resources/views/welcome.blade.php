<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Job Board</title>
  </head>
  <body>
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
                <a
                    href="{{ url('/dashboard') }}"
                    class="btn"
                >
                    Dashboard
                </a>
            </li>
        @else
            <li>
                <a
                    href="{{ route('login') }}"
                    class="btn bg-purple-600 text-white font-medium py-2 px-4 rounded hover:bg-purple-700 transition"
                >
                    Masuk
                </a>
            </li>

            @if (Route::has('register'))
                <li>
                    <a
                        href="{{ route('register') }}"
                        class="btn bg-purple-600 text-white font-medium py-2 px-4 rounded hover:bg-purple-700 transition"
                    >
                        Daftar
                    </a>
                </li>
            @endif
        @endauth
    @endif
  </ul>
</nav>

    <header class="section__container header__container" id="home">
      <h1>Cari, Lamar &<br />Dapatkan <span>Pekerjaan Impian Anda</span></h1>
      <p>
        Masa depan Anda dimulai di sini. Temukan peluang yang tak terhitung jumlahnya, ambil tindakan dengan melamar pekerjaan yang sesuai dengan keahlian dan aspirasi Anda, dan ubah karier Anda.
      </p>
      <div class="header__btns">
        <a href="#job" class="btn">Cari Pekerjaan</a>
      </div>
    </header>

    <section class="steps" id="about">
      <div class="section__container steps__container">
        <h2 class="section__header">
          Dapatkan Pekerjaan dalam <span>4 Langkah Mudah</span>
        </h2>
        <p class="section__description">
          Ikuti Panduan Sederhana dan Langkah-demi-Langkah untuk Mendapatkan Pekerjaan Impian Anda dengan Cepat
 dan Mulailah Perjalanan Karier Baru Anda.
        </p>
        <div class="steps__grid">
          <div class="steps__card">
            <span><i class="ri-user-fill"></i></span>
            <h4>Buat Akun</h4>
            <p>
              Daftar hanya dengan beberapa klik untuk membuka akses eksklusif ke dunia peluang kerja dan mendapatkan pekerjaan impian Anda. Cepat, mudah, dan sepenuhnya gratis.
            </p>
          </div>
          <div class="steps__card">
            <span><i class="ri-search-fill"></i></span>
            <h4>Cari Lowongan Kerja</h4>
            <p>
             Telusuri database pekerjaan kami yang disesuaikan dengan keahlian dan preferensi Anda. Dengan filter pencarian canggih kami, menemukan pekerjaan yang sempurna tidak pernah semudah ini.
            </p>
          </div>
          <div class="steps__card">
            <span><i class="ri-file-paper-fill"></i></span>
            <h4>Unggah CV/Resume</h4>
            <p>
              Tunjukkan pengalaman Anda dengan mengunggah CV atau resume Anda. Beri tahu pemberi kerja mengapa Anda adalah kandidat yang tepat untuk lowongan pekerjaan mereka.
            </p>
          </div>
          <div class="steps__card">
            <span><i class="ri-briefcase-fill"></i></span>
            <h4>Dapatkan Pekerjaan</h4>
            <p>
              Ambil langkah terakhir menuju karier baru Anda. Bersiaplah untuk memulai perjalanan profesional Anda dan dapatkan pekerjaan yang Anda impikan.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container explore__container">
      <h2 class="section__header">
        <span>Pilihan Karier </span> yang Tak Terhingga Menunggu Untuk Anda Jelajahi
      </h2>
      <p class="section__description">
        Temukan Dunia yang Penuh dengan Peluang Menarik dan Kemungkinan Tanpa Batas,
        dan Temukan Jalur Karier yang Sempurna untuk Membentuk Masa Depan Anda.
      </p>
      <div class="explore__grid">
        <div class="explore__card">
          <span><i class="ri-pencil-ruler-2-fill"></i></span>
          <h4>Design</h4>
          <p>200+ jobs openings</p>
        </div>
        <div class="explore__card">
          <span><i class="ri-bar-chart-box-fill"></i></span>
          <h4>Sales</h4>
          <p>350+ jobs openings</p>
        </div>
        <div class="explore__card">
          <span><i class="ri-megaphone-fill"></i></span>
          <h4>Marketing</h4>
          <p>500+ jobs openings</p>
        </div>
        <div class="explore__card">
          <span><i class="ri-wallet-3-fill"></i></span>
          <h4>Finance</h4>
          <p>200+ jobs openings</p>
        </div>
        <div class="explore__card">
          <span><i class="ri-car-fill"></i></span>
          <h4>Automobile</h4>
          <p>250+ jobs openings</p>
        </div>
        <div class="explore__card">
          <span><i class="ri-truck-fill"></i></span>
          <h4>Logistics / Delivery</h4>
          <p>1k+ jobs openings</p>
        </div>
        <div class="explore__card">
          <span><i class="ri-computer-fill"></i></span>
          <h4>Admin</h4>
          <p>100+ jobs openings</p>
        </div>
        <div class="explore__card">
          <span><i class="ri-building-fill"></i></span>
          <h4>Construction</h4>
          <p>500+ jobs openings</p>
        </div>
      </div>
      {{-- <div class="explore__btn">
        <button class="btn">View All Categories</button>
      </div> --}}
    </section>

    <section class="section__container job__container" id="job">
      <h2 class="section__header"><span>Lowongan Kerja</span> Terbaru & Teratas</h2>
      <p class="section__description">
       Temukan Peluang Baru yang Menarik dan Posisi dengan Permintaan Tinggi yang Tersedia Sekarang di Industri dan Perusahaan Teratas
      </p>

      <div class="job__grid">
        <div class="job__card">
          <div class="job__card__header">
            <img src="assets/figma.png" alt="job" />
            <div>
              <h5>Figma</h5>
              <h6>USA</h6>
            </div>
          </div>
          <h4>Senior Product Engineer</h4>
          <p>
            Lead the development of innovative product solutions, leveraging
            your expertise in engineering and product management to drive
            success.
          </p>
          <div class="job__card__footer">
            <span>12 Positions</span>
            <span>Full Time</span>
            <span>$1,45,000/Year</span>
          </div>
        </div>
        <div class="job__card">
          <div class="job__card__header">
            <img src="assets/google.png" alt="job" />
            <div>
              <h5>Google</h5>
              <h6>USA</h6>
            </div>
          </div>
          <h4>Project Manager</h4>
          <p>
            Manage project timelines and budgets to ensure successful delivery
            of projects on schedule, while maintaining clear communication with
            stakeholders.
          </p>
          <div class="job__card__footer">
            <span>2 Positions</span>
            <span>Full Time</span>
            <span>$95,000/Year</span>
          </div>
        </div>
        <div class="job__card">
          <div class="job__card__header">
            <img src="assets/linkedin.png" alt="job" />
            <div>
              <h5>LinkedIn</h5>
              <h6>Germany</h6>
            </div>
          </div>
          <h4>Full Stack Developer</h4>
          <p>
            Develop and maintain both front-end and back-end components of web
            applications, utilizing a wide range of programming languages and
            frameworks.
          </p>
          <div class="job__card__footer">
            <span>10 Positions</span>
            <span>Full Time</span>
            <span>$35,000/Year</span>
          </div>
        </div>
        <div class="job__card">
          <div class="job__card__header">
            <img src="assets/amazon.png" alt="job" />
            <div>
              <h5>Amazon</h5>
              <h6>USA</h6>
            </div>
          </div>
          <h4>Front-end Developer</h4>
          <p>
            Design and implement user interfaces using HTML, CSS, and
            JavaScript, collaborating closely with designers and back-end
            developers.
          </p>
          <div class="job__card__footer">
            <span>20 Positions</span>
            <span>Full Time</span>
            <span>$1,01,000/Year</span>
          </div>
        </div>
        <div class="job__card">
          <div class="job__card__header">
            <img src="assets/twitter.png" alt="job" />
            <div>
              <h5>Twitter</h5>
              <h6>USA</h6>
            </div>
          </div>
          <h4>ReactJS Developer</h4>
          <p>
            Specialize in building dynamic and interactive user interfaces using
            the ReactJS library, leveraging your expertise in JavaScript and
            front-end development.
          </p>
          <div class="job__card__footer">
            <span>6 Positions</span>
            <span>Full Time</span>
            <span>$98,000/Year</span>
          </div>
        </div>
        <div class="job__card">
          <div class="job__card__header">
            <img src="assets/microsoft.png" alt="job" />
            <div>
              <h5>Microsoft</h5>
              <h6>USA</h6>
            </div>
          </div>
          <h4>Python Developer</h4>
          <p>
            Develop scalable and efficient backend systems and applications
            using Python, utilizing your proficiency in Python programming and
            software development.
          </p>
          <div class="job__card__footer">
            <span>9 Positions</span>
            <span>Full Time</span>
            <span>$80,000/Year</span>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo">
            <a href="#" class="logo">Job<span>Hunt</span></a>
          </div>
          <p>
            Our platform is designed to help you find the perfect job and
            achieve your professional dreams.
          </p>
        </div>
        <div class="footer__col">
          <h4>Quick Links</h4>
          <ul class="footer__links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Follow Us</h4>
          <ul class="footer__links">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">LinkedIn</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Contact Us</h4>
          <ul class="footer__links">
            <li>
              <a href="#">
                <span><i class="ri-phone-fill"></i></span> +91 234 56788
              </a>
            </li>
            <li>
              <a href="#">
                <span><i class="ri-map-pin-2-fill"></i></span> 123 Main Street,
                Anytown, USA
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

:root {
  --primary-color: #6a38c2;
  --primary-color-dark: #6132b4;
  --text-dark: #262626;
  --text-light: #737373;
  --extra-light: #e5e5e5;
  --white: #ffffff;
  --max-width: 1200px;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
}

.section__header {
  max-width: 900px;
  margin-inline: auto;
  margin-bottom: 1rem;
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--text-dark);
  text-align: center;
}

.section__header span {
  color: var(--primary-color);
}

.section__description {
  max-width: 600px;
  margin-inline: auto;
  color: var(--text-light);
  line-height: 1.75rem;
  text-align: center;
}

.btn {
  padding: 1rem 2rem;
  outline: none;
  border: none;
  font-size: 1rem;
  color: var(--white) !important;
  background-color: var(--primary-color);
  border-radius: 5px;
  transition: 0.3s;
  cursor: pointer;
  
}

.btn:hover {
  background-color: var(--primary-color-dark);
  box-shadow: 2px 2px 10px rgba(106, 56, 194, 0.5);
}

.logo {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--primary-color);
}

.logo span {
  color: #fa6021;
}

img {
  display: flex;
  width: 100%;
}

a {
  text-decoration: none;
  transition: 0.3s;
}

ul {
  list-style: none;
}

html,
body {
  scroll-behavior: smooth;
}

body {
  font-family: "Poppins", sans-serif;
}

nav {
  position: fixed;
  isolation: isolate;
  width: 100%;
  max-width: var(--max-width);
  margin-inline: auto;
  z-index: 9;
}

.nav__header {
  padding: 1rem;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: var(--extra-light);
}

.nav__menu__btn {
  font-size: 1.5rem;
  color: var(--text-dark);
  cursor: pointer;
}

.nav__links {
  position: absolute;
  top: 65px;
  left: 0;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 2rem;
  padding: 2rem;
  background-color: var(--extra-light);
  transition: 0.5s;
  z-index: -1;
  transform: translateY(-100%);
}

.nav__links.open {
  transform: translateY(0);
}

.nav__links a {
  font-weight: 500;
  color: var(--text-dark);
}

.nav__links a:hover {
  color: var(--primary-color);
}

.header__container {
  position: relative;
  isolation: isolate;
  overflow: hidden;
}

.header__container h2 {
  max-width: fit-content;
  margin-inline: auto;
  margin-bottom: 1rem;
  padding: 0.5rem 1rem;
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 0.9rem;
  font-weight: 600;
  color: #fa6021;
  background-color: #fff8f5;
  border-radius: 5rem;
}

.header__container h2 img {
  max-width: 25px;
}

.header__container h1 {
  margin-bottom: 1rem;
  font-size: 4rem;
  font-weight: 700;
  color: var(--text-dark);
  text-align: center;
  line-height: 5.5rem;
}

.header__container h1 span {
  color: var(--primary-color);
}

.header__container p {
  margin-bottom: 2rem;
  max-width: 600px;
  margin-inline: auto;
  color: var(--text-light);
  line-height: 2rem;
  text-align: center;
}

.header__btns {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 2rem;
}

.header__btns a {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 1rem;
  font-weight: 500;
  color: var(--text-dark);
}

.header__btns a span {
  padding: 5px 11px;
  font-size: 1.5rem;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 100%;
  transition: 0.3s;
}

.header__btns a:hover span {
  box-shadow: 2px 2px 10px rgba(106, 56, 194, 0.5);
}

.header__container > img {
  position: absolute;
  max-width: 40px;
  padding: 7px;
  border-radius: 100%;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
  z-index: -1;
}

.header__container > img:nth-child(1) {
  top: 30%;
  left: 20%;
  transform: translate(-50%, -50%);
}

.header__container > img:nth-child(2) {
  top: 50%;
  left: 1rem;
  transform: translateY(-50%);
}

.header__container > img:nth-child(3) {
  top: 75%;
  left: 25%;
  transform: translate(-50%, -50%);
}

.header__container > img:nth-child(4) {
  top: 20%;
  right: 15%;
  transform: translate(-50%, -50%);
}

.header__container > img:nth-child(5) {
  top: 50%;
  left: 1rem;
  transform: translateY(-50%);
}

.header__container > img:nth-child(6) {
  top: 65%;
  right: 20%;
  transform: translate(-50%, -50%);
}

.steps {
  background-image: url("assets/steps-bg.png");
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}

.steps__grid {
  margin-top: 4rem;
  display: grid;
  gap: 1rem;
}

.steps__card {
  padding: 1rem;
  background-color: var(--white);
  border-radius: 5px;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
}

.steps__card span {
  display: inline-block;
  margin-bottom: 1rem;
  padding: 5px 11px;
  font-size: 1.5rem;
  border-radius: 100%;
}

.steps__card:nth-child(1) span {
  color: #fa4e09;
  background-color: #fff9f6;
}

.steps__card:nth-child(2) span {
  color: #6a38c2;
  background-color: #e9ddff;
}

.steps__card:nth-child(3) span {
  color: #3ac2ba;
  background-color: #f0fffe;
}

.steps__card:nth-child(4) span {
  color: #fbbc09;
  background-color: #fff8e3;
}

.steps__card h4 {
  margin-bottom: 0.5rem;
  font-size: 1.2rem;
  font-weight: 700;
  color: var(--text-dark);
}

.steps__card p {
  color: var(--text-light);
}

.explore__grid {
  margin-block: 4rem;
  display: grid;
  gap: 1rem;
}

.explore__card {
  padding: 1rem;
  border-radius: 5px;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
  transition: 0.3s;
}

.explore__card:hover {
  background-color: var(--primary-color);
}

.explore__card span {
  display: inline-block;
  margin-bottom: 1rem;
  padding: 5px 11px;
  font-size: 1.5rem;
  border-radius: 5px;
  transition: 0.3s;
}

.explore__card:nth-child(1) span {
  color: #f04a0c;
  background-color: #f6efef;
}

.explore__card:nth-child(2) span {
  color: #6a38c2;
  background-color: #e9ddff;
}

.explore__card:nth-child(3) span {
  color: #ff0101;
  background-color: #fff2f2;
}

.explore__card:nth-child(4) span {
  color: #fbbc09;
  background-color: #fff8e3;
}

.explore__card:nth-child(5) span {
  color: #4680e7;
  background-color: #e7edf8;
}

.explore__card:nth-child(6) span {
  color: #34a753;
  background-color: #f1fef5;
}

.explore__card:nth-child(7) span {
  color: #443ee0;
  background-color: #f6f5ff;
}

.explore__card:nth-child(8) span {
  color: #3ac2ba;
  background-color: #f0fffe;
}

.explore__card:hover span {
  color: var(--white);
  background-color: #794cc7;
}

.explore__card h4 {
  margin-bottom: 0.5rem;
  font-size: 1.2rem;
  font-weight: 700;
  color: var(--text-dark);
  transition: 0.3s;
}

.explore__card p {
  color: var(--text-light);
  transition: 0.3s;
}

.explore__card:hover h4 {
  color: var(--white);
}

.explore__card:hover p {
  color: var(--extra-light);
}

.explore__btn {
  text-align: center;
}

.job__grid {
  margin-top: 4rem;
  display: grid;
  gap: 1rem;
}

.job__card {
  padding: 1rem;
  border-radius: 5px;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
  transition: 0.3s;
}

.job__card:hover {
  background-color: var(--primary-color);
}

.job__card__header {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.job__card img {
  max-width: 50px;
  padding: 10px;
  border-radius: 100%;
  background-color: var(--white);
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
}

.job__card h5 {
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--text-dark);
  transition: 0.3s;
}

.job__card h6 {
  font-size: 0.9rem;
  font-weight: 500;
  color: var(--text-light);
  transition: 0.3s;
}

.job__card h4 {
  margin-block: 1rem 0.5rem;
  font-size: 1.2rem;
  font-weight: 700;
  color: var(--text-dark);
  transition: 0.3s;
}

.job__card p {
  margin-bottom: 1rem;
  color: var(--text-light);
  transition: 0.3s;
}

.job__card__footer {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 5px;
}

.job__card__footer span {
  display: inline-block;
  padding: 4px 10px;
  font-size: 0.8rem;
  font-weight: 500;
  border-radius: 5px;
  transition: 0.3s;
}

.job__card__footer span:nth-child(1) {
  color: #4680e7;
  background-color: #e7edf8;
}

.job__card__footer span:nth-child(2) {
  color: #f04a0c;
  background-color: #f6efef;
}

.job__card__footer span:nth-child(3) {
  color: #3ac2ba;
  background-color: #f0fffe;
}

.job__card:hover :is(h5, h4) {
  color: var(--white);
}

.job__card:hover :is(h6, p) {
  color: var(--extra-light);
}

.job__card:hover .job__card__footer span {
  color: var(--white);
  background-color: var(--primary-color-dark);
}

.offer__grid {
  margin-top: 4rem;
  display: grid;
  gap: 2rem 1rem;
}

.offer__card img {
  margin-bottom: 1rem;
  border-radius: 5px;
}

.offer__details {
  display: flex;
  align-items: flex-start;
}

.offer__details span {
  font-size: 2rem;
  font-weight: 800;
  -webkit-text-fill-color: transparent;
  -webkit-text-stroke: 1px var(--text-dark);
  padding-right: 1rem;
}

.offer__details div {
  padding-left: 1rem;
  border-left: 2px solid var(--primary-color);
}

.offer__details h4 {
  font-size: 1.2rem;
  font-weight: 700;
  color: var(--text-dark);
}

.offer__details p {
  color: var(--text-light);
}

.swiper {
  padding-top: 4rem;
  width: 100%;
  max-width: 600px;
}

.client__card img {
  max-width: 80px;
  margin-inline: auto;
  margin-bottom: 2rem;
  border-radius: 100%;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
}

.client__card p {
  margin-bottom: 1rem;
  line-height: 1.75rem;
  color: var(--text-dark);
  text-align: center;
}

.client__ratings {
  margin-bottom: 1rem;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 5px;
}

.client__ratings span {
  color: goldenrod;
}

.client__card h4 {
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
  text-align: center;
}

.client__card h5 {
  font-size: 1rem;
  font-weight: 500;
  color: var(--text-light);
  text-align: center;
}

.footer__container {
  display: grid;
  gap: 4rem 2rem;
}

.footer__logo {
  margin-bottom: 2rem;
}

.footer__col p {
  max-width: 400px;
  color: var(--text-light);
}

.footer__col h4 {
  margin-bottom: 2rem;
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
}

.footer__links {
  display: grid;
  gap: 1rem;
}

.footer__links a {
  color: var(--text-light);
}

.footer__links a:hover {
  color: var(--primary-color);
}

.footer__links a span {
  font-size: 1.25rem;
}

.footer__bar {
  padding: 1rem;
  font-size: 0.9rem;
  color: var(--text-light);
  text-align: center;
}

@media (width > 540px) {
  .steps__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .explore__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .job__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .offer__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .footer__container {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (width > 768px) {
  nav {
    position: static;
    padding: 2rem 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
  }

  .nav__header {
    padding: 0;
    background-color: transparent;
  }

  .nav__menu__btn {
    display: none;
  }

  .nav__links {
    position: static;
    padding: 0;
    flex-direction: row;
    justify-content: flex-end;
    background-color: transparent;
    transform: none;
  }

  .steps__grid {
    margin-top: 6rem;
    grid-template-columns: repeat(4, 1fr);
  }

  .steps__card:nth-child(2n - 1) {
    transform: translateY(-2rem);
  }

  .explore__grid {
    grid-template-columns: repeat(4, 1fr);
  }

  .job__grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .offer__grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .footer__container {
    grid-template-columns: repeat(5, 1fr);
  }

  .footer__col:nth-child(1) {
    grid-column: 1/3;
  }
}

@media (width > 1024px) {
  .steps__card {
    padding: 1.5rem;
  }

  .explore__card {
    padding: 1.5rem;
  }

  .offer__grid {
    gap: 2rem;
  }
}
</style>

<script>
    const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

ScrollReveal().reveal(".header__container h2", {
  ...scrollRevealOption,
});
ScrollReveal().reveal(".header__container h1", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".header__container p", {
  ...scrollRevealOption,
  delay: 1000,
});
ScrollReveal().reveal(".header__btns", {
  ...scrollRevealOption,
  delay: 1500,
});

ScrollReveal().reveal(".steps__card", {
  ...scrollRevealOption,
  interval: 500,
});

ScrollReveal().reveal(".explore__card", {
  duration: 1000,
  interval: 500,
});

ScrollReveal().reveal(".job__card", {
  ...scrollRevealOption,
  interval: 500,
});

ScrollReveal().reveal(".offer__card", {
  ...scrollRevealOption,
  interval: 500,
});

const swiper = new Swiper(".swiper", {
  loop: true,
});
</script>