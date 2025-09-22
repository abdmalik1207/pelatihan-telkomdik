<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="thumbnail">
                <?php if($articles_1): ?>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item text-muted"><?php echo e($articles_1->category); ?></li>
                        </ol>
                    </nav>
                    <h1 class=""><?php echo e($articles_1->title); ?></h1>
                    <div class="d-flex mt-4">
                        <p class="text-muted me-2"><?php echo e($articles_1->created_at->format('d M Y')); ?></p>
                        <p class="text-muted me-2">Oleh&nbsp;<?php echo e($articles_1->user->name); ?></p>
                    </div>
                    <img src="<?php echo e(asset('storage/'.$articles_1->image)); ?>" class="img-fluid w-100" alt="" style="height: 450px; object-fit: cover;">
                    <div class="mt-4">
                        <p><?php echo e($articles_1->desc); ?></p>
                        <hr>
                    </div>
                <?php else: ?>
                    Nothing
                <?php endif; ?>
                
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card h-50" style="border-radius: 0%">
                <div class="card-header">
                    <h4 class="text-center">Artikel Terbaru</h4>
                </div>
                <div class="card-body overflow-scroll ">
                    <div class="row">
                        <?php $__currentLoopData = $articles_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-12 my-3 border-top">
                            <a href="<?php echo e(route('home.show', $article->id)); ?>" class="text-decoration-none text-dark">
                                <div class="caption">
                                    <h5><?php echo e($article->title); ?></h5>
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <img src="<?php echo e(asset('storage/'.$article->image)); ?>"  class="img-fluid w-100" alt="" style="height: 50px; object-fit: cover;">
                                        </div>
                                        <div class="col-sm-9">
                                            <p style="display: block; width: 100%; overflow: hidden; white-space: nowrap;text-overflow: ellipsis; font-size: 12px;"><?php echo e($article->desc); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik1207/Balai/crud-articles/resources/views/home/index.blade.php ENDPATH**/ ?>