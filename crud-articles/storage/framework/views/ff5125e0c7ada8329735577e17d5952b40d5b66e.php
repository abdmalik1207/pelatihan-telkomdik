<?php $__env->startSection('content'); ?>
<div class="container mt-2">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="py-4">Detail Article</h2>
        <div>
            <a href="<?php echo e(route('articles.index')); ?>" class="btn btn-info text-white">Kembali</a>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card w-50">
            <img src="<?php echo e(asset('storage/'.$article->image)); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo e($article->title); ?></h5>
              <p class="card-text">
                <?php echo e($article->desc); ?>

              </p>
              <div class="d-flex justify-content-between">
                <div class="">
                    <span class="badge bg-primary"><?php echo e($article->category); ?></span>
                </div>
                <p><?php echo e($article->created_at->format('d-m-Y')); ?></p>
              </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik1207/Balai/crud-articles/resources/views/article/show.blade.php ENDPATH**/ ?>