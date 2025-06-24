

<?php $__env->startSection('title', $page->title ?? 'Galeri - CV Sumber Alam Raya'); ?>

<?php $__env->startSection('content'); ?>

    <section class="galeri">
        <h2><?php echo e($page->title ?? 'Galeri Kami'); ?></h2>
        <?php if($page && $page->gallery_intro_body): ?>
            <p><?php echo $page->gallery_intro_body; ?></p> 
        <?php else: ?>
            <p>Dokumentasi visual dari setiap proses dan hasil karya kami mencerminkan komitmen terhadap kualitas dan ketelitian. Melalui galeri ini, Anda dapat melihat bagaimana kami bekerja dengan penuh dedikasi dan tim yang berpengalaman untuk menghasilkan solusi terbaik bagi kebutuhan industri Anda.</p>
        <?php endif; ?>
        <div class="parent">
            
            <div class="div7"><img src="<?php echo e(asset('assets/Foto Galeri/DSCF5415 (1).JPG')); ?>" alt="Galeri 1"></div>
            <div class="div8"><img src="<?php echo e(asset('assets/Foto Galeri/5.jpg')); ?>" alt="Galeri 2"></div>
            <div class="div9"><img src="<?php echo e(asset('assets/Foto Galeri/DSCF5362 (2).JPG')); ?>" alt="Galeri 3"></div>
            <div class="div10"><img src="<?php echo e(asset('assets/DSCF5374.JPG')); ?>" alt="Galeri 4"></div>
            <div class="div11"><img src="<?php echo e(asset('assets/Foto Galeri/DSCF5418 (1).JPG')); ?>" alt="Galeri 5"></div>
            <div class="div12"><img src="<?php echo e(asset('assets/DSCF5359 (1).JPG')); ?>" alt="Galeri 6"></div>
            <div class="div13"><img src="<?php echo e(asset('assets/DSCF5365 (2) (1).jpg')); ?>" alt="Galeri 7"></div>
            <div class="div14"><img src="<?php echo e(asset('assets/DSCF5361 (1).JPG')); ?>" alt="Galeri 8"></div>
            <div class="div15"><img src="<?php echo e(asset('assets/Foto Galeri/DSCF5421 (1).JPG')); ?>" alt="Galeri 9"></div>
            <div class="div16"><img src="<?php echo e(asset('assets/DSCF5360 (1).JPG')); ?>" alt="Galeri 10"></div>
            <div class="div17"><img src="<?php echo e(asset('assets/DSCF5385.JPG')); ?>" alt="Galeri 11"></div>
            <div class="div18"><img src="<?php echo e(asset('assets/tentang.JPG')); ?>" alt="Galeri 12"></div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\JOKI\cobadb\cvadmin\resources\views/frontend/galeri.blade.php ENDPATH**/ ?>