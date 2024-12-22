<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mt-4 mb-4 text-primary"><i class="bi bi-person-lines-fill"></i> Authors</h1>

    <a href="<?php echo e(route('authors.create')); ?>" class="btn btn-success mb-3">Create New Author</a>
    
    <?php if($authors->isEmpty()): ?>
        <div class="alert alert-warning" role="alert">
            No authors found.
        </div>
    <?php else: ?>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($author->name); ?></td>
                        <td><?php echo e($author->email); ?></td>
                        <td>
                            <a href="<?php echo e(route('authors.show', $author->id)); ?>" class="btn btn-info btn-sm">Show</a>
                            <a href="<?php echo e(route('authors.edit', $author->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route('authors.destroy', $author->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog_MSIB\resources\views/authors/index.blade.php ENDPATH**/ ?>