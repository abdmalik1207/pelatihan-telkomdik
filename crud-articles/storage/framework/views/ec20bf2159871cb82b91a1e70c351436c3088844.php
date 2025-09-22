<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top img-fluid" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." style="height: 300px; object-fit: cover;"/></a>
                <div class="card-body">
                    <div class="small text-muted">January 1, 2022</div>
                    <h2 class="card-title mt-2">Judul Artikel</h2>
                    <p class="card-text" style="display: block; width: 100%; overflow: hidden; white-space: nowrap;text-overflow: ellipsis;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                    <a class="btn btn-primary" href="#">Baca Selengkapnya →</a>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row ">
                <div class="col-lg-12 d-flex flex-wrap">
                    <div class="col-lg-6 px-2">
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top img-fluid" src="https://dummyimage.com/350x175/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2022</div>
                                <h2 class="card-title mt-1">Judul Artikel</h2>
                                <p class="card-text" style="display: block; width: 100%; overflow: hidden; white-space: nowrap;text-overflow: ellipsis;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 px-2">
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/350x175/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2022</div>
                                <h2 class="card-title mt-1">Judul Artikel</h2>
                                <p class="card-text" style="display: block; width: 100%; overflow: hidden; white-space: nowrap;text-overflow: ellipsis;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Artikel Terbaru</div>
                    <div class="card-body">
                        <div class="row">
                            <a href="#!" class="text-decoration-none d-flex">
                            <div class="col-sm-6 mx-2">
                                <img src="https://dummyimage.com/190x106/dee2e6/6c757d.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm-6 mx-2">
                            <p class="text-dark" style="display: block; width: 130px; overflow: hidden; white-space: nowrap;text-overflow: ellipsis;">Lorem ipsum dolor sit amet.</p>
                            <p>Selengkapnya →</p>
                            </div>
                        </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik1207/Balai/crud-articles/resources/views/welcome.blade.php ENDPATH**/ ?>