<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-8 border p-4">
            <h1><?php echo e($item->title); ?></h1>
            <p><?php echo e($item->category); ?></p>
            <div class="thumbnail">
                <img src="<?php echo e(asset('storage/'.$item->image)); ?>" class="card-img-top" alt="...">
                <div class="mt-4">
                    <p><?php echo e($item->desc); ?></p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-sm-4 border p-4">
            <div class="row">
                <div class="col-sm-12">
                    <?php $__currentLoopData = $articles_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('home.show', $item->id)); ?> ">
                            <h4><?php echo e($item->title); ?></h4>
                            <div class="row">
                                <div class="col-xl-3">
                                    <img src="<?php echo e(asset('storage/'.$item->image)); ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="col-sm-9">
                                    <p><?php echo e($item->desc); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik1207/Balai/crud-articles/resources/views/page/show.blade.php ENDPATH**/ ?>