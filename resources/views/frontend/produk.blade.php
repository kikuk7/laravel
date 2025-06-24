@extends('frontend.layouts.main') {{-- Menggunakan layout utama --}}

@section('title', 'Produk - CV Sumber Alam Raya') {{-- Mengisi judul untuk halaman produk --}}

@section('styles') {{-- Untuk CSS spesifik halaman produk --}}
    <link rel="stylesheet" href="{{ asset('style/produk.css') }}" />
@endsection

@section('content') {{-- Mulai dari sini adalah konten unik halaman produk --}}

    {{-- Catatan:
    Semua tag seperti <html>, <head>, <body>, <header>, <footer>,
    serta script JavaScript umum (statistik pengunjung dan mobile nav)
    sudah DIPINDAHKAN ke main.blade.php.
    Jadi, mereka TIDAK PERLU ada lagi di sini.
    --}}

    <main> {{-- <main> di sini akan menjadi konten dari @yield('content') di main.blade.php --}}
        <section class="product-section container">
            <div class="product-content">
                <h2 id="product-title">Tangki Oli Hidrolik</h2>

                <div class="product-model">
                    <button class="arrow-btn left" onclick="prevProduct()">‹</button>

                    <model-viewer
                        id="model"
                        src="{{ asset('assets/Product/KomponenKnalpot3Lobang.glb') }}"
                        alt="Model Produk"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 550px; background-color: #eee; border-radius: 12px;">
                    </model-viewer>

                    <button class="arrow-btn right" onclick="nextProduct()">›</button>
                </div>

                <div class="product-info">
                    <p id="product-main-description">
                    </p>

                    <div class="product-spec-list">
                        <h4>Spesifikasi:</h4>
                        <ul id="product-specs-ul">
                        </ul>
                    </div>

                    <div class="product-actions-and-thumbs">
                        <div class="product-thumbnails">
                            {{-- Anda bisa mengisi thumbnail secara dinamis di JS atau dari data produk jika ada --}}
                        </div>
                        {{-- Pastikan URL WA menggunakan helper asset juga --}}
                        <a href="https://wa.me/+6287801319313" class="btn-primary">
                            <img src="{{ asset('assets/icon/WA.png') }}" alt="WhatsApp Icon" class="btn-icon-img"> hubungi kami
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection {{-- Akhir dari konten unik halaman produk --}}

@section('scripts') {{-- Untuk JavaScript spesifik halaman produk --}}
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

    <script>
        // Data produk Anda
        const products = [
            {
                title: "Adaptor Knalpot Motor",
                model: "{{ asset('assets/Product/KomponenKnalpot3Lobang.glb') }}",
                description: "Aksesoris pendukung knalpot motor, berfungsi sebagai sambungan atau penghubung antara bagian knalpot dengan komponen lainnya.",
                specs: [
                    "Bahan: Plat baja",
                    "Tebal Bahan: 3,5 mm",
                    "Diameter: 8 cm",
                    "Harga Satuan: Rp3.500,-"
                ],
            },
            {
                title: "Plendes Mii",
                model: "{{ asset('assets/Product/KomponenKnalpot2Lobang.glb') }}",
                description: "Komponen perlengkapan knalpot motor, berfungsi sebagai sambungan atau dudukan knalpot agar terpasang dengan presisi.",
                specs: [
                    "Bahan: Plat besi",
                    "Tebal Bahan: 3,2 mm",
                    "Ukuran: 8 cm x 4 cm",
                    "Harga Satuan: Rp1.750,-"
                ],
            },
            {
                title: "Matahari",
                model: "{{ asset('assets/Product/kb.glb') }}",
                description: "Ornamen logam berbentuk matahari dengan desain gelombang elegan, cocok digunakan sebagai hiasan pada pagar, pintu gerbang, atau dekorasi eksterior lainnya.",
                specs: [
                    "Bahan: Plat galvanis ",
                    "Tebal Bahan: 0,6 mm",
                    "Diameter: 6,5 cm",
                    "Harga Satuan: Rp 1.000 / pcs "
                ],
            },
            {
                title: "Ring Bintang 8",
                model: "{{ asset('assets/Product/bintang.glb') }}",
                description: "Ornamen untuk pagar, teralis, atau dekorasi lainnya.",
                specs: [
                    "Bahan: Plat besi galvanis",
                    "Tebal Bahan: 0,6 mm",
                    "Diameter: 10 cm",
                    "Harga Satuan: Rp1.800,-"
                ],
            },
            {
                title: "Tombak Keraton",
                model: "{{ asset('assets/Product/UjungPagar.glb') }}",
                description: "Ornamen dekoratif berbentuk tombak untuk ujung pagar, memberikan tampilan yang elegan dan klasik. Cocok untuk memperindah desain pagar besi.",
                specs: [
                    "Bahan: Plat besi",
                    "Tebal Bahan: 0,6 mm",
                    "Ukuran: 12 cm x 6 cm",
                    "Harga Satuan: Rp1.100,-"
                ],
            },
            {
                title: "End Muffler Knalpot Variasi",
                model: "{{ asset('assets/Product/KomponenKnalpotkykmangkok.glb') }}",
                description: "Tingkatkan tampilan dan performa kendaraan Anda dengan End Muffler Knalpot Variasi berkualitas tinggi.",
                specs: [
                    "Bahan: Plat Galvanis",
                    "Tebal Bahan: 1 mm",
                    "Diameter Luar: ±6 cm",
                    "Diameter Lubang Dalam: ±3,5 cm",
                    "Panjang (Depth): ±6 cm",
                    "Warna: Abu-abu metalik",
                    "Harga: Rp10.000 / pcs"
                ],
            },
            {
                title: "Nako Letter S",
                model: "{{ asset('assets/Product/KomponenPagarS.glb') }}",
                description: "Teralis Nako S adalah ornamen besi berbentuk spiral elegan yang digunakan untuk memperindah pagar, jendela, maupun pintu teralis.",
                specs: [
                    "Bahan: Besi Nako",
                    "Ketebalan: 9,3 mm",
                    "Ukuran Tersedia: 15 x 11 cm, 20 x 11 cm, 25 x 11 cm",
                    "Harga: Rp17.000 / kg"
                ],
            },
            {
                title: "Nako Letter C",
                model: "{{ asset('assets/Product/kuda.glb') }}",
                description: "Nako Letter C adalah ornamen besi berbentuk lengkungan menyerupai huruf C yang digunakan sebagai elemen dekoratif dan struktural pada pagar, jendela, maupun pintu teralis.",
                specs: [
                    "Bahan: Besi Nako",
                    "Ketebalan: 9,3 mm",
                    "Ukuran Tersedia: 12 x 8 cm, 10 x 6,5 cm, 20 x 11 cm",
                    "Harga: Rp17.000 / kg"
                ],
            },
            {
                title: "Tangki Oli Dump Truck",
                model: "{{ asset('assets/Product/TangkiKotak.glb') }}",
                description: "Tangki Oli Dump Truck ini dirancang khusus sebagai wadah oli hidrolik untuk kendaraan dump truck. ",
                specs: [
                    "Bahan: Plat Besi",
                    "Tebal Plat: 2 mm",
                    "Kapasitas: 20 liter",
                    "Tutup: Aluminium",
                    "Pipa Keluar/Masuk: Pipa kecil: diameter 19 mm, Pipa besar: diameter 32 mm",
                    "Ukuran Tangki: Panjang: 28 cm, Lebar: 30 cm, Tinggi: 25 cm",
                    "Harga Satuan: Rp375.000"
                ],
            },
            {
                title: "Tangki Oli Bulat Dump Truck",
                model: "{{ asset('assets/Product/TangkiBulat.glb') }}",
                description: "Tangki Oli Bulat Dump Truck ini dirancang untuk menampung oli hidrolik pada kendaraan dump truck dalam skala kecil hingga menengah. ",
                specs: [
                    "Bahan: Plat baja",
                    "Tebal bahan: 2 mm",
                    "Kapasitas: 5 – 6 liter",
                    "Bentuk: Silinder (bulat)",
                    "Perkiraan Ukuran Tangki:",
                    "(Estimasi berdasarkan bentuk dan kapasitas umum)",
                    "• Diameter: ± 15 – 20 cm",
                    "• Tinggi: ± 15 – 25 cm",
                    "Harga Satuan: Rp. 275.000"
                ],
            }
        ];

        let index = 0;

        function updateProduct() {
            const product = products[index];
            document.getElementById("product-title").textContent = product.title;

            // Update main description
            document.getElementById("product-main-description").textContent = product.description;

            // Update specifications list
            const specsList = document.getElementById("product-specs-ul");
            specsList.innerHTML = ''; // Clear previous specs
            if (product.specs && product.specs.length > 0) {
                const specListContainer = document.querySelector('.product-spec-list');
                if (specListContainer) {
                    specListContainer.style.display = ''; // Pastikan terlihat jika ada specs
                }
                product.specs.forEach(spec => {
                    const listItem = document.createElement('li');
                    listItem.textContent = spec;
                    specsList.appendChild(listItem);
                });
            } else {
                // Jika tidak ada spesifikasi, mungkin sembunyikan sectionnya atau tampilkan pesan
                const specListContainer = document.querySelector('.product-spec-list');
                if (specListContainer) {
                    specListContainer.style.display = 'none'; // Sembunyikan jika tidak ada specs
                }
            }

            document.getElementById("model").setAttribute("src", product.model);
            document.getElementById("model").setAttribute("alt", product.title);
        }

        function nextProduct() {
            index = (index + 1) % products.length;
            updateProduct();
        }

        function prevProduct() {
            index = (index - 1 + products.length) % products.length;
            updateProduct();
        }

        document.addEventListener('DOMContentLoaded', updateProduct);
    </script>
@endsection