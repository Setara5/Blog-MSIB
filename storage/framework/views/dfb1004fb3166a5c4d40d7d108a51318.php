<?php $__env->startSection('title', 'Categories'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="mb-4 text-primary"><i class="bi bi-tags"></i> Categories</h1>
        <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-primary mb-3">
            <i class="bi bi-plus-circle"></i> Create Category
        </a>

        <div class="list-group">
            <?php if($categories->count() > 0): ?>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="<?php echo e(route('categories.show', $category->id)); ?>" class="me-3 fw-bold"><?php echo e($category->name); ?></a>
                        <div>
                            <a href="<?php echo e(route('categories.show', $category->id)); ?>" class="btn btn-sm btn-info me-1" title="Show">
                                <i class="bi bi-eye"></i> Show
                            </a>
                            <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-sm btn-warning me-1" title="Edit">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST" style="display: inline" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="list-group-item text-center">
                    No data available.
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog_MSIB\resources\views/categories/index.blade.php ENDPATH**/ ?>