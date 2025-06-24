

<?php $__env->startSection('title', $page->title ?? 'Layanan - CV Sumber Alam Raya'); ?>

<?php $__env->startSection('content'); ?>

    <section class="hero">
        <div class="container">
            <div class="hero-image-wrapper">
                <img src="<?php echo e(asset('assets/layanan2.jpg')); ?>" alt="Layanan Hero" /> 
            </div>
        </div>
    </section>

    <section class="container">
        <div class="content card">
            <h2 class="section-title"><?php echo e($page->title ?? 'Layanan Kami'); ?></h2>
            <?php if($page && $page->main_intro_body): ?>
                <?php echo $page->main_intro_body; ?> 
            <?php else: ?>
                <p>Dalam menjalankan usahanya di bidang manufaktur berbasis besi, CV Sumber Alam Raya berkomitmen untuk memberikan layanan yang profesional, tepat guna, dan sesuai dengan kebutuhan industri. Perusahaan ini menghadirkan berbagai solusi dalam pengolahan besi yang dapat disesuaikan dengan permintaan pelanggan, baik untuk keperluan konstruksi, otomotif, maupun pengadaan industri. Adapun layanan utama yang ditawarkan meliputi:</p>
            <?php endif; ?>
        </div>

        <div class="service-grid">
            <?php for($i = 1; $i <= 3; $i++): ?>
                <?php
                    $serviceTitle = $page->{'service_' . $i . '_title'} ?? 'Judul Layanan ' . $i . ' (Default)';
                    $serviceBody = $page->{'service_' . $i . '_body'} ?? 'Deskripsi default untuk layanan ini.';
                    $imagePath = '';
                    if ($i == 1) $imagePath = 'assets/layanan1.jpg';
                    if ($i == 2) $imagePath = 'assets/Foto Galeri/3.jpg';
                    if ($i == 3) $imagePath = 'assets/Foto Galeri/6.JPG';
                ?>
                <div class="service-card">
                    <img src="<?php echo e(asset($imagePath)); ?>" alt="Layanan <?php echo e($i); ?>" /> 
                    <h3><?php echo e($serviceTitle); ?></h3>
                    <p><?php echo $serviceBody; ?></p>
                </div>
            <?php endfor; ?>
        </div>
    </section>

    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\JOKI\cobadb\cvadmin\resources\views/frontend/layanan.blade.php ENDPATH**/ ?>