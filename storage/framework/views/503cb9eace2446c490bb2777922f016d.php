<?php $__env->startSection('content'); ?>
    <h1 class="mb-4 text-primary">Welcome to Your Dashboard Blog MSIB</h1>
    <p class="text-secondary">Ini adalah halaman dashboard Anda.</p>

    <!-- Cards Section -->
    <div class="row">
        <!-- Total Categories Card -->
        <div class="col-md-4">
            <div class="card bg-primary text-white mb-4 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="bi bi-tags fs-2"></i>
                    </div>
                    <div>
                        <h5 class="card-title">Total Categories</h5>
                        <p class="card-text fs-4"><?php echo e($totalCategories); ?></p>
                        <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-light btn-sm">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Total Categories Card -->

        <!-- Total Posts Card -->
        <div class="col-md-4">
            <div class="card bg-success text-white mb-4 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="bi bi-file-text fs-2"></i>
                    </div>
                    <div>
                        <h5 class="card-title">Total Posts</h5>
                        <p class="card-text fs-4"><?php echo e($totalPosts); ?></p>
                        <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-light btn-sm">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Total Posts Card -->

        <!-- Total Authors Card -->
        <div class="col-md-4">
            <div class="card bg-info text-white mb-4 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="bi bi-people fs-2"></i>
                    </div>
                    <div>
                        <h5 class="card-title">Total Authors</h5>
                        <p class="card-text fs-4"><?php echo e($totalAuthors); ?></p>
                        <a href="<?php echo e(route('authors.index')); ?>" class="btn btn-light btn-sm">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Total Authors Card -->
    </div>
    <!-- /Cards Section -->

    <!-- Tables Section -->
    <div class="row">
        <!-- Recent Posts Table -->
        <div class="col-lg-6 mb-4">
            <div class="card bg-white border-light shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                    <h5 class="mb-0">Recent Posts</h5>
                    <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-light btn-sm">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-primary text-white">
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $recentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e(Str::limit($post->title, 30)); ?></td>
                                        <td>
                                            <span class="badge bg-secondary">
                                                <?php echo e($post->category->name); ?>

                                            </span>
                                        </td>
                                        <td><?php echo e($post->author->name); ?></td>
                                        <td><?php echo e($post->created_at->format('d M Y')); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">No posts available.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Recent Posts Table -->

        <!-- Recent Categories Table -->
        <div class="col-lg-3 mb-4">
            <div class="card bg-white border-light shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center bg-success text-white">
                    <h5 class="mb-0">Recent Categories</h5>
                    <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-light btn-sm">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-success text-white">
                                <tr>
                                    <th>Name</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $recentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e(Str::limit($category->name, 20)); ?></td>
                                        
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="2" class="text-center text-muted">No categories available.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Recent Categories Table -->

        <!-- Recent Authors Table -->
        <div class="col-lg-3 mb-4">
            <div class="card bg-white border-light shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center bg-info text-white">
                    <h5 class="mb-0">Recent Authors</h5>
                    <a href="<?php echo e(route('authors.index')); ?>" class="btn btn-light btn-sm">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-info text-white">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $recentAuthors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e(Str::limit($author->name, 20)); ?></td>
                                        <td><?php echo e($author->email); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="2" class="text-center text-muted">No authors available.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog_MSIB\resources\views/dashboard/index.blade.php ENDPATH**/ ?>