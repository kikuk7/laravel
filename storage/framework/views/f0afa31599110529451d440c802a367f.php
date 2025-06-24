

<?php $__env->startSection('title', $page->title ?? 'Beranda - CV Sumber Alam Raya'); ?>

<?php $__env->startSection('content'); ?>

    <section class="hero">
        <div class="container">
            <div class="hero-image-wrapper">
                
                <video autoplay muted loop>
                    <source src="<?php echo e(asset('assets/beranda.mp4')); ?>" type="video/mp4" />
                    Browser Anda tidak mendukung video.
                </video>
                

                <div class="hero-text">
                    <h1><?php echo e($page->hero_title ?? 'CV Sumber Alam Raya'); ?></h1>
                    <a href="<?php echo e(url('/produk')); ?>" class="btn-primary">lihat produk kami</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content container layanan-kami-section">
        <div class="about-section">
            <div class="card">
                <h2>Tentang Kami</h2>
                
                <?php if($page && $page->homepage_about_section_text): ?>
                    <?php echo $page->homepage_about_section_text; ?>

                <?php else: ?>
                    <p>CV Sumber Alam Raya adalah perusahaan manufaktur berbahan dasar besi yang melayani berbagai kebutuhan industri, mulai dari otomotif, konstruksi, hingga pengadaan barang umum.</p>
                <?php endif; ?>
                <a href="<?php echo e(url('/tentang')); ?>" class="btn-outline">selengkapnya</a>
            </div>

            <div class="card" style="margin-top: 50px;">
                <h2>Layanan Kami</h2>
                
                <?php if($page && $page->homepage_services_section_text): ?>
                    <?php echo $page->homepage_services_section_text; ?>

                <?php else: ?>
                    <p>CV Sumber Alam Raya adalah perusahaan manufaktur yang berbasis di Tegal, Jawa Tengah.</p>
                <?php endif; ?>
                <a href="<?php echo e(url('/layanan')); ?>" class="btn-outline">selengkapnya</a>
            </div>
        </div>

        <div class="bottom-section">
            <div class="image-content">
                
                <img src="<?php echo e(asset('assets/layanan2.jpg')); ?>" alt="layanan2" class="img-small" />
                <img src="<?php echo e(asset('assets/layanan1.jpg')); ?>" alt="layanan1" class="img-large" />
                <img src="<?php echo e(asset('assets/layanan3.jpg')); ?>" alt="layanan3" class="img-small" />
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\JOKI\cobadb\cvadmin\resources\views/frontend/index.blade.php ENDPATH**/ ?>