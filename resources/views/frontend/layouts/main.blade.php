<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'CV Sumber Alam Raya')</title> {{-- Judul halaman akan diisi dari halaman anak --}}
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">

    {{-- Yield untuk CSS tambahan di halaman tertentu --}}
    @yield('styles')

    {{-- Gambar hero yang display none, kalau ini untuk semua halaman --}}
    <img src="{{ asset('assets/hero.png') }}" alt="" style="display: none;" />
</head>
<body>
    <header>
        <div class="navbar container">
            <div class="logo-container">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="logo" />
            </div>

            <nav class="desktop-nav">
                <ul class="nav-links">
                    <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">beranda</a></li>
                    <li><a href="{{ url('/tentang') }}" class="{{ request()->is('tentang') ? 'active' : '' }}">tentang</a></li>
                    <li><a href="{{ url('/layanan') }}" class="{{ request()->is('layanan') ? 'active' : '' }}">layanan</a></li>
                    <li><a href="{{ url('/produk') }}" class="{{ request()->is('produk') ? 'active' : '' }}">produk</a></li>
                    <li><a href="{{ url('/galeri') }}" class="{{ request()->is('galeri') ? 'active' : '' }}">galeri</a></li>
                </ul>
            </nav>

            <a href="{{ url('/kontak') }}" class="btn-secondary {{ request()->is('kontak') ? 'active' : '' }}">kontak</a>
        </div>
    </header>

    {{-- Mobile Navigation (Di luar header agar bisa diatur posisinya) --}}
    <div class="logomobile">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="logo" />
    </div>

    <div class="menu">
        <div class="hamburger-menu" id="hamburgerMenu">☰</div>
        <a href="{{ url('/kontak') }}" class="btn-secondary {{ request()->is('kontak') ? 'active' : '' }}">kontak</a>
    </div>

    <nav class="mobile-nav" id="mobileNavSidebar">
        <div class="close-button" id="closeMobileNav">×</div>
        <ul>
            <li><a href="{{ url('/') }}">beranda</a></li>
            <li><a href="{{ url('/tentang') }}">tentang</a></li>
            <li><a href="{{ url('/layanan') }}">layanan</a></li>
            <li><a href="{{ url('/produk') }}">produk</a></li>
            <li><a href="{{ url('/galeri') }}">galeri</a></li>
            <li><a href="{{ url('/kontak') }}">kontak</a></li>
        </ul>
    </nav>

    {{-- BAGIAN UTAMA KONTEN Halaman --}}
    <main>
        @yield('content') {{-- Di sinilah konten unik dari setiap halaman akan dimasukkan --}}
    </main>

    {{-- Bagian Kontak (jika ini memang harus muncul di semua halaman) --}}
    <section class="contact-section">
        <div class="container contact-grid">
            <div class="kontak-info">
                <h3>Kontak</h3>
                <p class="contact-item"><img src="{{ asset('assets/icon/email 1.png') }}" alt="Email Icon" class="contact-icon"> sumberalam423@gmail.com</p>
                <p class="contact-item"><img src="{{ asset('assets/icon/telepon.png') }}" alt="Phone Icon" class="contact-icon"> +6287801319313</p>
                <p class="contact-item"><img src="{{ asset('assets/icon/WA.png') }}" alt="WA Icon" class="contact-icon"> +6287801319313</p>
            </div>

            <div class="lokasi-info">
                <h3>Lokasi</h3>
                <p>Jl. Projosumarto II, Bengledukuh, Bengle, Kec. Talang, Kabupaten Tegal, Jawa Tengah 52193</p>
                <a href="https://wa.me/+6287801319313" class="btn-primary">
                    <img src="{{ asset('assets/icon/WA.png') }}" alt="WhatsApp Icon" class="btn-icon-img"> hubungi kami
                </a>
            </div>

            <div class="pengunjung-info">
                <h3>Pengunjung</h3>
                <p class="visitor-item"><img src="{{ asset('assets/icon/person.png') }}" alt="Online User Icon" class="visitor-icon"> Pengguna Online: <span id="online-user">Memuat...</span></p>
                <p class="visitor-item"><img src="{{ asset('assets/icon/person.png') }}" alt="Visitor Today Icon" class="visitor-icon"> Pengunjung Hari Ini: <span id="today-visitor">Memuat...</span></p>
                <p class="visitor-item"><img src="{{ asset('assets/icon/person.png') }}" alt="Total Visitor Icon" class="visitor-icon"> Total Pengunjung: <span id="total-visitor">Memuat...</span></p>
            </div>
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63281.57198165715!2d109.02007107341548!3d-6.895978278010659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b1aa9b8c8a1%3A0x3027a76e35212aa6!2sTegal%2C%20Central%20Java%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1685389336040!5m2!1sen!2sid"
                width="100%" height="250" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <footer>
        <div class="footer-container container">
            <p>© sumber alam raya 2025</p>
            <a href="{{ url('/faq') }}" class="faq-link">FAQ <span style="font-weight: bold;">?</span></a>
        </div>
    </footer>

    {{-- Statistik Pengunjung --}}
    <script>
        const API_KEY = "$2a$10$0YJ5m64rPDKqjTMOPfThP.3asrzy64YvDlFyM/rZAghcghIG7VoBe";
        const BIN_ID = "684dde4b8960c979a5a9f79f";
        const API_URL = `https://api.jsonbin.io/v3/b/${BIN_ID}`;
        const todayKey = 'visited-' + new Date().toISOString().slice(0, 10);
        let visitorId = sessionStorage.getItem('visitor-id');
        if (!visitorId) {
            visitorId = crypto.randomUUID();
            sessionStorage.setItem('visitor-id', visitorId);
        }

        async function updateStats() {
            try {
                const res = await fetch(API_URL, {
                    headers: { 'X-Master-Key': API_KEY }
                });
                const json = await res.json();
                const stats = json.record || {
                    total_visits: 0,
                    today_visits: 0,
                    visitors: []
                };

                const now = new Date();
                const nowISO = now.toISOString();
                const fiveMinutesAgo = new Date(now.getTime() - 1 * 30 * 1000).toISOString();

                // Hitung kunjungan hari ini
                if (!localStorage.getItem(todayKey)) {
                    stats.total_visits += 1;
                    stats.today_visits += 1;
                    localStorage.setItem(todayKey, 'true');
                }

                // Filter hanya yang aktif 5 menit terakhir
                stats.visitors = (stats.visitors || []).filter(v => v.timestamp > fiveMinutesAgo);

                // Tambahkan atau update visitor saat ini
                const existing = stats.visitors.find(v => v.id === visitorId);
                if (existing) {
                    existing.timestamp = nowISO;
                } else {
                    stats.visitors.push({ id: visitorId, timestamp: nowISO });
                }

                // Tampilkan
                document.getElementById('total-visitor').innerText = stats.total_visits;
                document.getElementById('today-visitor').innerText = stats.today_visits;
                document.getElementById('online-user').innerText = stats.visitors.length;

                // Simpan kembali ke jsonbin.io
                await fetch(API_URL, {
                    method: 'PUT',
                    headers: {
                        'X-Master-Key': API_KEY,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(stats)
                });

            } catch (error) {
                console.error('Gagal update statistik:', error);
                document.getElementById('total-visitor').innerText = 'Gagal';
                document.getElementById('today-visitor').innerText = 'Gagal';
                document.getElementById('online-user').innerText = 'Gagal';
            }
        }

        // Jalankan dan perbarui setiap 30 detik
        updateStats();
        setInterval(updateStats, 30000);
    </script>

    {{-- Sidebar Mobile Navigation Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hamburgerMenu = document.getElementById('hamburgerMenu');
            const mobileNavSidebar = document.getElementById('mobileNavSidebar');
            const closeButton = document.getElementById('closeMobileNav');

            if (hamburgerMenu && mobileNavSidebar && closeButton) {
                hamburgerMenu.addEventListener('click', function () {
                    mobileNavSidebar.classList.add('open');
                });

                closeButton.addEventListener('click', function () {
                    mobileNavSidebar.classList.remove('open');
                });

                mobileNavSidebar.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', function () {
                        mobileNavSidebar.classList.remove('open');
                    });
                });
            } else {
                console.error("Elemen menu navigasi tidak ditemukan. Pastikan ID HTML sudah benar.");
            }
        });
    </script>

    {{-- Yield untuk JavaScript tambahan di halaman tertentu --}}
    @yield('scripts')
</body>
</html>