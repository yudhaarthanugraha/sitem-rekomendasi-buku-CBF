@extends('siswa.layout.layout')
@section('main')
    @include('siswa.books.header')
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <h2 class="display-4 mb-3 text-center">Our List Books</h2>
            <div class="ms-auto d-flex justify-content-center fs-lg mb-10 text-center px-md-12 px-lg-16 px-xl-0">
                <nav class="d-flex" aria-label="pagination">
                    <ul class="pagination pagination-alt d-flex justify-content-center flex-wrap mb-0">
                        @for ($i = 0; $i <= 25; $i++)
                            @php
                                $char = $i == 0 ? '#' : chr($i + 64);
                            @endphp
                            <li class="page-item mb-1"><a class="page-link" href="#">{{ $char }}</a></li>
                        @endfor
                    </ul>
                    <!-- /.pagination -->
                </nav>
                <!-- /nav -->
            </div>
            <div class="container-card">
                <div class="row justify-content-center align-items-center mb-6 g-6">
                    <div class="col-lg-4">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                        src="./assets/img/photos/b4.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Coding</a>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ligula
                                        tristique quis risus</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span>
                                    </li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="col-lg-4">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                        src="./assets/img/photos/b5.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Workspace</a>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Nullam
                                        id dolor elit id nibh</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2022</span>
                                    </li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="col-lg-4">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                        src="./assets/img/photos/b6.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Meeting</a>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ultricies
                                        fusce porta elit</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2022</span>
                                    </li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mb-6 g-6">
                    <div class="col-lg-4">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                        src="./assets/img/photos/b4.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Coding</a>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ligula
                                        tristique quis risus</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span>
                                    </li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="col-lg-4">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                        src="./assets/img/photos/b5.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Workspace</a>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Nullam
                                        id dolor elit id nibh</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2022</span>
                                    </li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="col-lg-4">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                        src="./assets/img/photos/b6.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Meeting</a>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                        href="./blog-post.html">Ultricies
                                        fusce porta elit</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2022</span>
                                    </li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mb-6 g-6">
                    <div class="col-lg-4">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                        src="./assets/img/photos/b4.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Coding</a>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ligula
                                        tristique quis risus</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span>
                                    </li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="col-lg-4">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                        src="./assets/img/photos/b5.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Workspace</a>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Nullam
                                        id dolor elit id nibh</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2022</span>
                                    </li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="col-lg-4">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                        src="./assets/img/photos/b6.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Meeting</a>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                        href="./blog-post.html">Ultricies
                                        fusce porta elit</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2022</span>
                                    </li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
