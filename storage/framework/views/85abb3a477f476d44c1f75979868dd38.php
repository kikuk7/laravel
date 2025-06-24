

<?php $__env->startSection('title', $page->title ?? 'FAQ - CV Sumber Alam Raya'); ?> 

<?php $__env->startSection('styles'); ?> 
    <link rel="stylesheet" href="<?php echo e(asset('style/faq.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> 

    <main>
        <section class="faq-section">
            
            <h2><?php echo e($page->faq_main_title ?? 'Frequently Asked Questions'); ?></h2>

            
            <?php
                $databaseFaqs = [];
                for ($i = 1; $i <= 5; $i++) {
                    if (!empty($page->{'faq_' . $i . '_question'}) && !empty($page->{'faq_' . $i . '_answer'})) {
                        $databaseFaqs[] = [
                            'question' => $page->{'faq_' . $i . '_question'},
                            'answer' => $page->{'faq_' . $i . '_answer'},
                        ];
                    }
                }
            ?>

            <?php if(count($databaseFaqs) > 0): ?>
                
                <?php $__currentLoopData = $databaseFaqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="faq-item">
                        <div class="faq-question"><?php echo e($item['question']); ?></div>
                        <div class="faq-answer"><?php echo e($item['answer']); ?></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                
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
            <?php endif; ?>
        </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?> 
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\JOKI\cobadb\cvadmin\resources\views/frontend/faq.blade.php ENDPATH**/ ?>