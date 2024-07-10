<?php $__env->startSection('main'); ?>
    <?php echo $__env->make('siswa.books.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="wrapper image-wrapper bg-image bg-overlay text-white"
        data-image-src="<?php echo e(($book->gambar === null || $book->gambar === ' ' ? 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' : str_contains($book->gambar, 'https')) ? $book->gambar : asset('uploads/' . $book->gambar)); ?>"
        alt="<?php echo e($book->judul); ?>">
        <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <div class="post-header">
                        <div class="post-category text-line text-white">
                            <a href="#" class="text-reset" rel="category"><?php echo e($book->kategoriRel->kategori); ?></a>
                        </div>
                        <!-- /.post-category -->
                        <h1 class="display-1 mb-3 text-white"><?php echo e($book->judul); ?></h1>
                        <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18">Gendre . <?php echo e($book->gendre); ?></p>
                    </div>
                    <!-- /.post-header -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light wrapper-border">
        <div class="container pt-14 pt-md-16 pb-13 pb-md-15">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <article>
                        <div class="row gx-0">
                            <h2 class="display-6 mb-4">Deskripsi</h2>
                            <div class="col-md-9 text-justify">
                                <p><?php echo e($book->kategoriRel->deskripsi); ?></p>
                            </div>
                        </div>
                        <h2 class="display-6 mb-4">Sinopsis</h2>
                        <div class="row gx-0">
                            <div class="col-md-9 text-justify">
                                <p><?php echo e($book->sinopsis); ?></p>
                            </div>
                            <!--/column -->
                            <div class="col-md-2 ms-auto">
                                <ul class="list-unstyled">
                                    <li>
                                        <h5 class="mb-1">Terbitan</h5>
                                        <p><?php echo e(\Carbon\Carbon::parse($book->tahun_terbit)->format('d F Y')); ?></p>
                                    </li>
                                    <li>
                                        <h5 class="mb-1">Penulis</h5>
                                        <p><?php echo e($book->penulis); ?></p>
                                    </li>
                                    <?php if(isset($user_pinjam)): ?>
                                        <li>
                                            <h5 class="mb-1">Peminjam</h5>
                                            <p class="text-success font-weight-bold"><?php echo e($user_pinjam->username); ?></p>

                                        </li>
                                    <?php endif; ?>

                                    <li>
                                        <h5 class="mb-1">Kategori</h5>
                                        <p>
                                            <span class=""><?php echo e($book->kategoriRel->kategori); ?></span>
                                        </p>

                                    </li>
                                </ul>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </article>
                    <!-- /.project -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="container-fluid px-md-6">
            <div class="swiper-container blog grid-view mb-17 mb-md-19" data-margin="30" data-nav="true" data-dots="true"
                data-items-xxl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="rounded"><img
                                    src="<?php echo e($book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); ?>"
                                    alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img
                                    src="<?php echo e($book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); ?>"
                                    alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img
                                    src="<?php echo e($book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); ?>"
                                    alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img
                                    src="<?php echo e($book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); ?>"
                                    alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img
                                    src="<?php echo e($book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); ?>"
                                    alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img
                                    src="<?php echo e($book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); ?>"
                                    alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img
                                    src="<?php echo e($book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); ?>"
                                    alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('siswa.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sistem-rekomendasi-buku-perpustakaan-versi2\resources\views/siswa/books/detail_book.blade.php ENDPATH**/ ?>