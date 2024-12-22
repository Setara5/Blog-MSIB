 

<?php $__env->startSection('title', 'Profile Detail'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1 class="mb-4 text-center text-primary"><i class="bi bi-person-circle"></i> Profile Detail</h1>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <strong><?php echo e($user->name); ?></strong>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> <span class="text-muted"><?php echo e($user->email); ?></span></p>
            <p><strong>Nama:</strong> <span class="text-muted"><?php echo e($user->name); ?></span></p>
            <p><strong>Terdaftar Sejak:</strong> <span class="text-muted"><?php echo e($user->created_at->format('d M Y')); ?></span></p>
        </div>
    </div>

   
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog_MSIB\resources\views/profile/show.blade.php ENDPATH**/ ?>