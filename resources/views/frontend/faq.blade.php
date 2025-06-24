@extends('frontend.layouts.main')

@section('title', $page->title ?? 'FAQ - CV Sumber Alam Raya') {{-- Mengisi judul untuk halaman FAQ --}}

@section('styles') {{-- Untuk CSS spesifik halaman FAQ --}}
    <link rel="stylesheet" href="{{ asset('style/faq.css') }}" />
@endsection

@section('content') {{-- Mulai dari sini adalah konten unik halaman FAQ --}}

    <main>
        <section class="faq-section">
            {{-- Menggunakan judul utama FAQ dari database --}}
            <h2>{{ $page->faq_main_title ?? 'Frequently Asked Questions' }}</h2>

            {{-- Array untuk menyimpan FAQ dari database --}}
            @php
                $databaseFaqs = [];
                for ($i = 1; $i <= 5; $i++) {
                    if (!empty($page->{'faq_' . $i . '_question'}) && !empty($page->{'faq_' . $i . '_answer'})) {
                        $databaseFaqs[] = [
                            'question' => $page->{'faq_' . $i . '_question'},
                            'answer' => $page->{'faq_' . $i . '_answer'},
                        ];
                    }
                }
            @endphp

            @if (count($databaseFaqs) > 0)
                {{-- Loop melalui FAQ yang diambil dari database --}}
                @foreach ($databaseFaqs as $item)
                    <div class="faq-item">
                        <div class="faq-question">{{ $item['question'] }}</div>
                        <div class="faq-answer">{{ $item['answer'] }}</div>
                    </div>
                @endforeach
            @else
                {{-- Konten FAQ default jika database kosong atau kolom tidak ada --}}
                <p class="text-center text-muted">Belum ada FAQ yang terdaftar di database. Menampilkan FAQ default.</p>
                <div class="faq-item">
                    <div class="faq-question">Produk apa saja yang diproduksi oleh CV Sumber Alam Raya?</div>
                    <div class="faq-answer">Kami memproduksi beragam produk berbahan dasar besi seperti tangki oli hidrolik, ornamen pagar, aksesoris knalpot, pipa hollow, dan komponen kendaraan lainnya.</div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">Apakah bisa pesan produk custom sesuai kebutuhan?</div>
                    <div class="faq-answer">Ya, kami menerima pemesanan produk sesuai desain atau spesifikasi dari pelanggan.</div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">Bagaimana cara melakukan pemesanan?</div>
                    <div class="faq-answer">Anda dapat menghubungi kami melalui WhatsApp pada website ini. Tim kami akan membantu Anda dalam proses pemesanan.</div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">Berapa lama waktu produksi dan pengiriman?</div>
                    <div class="faq-answer">Waktu produksi dan pengiriman bervariasi tergantung kompleksitas dan lokasi. Umumnya 3–7 hari kerja.</div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">Apakah bisa melakukan kerja sama jangka panjang?</div>
                    <div class="faq-answer">Tentu saja! Kami terbuka untuk kerja sama jangka panjang dengan perusahaan, instansi, atau mitra distribusi.</div>
                </div>
            @endif
        </section>
    

@endsection

@section('scripts') {{-- Untuk JavaScript spesifik halaman FAQ --}}
    <script>
        // JavaScript untuk toggle FAQ tetap berfungsi dengan elemen dinamis
        document.addEventListener('DOMContentLoaded', () => {
            const questions = document.querySelectorAll('.faq-question');
            questions.forEach(q => {
                q.addEventListener('click', () => {
                    const answer = q.nextElementSibling;
                    answer.classList.toggle('show');
                    q.classList.toggle('active');
                });
            });
        });
    </script>
@endsection