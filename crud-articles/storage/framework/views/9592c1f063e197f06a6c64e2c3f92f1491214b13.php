<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <a href="#!">
                    <img src="<?php echo e(asset('storage/'.$articles_1->image)); ?>" class="img-fluid w-100" alt="" style="height: 300px; object-fit: cover;">
                </a>
                <div class="card-body">
                    <div class="small text-muted"><?php echo e($articles_1->created_at->format('Y M d')); ?></div>
                    <h2 class="card-title mt-2"><?php echo e($articles_1->title); ?></h2>
                    <p class="card-text" style="display: block; width: 100%; overflow: hidden; white-space: nowrap;text-overflow: ellipsis;"><?php echo e($articles_1->desc); ?></p>
                    <a class="btn btn-primary" href="#">Baca Selengkapnya →</a>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row ">
                <div class="col-lg-12 d-flex flex-wrap">
                    <?php $__currentLoopData = $articles_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6 px-2">
                            <div class="card mb-4">
                                <a href="#!">                    <img src="<?php echo e(asset('storage/'.$item->image)); ?>" class="img-fluid w-100" alt="" style="height: 175px; object-fit: cover;">
                                </a>
                                <div class="card-body">
                                    <div class="small text-muted"><?php echo e($item->created_at->format('Y M d')); ?></div>
                                    <h4 class="card-title mt-1"><?php echo e($item->title); ?></h4>
                                    <p class="card-text" style="display: block; width: 100%; overflow: hidden; white-space: nowrap;text-overflow: ellipsis;"><?php echo e($item->desc); ?></p>
                                    <a class="btn btn-primary" href="#!">Baca Selengkapnya →</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Categories widget-->
            <h1 class="mb-4">Artikel Terbaru</h1>
            <div class="card mb-4 overflow-scroll h-50">
                <?php $__currentLoopData = $articles_3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card-body">
                        <div class="row">
                            <a href="#!" class="text-decoration-none d-flex">
                            <div class="col-sm-6 px-2">
                                <img src="<?php echo e(asset('storage/'.$item->image)); ?>" class="img-fluid w-100" alt="" style="height: 105px; object-fit: cover;">
                            </div>
                            <div class="col-sm-6 px-2">
                            <p class="text-dark" style="display: block; width: 130px; overflow: hidden; white-space: nowrap;text-overflow: ellipsis;"><?php echo e($item->title); ?></p>
                            <p>Selengkapnya →</p>
                            </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik1207/Balai/crud-articles/resources/views/home.blade.php ENDPATH**/ ?>