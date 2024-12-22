<?php $__env->startSection('title', 'Home - Blog MSIB'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="mb-4 text-center text-primary">Welcome to Blog MSIB</h1>

    <style>
        .card {
            height: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: #f8f9fa;
        }

        .card-title a {
            color: #007bff;
            font-weight: bold;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .card-title a:hover {
            color: #0056b3;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 24px;
            font-size: 1rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Membuat semua kartu memiliki tinggi yang sama */
        .card-wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 50px; /* Jarak antara card dan footer */
        }

        /* Responsif */
        @media (max-width: 992px) {
            .card-wrapper {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .card-wrapper {
                grid-template-columns: 1fr;
            }

            .card-img-top {
                height: 200px;
            }
        }
    </style>

    <div class="container">
        <div class="card-wrapper">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <?php if($post->image): ?>
                        <img src="<?php echo e(asset('storage/' . $post->image)); ?>" class="card-img-top" alt="<?php echo e($post->title); ?>">
                    <?php else: ?>
                        <img src="<?php echo e(asset('images/default.jpg')); ?>" class="card-img-top" alt="default image">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo e(route('posts.show', $post->id)); ?>"><?php echo e($post->title); ?></a>
                        </h5>
                        <p class="card-text">
                            <?php echo Str::limit($post->content, 100, '...'); ?>

                        </p>
                        <a href="<?php echo e(route('frontend.details', $post->id)); ?>" class="btn btn-primary mt-3">Read More &rarr;</a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog_MSIB\resources\views/frontend/home.blade.php ENDPATH**/ ?>