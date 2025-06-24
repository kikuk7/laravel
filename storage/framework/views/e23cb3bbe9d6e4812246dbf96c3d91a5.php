

<?php $__env->startSection('title', $page->title ?? 'Tentang Kami - CV Sumber Alam Raya'); ?>

<?php $__env->startSection('content'); ?>

    <section class="hero">
        <div class="container">
            <div class="hero-image-wrapper">
                <img src="<?php echo e(asset('assets/tentang.JPG')); ?>" alt="Tentang Kami Hero" /> 
            </div>
        </div>
    </section>

    <section class="container">
        <div class="content card">
            <h2 class="section-title"><?php echo e($page->title ?? 'Tentang Kami'); ?></h2>
            <?php if($page && $page->body): ?>
                <?php echo $page->body; ?> 
            <?php else: ?>
                <p>CV Sumber Alam Raya adalah perusahaan manufaktur yang berbasis di Tegal, Jawa Tengah. Kami bergerak di bidang pengolahan besi untuk memenuhi kebutuhan industri, seperti tangki oli hidrolik, ornamen pagar, aksesori knalpot, serta berbagai komponen kendaraan lainnya.</p>
                <p>Didirikan pada tahun 2018, kami telah membangun reputasi sebagai penyedia produk berkualitas dengan layanan profesional dan pengiriman tepat waktu. Dengan pengalaman hampir 7 tahun, kami terus berinovasi dan mengembangkan bisnis untuk menjangkau pasar nasional hingga internasional melalui pendekatan digital yang adaptif dan efisien.</p>
            <?php endif; ?>
        </div>
    </section>

    <section class="visi-misi">
        <div class="container visi-misi-box">
            <div>
                <h3><?php echo e($page->vision_title ?? 'Visi'); ?></h3>
                <p><?php echo e($page->vision_body ?? 'Membangun perusahaan yang profesional, berintegritas tinggi, inovatif dan berkelanjutan.'); ?></p>
            </div>
            <div>
                <h3><?php echo e($page->mission_title ?? 'Misi'); ?></h3>
                <p><?php echo e($page->mission_body ?? 'Menyediakan produk dan layanan unggulan, menjaga hubungan baik dengan pelanggan, serta berkontribusi positif terhadap industri dan masyarakat.'); ?></p>
            </div>
        </div>
    </section>

    <section class="galeri">
        <section class="container">
            <h2 class="section-title"><?php echo e($page->excellence_title ?? 'Keunggulan Kami'); ?></h2>
        </section>
        <div class="tentang-grid">
            <img src="<?php echo e(asset('assets/tentang2.png')); ?>" alt="Keunggulan 1" /> 
            <img src="<?php echo e(asset('assets/tentang1.png')); ?>" alt="Keunggulan 2" /> 
            <img src="<?php echo e(asset('assets/tentang3.png')); ?>" alt="Keunggulan 3" /> 
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\JOKI\cobadb\cvadmin\resources\views/frontend/tentang.blade.php ENDPATH**/ ?>