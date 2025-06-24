 

<?php $__env->startSection('title', 'Admin Dashboard - CV Sumber Alam Raya'); ?>

<?php $__env->startSection('content'); ?>
    <div class="py-3"> 
        <h1 class="mb-4">Dashboard Utama</h1>
        <p class="lead">Selamat Datang kembali, <?php echo e(Auth::user()->name); ?>! Anda bisa mulai mengelola website Anda dari sini.</p>

        
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-file-alt fa-3x me-3"></i>
                            <div>
                                <h5 class="card-title">Total Halaman</h5>
                                <p class="card-text fs-4 fw-bold">7</p> 
                            </div>
                        </div>
                        <a href="<?php echo e(route('admin.pages.index')); ?>" class="text-white text-decoration-none stretched-link">Lihat Halaman</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-users fa-3x me-3"></i>
                            <div>
                                <h5 class="card-title">Total Pengguna</h5>
                                <p class="card-text fs-4 fw-bold">125</p> 
                            </div>
                        </div>
                        <a href="<?php echo e(route('admin.users.index')); ?>" class="text-white text-decoration-none stretched-link">Lihat Pengguna</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-calendar-alt fa-3x me-3"></i>
                            <div>
                                <h5 class="card-title">Aktivitas Terakhir</h5>
                                <p class="card-text fs-6">Halaman Kontak Diperbarui</p>
                            </div>
                        </div>
                        <a href="<?php echo e(route('admin.activity-log.index') ?? '#'); ?>" class="text-white text-decoration-none stretched-link">Lihat Log</a>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="card mt-4 shadow-sm border-0">
            <div class="card-header bg-light">
                <h5 class="mb-0">Aktivitas Terbaru</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Pengguna <strong>John Doe</strong> memperbarui halaman "Kontak" (2 menit yang lalu)</li>
                    <li class="list-group-item">Admin <strong><?php echo e(Auth::user()->name); ?></strong> login ke dashboard (baru saja)</li>
                    
                </ul>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\JOKI\cobadb\cvadmin\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>