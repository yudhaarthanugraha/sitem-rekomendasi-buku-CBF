<?php $__env->startSection('main'); ?>
    <?php echo $__env->make('siswa.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
        function truncateSentence($sentence, $wordCount)
        {
            $words = explode(' ', $sentence);

            if (count($words) <= $wordCount) {
                return $sentence;
            }
            $truncated = array_slice($words, 0, $wordCount);
            return implode(' ', $truncated) . '...';
        }
    ?>
    <?php
        function findCategory($id, $kategoris)
        {
            foreach ($kategoris as $kat) {
                if ($kat->id_kategori == $id) {
                    return $kat->kategori;
                }
            }
            return $id; // Mengembalikan ID jika kategori tidak ditemukan
        }
    ?>

    <section class="wrapper image-wrapper bg-cover bg-image bg-xs-none bg-gray" data-image-src="./assets/img/hero-smk1.png">
        <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
            <div class="row">
                <div class="col-sm-6 col-xxl-5 text-center text-sm-start" data-cues="slideInDown" data-group="page-title"
                    data-interval="-200" data-delay="500">
                    <h2 class="display-1 fs-56 mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0">Temukan Buku Favorit Kamu
                        <span class="underline-3 style-3 yellow">Disini</span>
                    </h2>

                    <p class="lead fs-23 lh-sm mb-7 pe-lg-5 pe-xl-5 pe-xxl-0">Jelajahi koleksi buku kami dan temukan
                        rekomendasi buku yang sesuai dengan minat Anda.</p>
                    <form action="<?php echo e(route('search')); ?>" method="GET" class="d-flex w-100 gap-2 align-items-center"
                        onsubmit="return validateForm()">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('GET'); ?>
                        <div class="form-floating w-100 position-relative">
                            <input required name="query" type="text" id="autocomplete"
                                class="form-control border-primary rounded-pill" placeholder="Text Input"
                                autocomplete="off">
                            <label for="autocomplete">Eksplorasi buku anda di sini..</label>
                            <div id="error-message" class="position-absolute -bottom-0 alert alert-warning mt-2"
                                style="display: none; text-align: left;">Input yang dimasukan tidak boleh kosong atau hanya
                                spasi.</div>
                        </div>
                        <!-- /.form-floating -->
                        <button type="submit" class="btn btn-primary btn-circle">
                            <i class="uil uil-search-alt"></i>
                        </button>
                    </form>

                </div>
                <!--/column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <?php if(isset($results)): ?>
        <section id="#" class="wrapper bg-light  py-5 py-md-6">
            <div class="container justify-center">


                <?php
                    $filteredResults = array_filter($results, function ($book) {
                        return $book['similarity'] !== 0.0;
                    });
                    function formatNumber($number)
                    {
                        return sprintf('%.3f', $number);
                    }
                ?>

                <?php if(count($filteredResults) > 0): ?>
                    <!-- Section for results with similarity != 0.0 -->
                    <div class="position-relative">
                        <h2 class=" text-uppercase text-primary text-center">Hasil Pencarian ...</h2>
                        <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1"
                            style="top: 0; left: -1.7rem;">
                        </div>
                        <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true"
                            data-items-xl="3" data-items-md="2" data-items-xs="1">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <?php $__currentLoopData = $filteredResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide">
                                            <div class="item-inner">
                                                <article>
                                                    <div class="card">
                                                        <figure class="card-img-top overlay overlay-1 hover-scale">
                                                            <a
                                                                href="<?php echo e(route('detail', ['id' => $book['book']->id_buku])); ?>">
                                                                <img src="<?php echo e(($book['book']->gambar === null || $book['book']->gambar === ' ' ? 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' : str_contains($book['book']->gambar, 'https')) ? $book['book']->gambar : asset('uploads/' . $book['book']->gambar)); ?>"
                                                                    alt="<?php echo e($book['book']->judul); ?>" />
                                                            </a>
                                                            <figcaption>
                                                                <h5 class="from-top mb-0">Lihat detail</h5>
                                                            </figcaption>
                                                        </figure>
                                                        <div class="card-body">
                                                            <div class="post-header">
                                                                <div class="post-category text-line">
                                                                    <a href="#" class="hover text-blue"
                                                                        rel="category"><?php echo e(findCategory($book['book']->kategori, $categorys)); ?></a>

                                                                </div>
                                                                <h2 class="post-title h3 mt-1 mb-3">
                                                                    <a class="link-dark"
                                                                        href="<?php echo e(route('detail', ['id' => $book['book']->id_buku])); ?>"><?php echo e($book['book']->judul); ?></a>
                                                                </h2>
                                                            </div>
                                                            <div class="d-flex column"></div>
                                                            <div class="post-content">
                                                                <p class="sinopsis"><?php echo e($book['book']->sinopsis); ?>.</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <ul class="post-meta d-flex mb-0">
                                                                <li>Nilai Cosine similarity</li>
                                                                <li class="text-blue">
                                                                    <?php echo e(formatNumber($book['similarity'])); ?></li>
                                                            </ul>
                                                        </div>
                                                        <div class="card-footer">
                                                            <ul class="post-meta d-flex mb-0">
                                                                <li>Tahun terbit</li>
                                                                <li class="post-date ms-auto text-dark">
                                                                    <i class="uil uil-calendar-alt"></i>
                                                                    <span><?php echo e(\Carbon\Carbon::parse($book['book']->tahun_terbit)->format('d F Y')); ?></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>


                                <!--/.swiper-slide -->
                                <!--/.swiper-wrapper -->
                            </div>
                            <!-- /.swiper -->
                        </div>
                        <!-- /.swiper-container -->
                    </div>
                <?php else: ?>
                    <div class="w-100  md:my-20">
                        <h2 class="alert alert-warning text-center" role="alert"> Tidak Ditemukan Buku
                            Yang Sesuai
                            Pencarian.</h2>
                    </div>
                <?php endif; ?>
                <!-- Section for results with similarity == 0.0 -->
                <?php
                    $rekomenBook = array_filter($results, function ($book) {
                        return $book['similarity'] === 0.0;
                    });
                ?>

                <?php if(count($rekomenBook) > 0): ?>
                    <!-- Section for results with similarity != 0.0 -->
                    <div class="position-relative">
                        <h2 class=" text-uppercase text-primary text-center">Rekomendasi buku lainnya
                            ...</h2>
                        <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1"
                            style="top: 0; left: -1.7rem;">
                        </div>
                        <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true"
                            data-items-xl="3" data-items-md="2" data-items-xs="1">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <?php $__currentLoopData = $rekomenBook; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide">
                                            <div class="item-inner">
                                                <article>
                                                    <div class="card">
                                                        <figure class="card-img-top overlay overlay-1 hover-scale">
                                                            <a
                                                                href="<?php echo e(route('detail', ['id' => $book['book']->id_buku])); ?>">
                                                                <img src="<?php echo e(($book['book']->gambar === null || $book['book']->gambar === ' ' ? 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' : str_contains($book['book']->gambar, 'https')) ? $book['book']->gambar : asset('uploads/' . $book['book']->gambar)); ?>"
                                                                    alt="<?php echo e($book['book']->judul); ?>" />
                                                            </a>
                                                            <figcaption>
                                                                <h5 class="from-top mb-0">Lihat detail
                                                                </h5>
                                                            </figcaption>
                                                        </figure>

                                                        <div class="card-body">
                                                            <div class="post-header">
                                                                <div class="post-category text-line">
                                                                    <a href="#" class="hover text-blue"
                                                                        rel="category"><?php echo e(findCategory($book['book']->kategori, $categorys)); ?></a>
                                                                </div>
                                                                <h2 class="post-title h3 mt-1 mb-3">
                                                                    <a class="link-dark"
                                                                        href="<?php echo e(route('detail', ['id' => $book['book']->id_buku])); ?>"><?php echo e($book['book']->judul); ?></a>
                                                                </h2>
                                                            </div>
                                                            <div class="d-flex column"></div>
                                                            <div class="post-content">
                                                                <p class="sinopsis">
                                                                    <?php echo e($book['book']->sinopsis); ?>.</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <ul class="post-meta d-flex mb-0">
                                                                <span>Terbitan</span>
                                                                <li class="post-date ms-auto text-dark">
                                                                    <i class="uil uil-calendar-alt"></i>
                                                                    <span><?php echo e(\Carbon\Carbon::parse($book['book']->tahun_terbit)->format('d F Y')); ?></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>


                                <!--/.swiper-slide -->
                                <!--/.swiper-wrapper -->
                            </div>
                            <!-- /.swiper -->
                        </div>
                        <!-- /.swiper-container -->
                    </div>
                <?php else: ?>
                    
                <?php endif; ?>
            </div>
            <!-- /.container -->
        </section>
    <?php endif; ?>
    <section id="books" class="wrapper bg-light py-5 py-md-6">
        <div class="container justify-center">
            <div class="row">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                    <h2 class="fs-15 text-uppercase text-primary text-center">Koleksi kami</h2>
                    <h3 class="display-4 mb-6 text-center">Cek koleksi terbaru kami yang baru saja ditambahkan ke
                        perpustakaan.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="position-relative">
                <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;">
                </div>
                <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true"
                    data-items-xl="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="item-inner">
                                        <article>
                                            <div class="card">
                                                <figure class="card-img-top overlay overlay-1 hover-scale"><a
                                                        href="<?php echo e(route('detail', ['id' => $book->id_buku])); ?>">
                                                        <img src="<?php echo e(($book->gambar === null || $book->gambar === ' ' ? 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' : str_contains($book->gambar, 'https')) ? $book->gambar : asset('uploads/' . $book->gambar)); ?>"
                                                            alt="<?php echo e($book->judul); ?>" /></a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-0">Lihat detail</h5>
                                                    </figcaption>
                                                </figure>
                                                <div class="card-body">
                                                    <div class="post-header">
                                                        <div class="post-category text-line">
                                                            <a href="#" class="hover text-blue"
                                                                rel="category"><?php echo e(findCategory($book->kategori, $categorys)); ?></a>
                                                        </div>
                                                        <!-- /.post-category -->
                                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                                href="<?php echo e(route('detail', ['id' => $book->id_buku])); ?>"><?php echo e($book->judul); ?></a>
                                                        </h2>
                                                    </div>
                                                    <!-- /.post-header -->
                                                    <div class="d-flex column"></div>
                                                    <div class="post-content">
                                                        <p class="sinopsis"><?php echo e($book->sinopsis); ?>.</p>
                                                    </div>
                                                    <!-- /.post-content -->
                                                </div>
                                                <!--/.card-body -->
                                                <div class="card-footer">
                                                    <ul class="post-meta d-flex mb-0">
                                                        <span>Terbitan</span>
                                                        <li class="post-date ms-auto text-dark"><i
                                                                class="uil uil-calendar-alt"></i><span><?php echo e(\Carbon\Carbon::parse($book->tahun_terbit)->format('d F Y')); ?></span>
                                                        </li>
                                                    </ul>
                                                    <!-- /.post-meta -->
                                                </div>
                                                <!-- /.card-footer -->
                                            </div>
                                            <!-- /.card -->
                                        </article>
                                        <!-- /article -->
                                    </div>
                                    <!-- /.item-inner -->
                                </div>
                                <!--/.swiper-slide -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.position-relative -->
            <div class="row pt-5">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto d-flex justify-content-center">
                    <a href="<?php echo e(route('list_book')); ?>" class="btn btn-expand btn-primary rounded-pill">
                        <i class="uil uil-arrow-right"></i>
                        <span>Lihat koleksi lainnya</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray position-relative min-vh-60 d-lg-flex align-items-center">
        <div class="col-lg-6 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100"
            data-image-src="./assets/img/smk.png">
            <div class="divider text-gray divider-v-start d-none d-lg-block">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 1200">
                    <g />
                    <g>
                        <g>
                            <polygon fill="currentColor" points="6 0 0 0 0 1200 6 1200 54 0 6 0" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <!--/column -->
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-6">
                    <div class="pt-13 pb-15 pb-md-17 py-lg-16 pe-lg-15">
                        <h2 class="fs-16 text-uppercase text-muted mb-3">Our Solutions</h2>
                        <h3 class="display-3 ls-sm mb-5">Meningkatkan Pengalaman Membaca</h3>
                        <p class="mb-6">Kami menyediakan solusi cerdas untuk perpustakaan sekolah dengan
                            mengimplementasikan sistem rekomendasi buku berbasis content-based filtering. Sistem ini secara
                            otomatis menganalisis preferensi dan riwayat peminjaman siswa untuk memberikan rekomendasi buku
                            yang tepat dan relevan. Dengan memanfaatkan teknologi ini, kami membantu meningkatkan minat baca
                            dan kemudahan akses buku, memastikan setiap siswa mendapatkan pengalaman membaca yang optimal
                            dan sesuai dengan minat mereka.
                        </p>
                        <div class="row align-items-center counter-wrapper gy-6">
                            <div class="col-md-6">
                                <h3 class="counter counter-lg mb-1"><?php echo e($allBook->total()); ?></h3>
                                <h6 class="fs-17 ls-sm mb-1">Total buku</h6>
                                <span class="ratings five"></span>
                            </div>
                            <!--/column -->
                            <div class="col-md-6">
                                <h3 class="counter counter-lg mb-1"><?php echo e($pengguna->total()); ?></h3>
                                <h6 class="fs-17 ls-sm mb-1">Total pengguna</h6>
                                <span class="ratings five"></span>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section id="about-us" class="wrapper bg-white">
        <div class="container py-15 py-md-17">
            <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
                <div class="col-lg-6">
                    <div class="row gx-md-5 gy-5">
                        <div class="col-md-6">
                            <figure class="rounded"><img src="./assets/img/about1.png"
                                    srcset="./assets/img/photos/g14@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 align-self-end">
                            <figure class="rounded"><img src="./assets/img/about2.png"
                                    srcset="./assets/img/photos/g15@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-12">
                            <figure class="rounded mx-md-5"><img src="./assets/img/about3.png"
                                    srcset="./assets/img/photos/g16@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Who Are We?</h2>
                    <h3 class="display-3 ls-sm mb-5">Perpustakaan SMK Negeri 3 Palangka Raya</h3>
                    <p class="mb-6">Kami adalah perpustakaan sekolah yang berdedikasi untuk mendukung proses pembelajaran
                        siswa di SMK Negeri 3 Palangka Raya. Perpustakaan kami dirancang untuk menjadi pusat sumber daya
                        pendidikan, memberikan akses yang mudah dan cepat ke berbagai bahan bacaan yang bermanfaat.</p>

                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-6 mb-15 mb-md-18">
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/target.svg"
                                class="svg-inject icon-svg icon-svg-md text-blue me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Our Vision</h4>
                            <p class="mb-2">Menjadi perpustakaan sekolah yang unggul dan inovatif dalam menyediakan
                                layanan informasi dan sumber belajar yang mendukung tercapainya prestasi akademik dan
                                pengembangan diri siswa di era digital.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/award-2.svg"
                                class="svg-inject icon-svg icon-svg-md text-green me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Our Mission</h4>
                            <p class="mb-2">Kami berkomitmen untuk menyediakan koleksi buku yang relevan dan terkini,
                                mendukung program pendidikan sekolah dengan sumber daya yang beragam, serta menginspirasi
                                minat baca dan semangat belajar siswa. Kami juga memanfaatkan teknologi untuk meningkatkan
                                aksesibilitas dan pengalaman pengguna perpustakaan.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/loyalty.svg"
                                class="svg-inject icon-svg icon-svg-md text-yellow me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">About</h4>
                            <p class="mb-2">Perpustakaan ini dikelola oleh tim profesional yang berdedikasi untuk
                                menyediakan layanan terbaik bagi siswa. Staf kami siap membantu dalam berbagai hal, mulai
                                dari pencarian buku hingga penggunaan sistem perpustakaan online.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <script>
        function validateForm() {
            var query = document.getElementById('autocomplete').value.trim();
            var errorMessage = document.getElementById('error-message');

            if (query === "") {
                errorMessage.style.display = 'block';
                return false;
            } else {
                errorMessage.style.display = 'none';
                return true;
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('siswa.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Yudha\Documents\GitHub\sistem-rekomendasi-buku-CBF\resources\views/siswa/dashboard/index.blade.php ENDPATH**/ ?>