<?php $__env->startSection('title', 'Manage Posts - Blog MSIB'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="mb-4 text-primary">
            <i class="bi bi-file-earmark-post" style="font-size: 1.5rem;"></i> Manage Posts
        </h1>
        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success mb-3">
            <i class="bi bi-plus-circle"></i> Create New Post
        </a>

        <?php if($posts->isEmpty()): ?>
            <div class="alert alert-info" role="alert">
                No posts available.
            </div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle shadow-sm">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(Str::limit($post->title, 30)); ?></td>
                                <td class="text-center">
                                    <span class="badge bg-secondary"><?php echo e($post->category->name); ?></span>
                                </td>
                                <td><?php echo e(optional($post->author)->name ?? 'Unknown Author'); ?></td>
                                <td class="text-center">
                                    <?php if($post->is_published): ?>
                                        <span class="badge bg-success">Published</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Draft</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-info btn-sm me-1">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-warning btn-sm me-1">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" class="d-inline"
                                          onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <?php echo e($posts->links()); ?>

            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog_MSIB\resources\views/posts/index.blade.php ENDPATH**/ ?>