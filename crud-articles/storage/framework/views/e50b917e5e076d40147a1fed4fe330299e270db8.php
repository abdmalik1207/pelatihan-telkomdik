<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="py-4">Tabel Data Article</h2>
                    <div>
                        <a href="<?php echo e(route('articles.create')); ?>" class="btn btn-info text-white">Tambah Data</a>
                    </div>
                </div>

                <?php if(session()->has('pesan')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('pesan')); ?>

                    </div>
                <?php endif; ?>
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="w-25">
                                <img src="<?php echo e(asset('storage/'.$article->image)); ?>" class="img-fluid" alt="" style="height: 300px; object-fit: cover;">
                            </td>
                            <td style="word-break: break-all;  width: 100px;"><?php echo e($article->title); ?></td>
                            <td style="word-break: break-all;  width: 400px;"><?php echo e($article->desc); ?></td>
                            <td style="word-break: break-all;  width: 100px;"><?php echo e($article->category); ?></td>
                            <td>
                                <a href="<?php echo e(route('articles.show', $article->id)); ?>" class="btn btn-success">Show</a>
                                <a href="<?php echo e(route('articles.edit', $article->id)); ?>" class="btn btn-primary">Edit</a>
                                <form action="<?php echo e(route('articles.destroy', $article->id)); ?>" class="d-inline" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td>Belum ada data article</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <?php echo e($articles->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik1207/Balai/crud-articles/resources/views/article/index.blade.php ENDPATH**/ ?>