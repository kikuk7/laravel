

<?php $__env->startSection('title', 'Manajemen Halaman - Admin Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="py-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Manajemen Halaman Website</h1>
            <a href="<?php echo e(route('admin.pages.create')); ?>" class="btn btn-primary"><i class="fas fa-plus me-2"></i> Tambah Halaman Baru</a>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success mt-3">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger mt-3">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                Daftar Halaman
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul Halaman</th>
                                <th>URL (Slug)</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($page->title); ?></td>
                                    <td>/<?php echo e($page->slug); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.pages.edit', $page->id)); ?>" class="btn btn-info btn-sm">Edit</a>
                                        <form action="<?php echo e(route('admin.pages.destroy', $page->id)); ?>" method="POST" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus halaman ini? Kontennya akan hilang dari website!')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4" class="text-center text-muted">
                                        <p class="mt-3">Belum ada halaman yang terdaftar di database.</p>
                                        <p>Anda bisa menambahkannya dengan tombol "Tambah Halaman Baru".</p>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\JOKI\cobadb\cvadmin\resources\views/admin/pages/index.blade.php ENDPATH**/ ?>