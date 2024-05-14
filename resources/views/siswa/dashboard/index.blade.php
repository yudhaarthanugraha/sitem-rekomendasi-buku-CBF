@extends('siswa.layout.layout')
@section('main')
    @include('siswa.layout.header')
    <section class="wrapper image-wrapper bg-cover bg-image bg-xs-none bg-gray" data-image-src="./assets/img/photos/bg37.jpg">
        <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
            <div class="row">
                <div class="col-sm-6 col-xxl-5 text-center text-sm-start" data-cues="slideInDown" data-group="page-title"
                    data-interval="-200" data-delay="500">
                    <h2 class="display-1 fs-56 mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0">Temukan Buku
                        <span class="underline-3 style-3 yellow">Favorit</span> Kamu
                    </h2>
                    <p class="lead fs-23 lh-sm mb-7 pe-lg-5 pe-xl-5 pe-xxl-0">Jelajahi koleksi buku kami dan temukan
                        rekomendasi buku yang sesuai dengan minat Anda.</p>
                    <div><a href="#" class="btn btn-lg btn-primary rounded">Search</a></div>
                </div>
                <!--/column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-15 py-md-17">
            <div class="row text-center">
                <div class="col-md-10 col-lg-9 col-xxl-8 mx-auto">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">What We Do?</h2>
                    <h3 class="display-3 ls-sm mb-9 px-xl-11">The service we offer is specifically designed to meet your
                        needs.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-8">
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/telephone-3.svg"
                                class="svg-inject icon-svg icon-svg-md text-blue me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">24/7 Support</h4>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio
                                sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/shield.svg"
                                class="svg-inject icon-svg icon-svg-md text-yellow me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Secure Payments</h4>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio
                                sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/cloud-computing-2.svg"
                                class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Daily Updates</h4>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio
                                sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/analytics.svg"
                                class="svg-inject icon-svg icon-svg-md text-pink me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Market Research</h4>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio
                                sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/chat-2.svg"
                                class="svg-inject icon-svg icon-svg-md text-green me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Social Engagement</h4>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio
                                sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/megaphone.svg"
                                class="svg-inject icon-svg icon-svg-md text-purple me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Content Marketing</h4>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio
                                sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray position-relative min-vh-60 d-lg-flex align-items-center">
        <div class="col-lg-6 position-lg-absolute top-0 start-0 image-wrapper bg-image bg-cover h-100"
            data-image-src="./assets/img/photos/bg38.jpg">
            <div class="divider text-gray divider-v-end d-none d-lg-block">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 1200">
                    <g />
                    <g>
                        <g>
                            <polygon fill="currentColor" points="48 0 0 0 48 1200 54 1200 54 0 48 0" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <!--/column -->
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-6 ms-auto">
                    <div class="pt-13 pb-15 pb-md-17 py-lg-16 ps-lg-15 pe-xxl-16">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">How It Works?</h2>
                        <h3 class="display-3 ls-sm mb-7">Here are the 3 working steps on success.</h3>
                        <div class="d-flex flex-row mb-5">
                            <div>
                                <img src="./assets/img/icons/lineal/light-bulb.svg"
                                    class="svg-inject icon-svg icon-svg-md text-blue me-5 mt-1" alt="" />
                            </div>
                            <div>
                                <h4 class="fs-20 ls-sm">Collect Ideas</h4>
                                <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus. Praesent commodo cursus.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-5">
                            <div>
                                <img src="./assets/img/icons/lineal/pie-chart-2.svg"
                                    class="svg-inject icon-svg icon-svg-md text-green me-5 mt-1" alt="" />
                            </div>
                            <div>
                                <h4 class="fs-20 ls-sm">Data Analysis</h4>
                                <p class="mb-0">Vivamus sagittis lacus vel augue laoreet. Etiam porta sem malesuada magna.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <img src="./assets/img/icons/lineal/design.svg"
                                    class="svg-inject icon-svg icon-svg-md text-yellow me-5 mt-1" alt="" />
                            </div>
                            <div>
                                <h4 class="fs-20 ls-sm">Magic Touch</h4>
                                <p class="mb-0">Cras mattis consectetur purus sit amet. Aenean lacinia bibendum nulla sed.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-white">
        <div class="container py-15 py-md-17">
            <div class="row text-center">
                <div class="col-lg-10 col-xl-7 col-xxl-6 mx-auto">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Case Studies</h2>
                    <h3 class="display-3 ls-sm mb-10">Our awesome projects with creative ideas and great design.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="swiper-container blog grid-view mb-10" data-margin="30" data-dots="true" data-items-xl="3"
                data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img
                                            src="./assets/img/photos/b4.jpg" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 ls-sm mb-3"><a class="link-dark"
                                            href="./blog-post.html">Ligula tristique quis risus</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span>
                                        </li>
                                        <li class="post-comments"><a href="#"><i
                                                    class="uil uil-file-alt fs-15"></i>Coding</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img
                                            src="./assets/img/photos/b5.jpg" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 ls-sm mb-3"><a class="link-dark"
                                            href="./blog-post.html">Nullam id dolor elit id nibh</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2022</span>
                                        </li>
                                        <li class="post-comments"><a href="#"><i
                                                    class="uil uil-file-alt fs-15"></i>Workspace</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img
                                            src="./assets/img/photos/b6.jpg" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 ls-sm mb-3"><a class="link-dark"
                                            href="./blog-post.html">Ultricies fusce porta elit</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2022</span>
                                        </li>
                                        <li class="post-comments"><a href="#"><i
                                                    class="uil uil-file-alt fs-15"></i>Meeting</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img
                                            src="./assets/img/photos/b7.jpg" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 ls-sm mb-3"><a class="link-dark"
                                            href="./blog-post.html">Morbi leo risus porta eget</a></h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2022</span>
                                        </li>
                                        <li class="post-comments"><a href="#"><i
                                                    class="uil uil-file-alt fs-15"></i>Business Tips</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray position-relative min-vh-60 d-lg-flex align-items-center">
        <div class="col-lg-6 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100"
            data-image-src="./assets/img/photos/bg39.jpg">
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
                        <h3 class="display-3 ls-sm mb-5">Just sit & relax while we take care of your business needs.</h3>
                        <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                            mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus.
                            Maecenas sed diam eget risus varius blandit sit amet non magna. Praesent commodo cursus magna.
                        </p>
                        <div class="row align-items-center counter-wrapper gy-6">
                            <div class="col-md-6">
                                <h3 class="counter counter-lg mb-1">99.7%</h3>
                                <h6 class="fs-17 ls-sm mb-1">Customer Satisfaction</h6>
                                <span class="ratings five"></span>
                            </div>
                            <!--/column -->
                            <div class="col-md-6">
                                <h3 class="counter counter-lg mb-1">4x</h3>
                                <h6 class="fs-17 ls-sm mb-1">New Visitors</h6>
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
    <section class="wrapper bg-white">
        <div class="container py-15 py-md-17">
            <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
                <div class="col-lg-6">
                    <div class="row gx-md-5 gy-5">
                        <div class="col-md-6">
                            <figure class="rounded"><img src="./assets/img/photos/g14.jpg"
                                    srcset="./assets/img/photos/g14@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 align-self-end">
                            <figure class="rounded"><img src="./assets/img/photos/g15.jpg"
                                    srcset="./assets/img/photos/g15@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-12">
                            <figure class="rounded mx-md-5"><img src="./assets/img/photos/g16.jpg"
                                    srcset="./assets/img/photos/g16@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Who Are We?</h2>
                    <h3 class="display-3 ls-sm mb-5">Company that believes in the power of creative strategy.</h3>
                    <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel
                        scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Aenean lacinia bibendum nulla sed.</p>
                    <div class="row gy-3 gx-xl-8">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur
                                        blandit tempus.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget
                                        urna mollis ornare donec elit.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis
                                        euismod.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus
                                        faucibus amet euismod.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
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
                            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida
                                at eget. Fusce dapibus tellus.</p>
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
                            <p class="mb-2">Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet.
                                Sed posuere consectetur.</p>
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
                            <h4 class="fs-20 ls-sm">Our Values</h4>
                            <p class="mb-2">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo
                                cursus magna scelerisque.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row position-relative mb-15 mb-md-17">
                <figure class="rounded position-absolute d-none d-lg-block"
                    style="top: 50%; right:0; width: 45%; height: auto; transform: translateY(-50%); z-index:2"><img
                        src="./assets/img/photos/tei1.jpg" srcset="./assets/img/photos/tei1@2x.jpg 2x" alt="">
                </figure>
                <div class="col-lg-9 text-center">
                    <div class="card bg-gray">
                        <div class="card-body p-md-10 py-xxl-16">
                            <div class="row gx-0">
                                <div class="col-lg-8 ps-xl-10">
                                    <span class="ratings five fs-20 mb-3"></span>
                                    <blockquote class="border-0 fs-lg mb-0">
                                        <p>“Donec id elit non mi porta gravida at eget metus. Vivamus mollis est non commodo
                                            luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Duis mollis
                                            porta est non commodo luctus.”</p>
                                        <div class="blockquote-details justify-content-center text-center">
                                            <div class="info p-0">
                                                <h4 class="ls-sm mb-1">Coriss Ambady</h4>
                                                <p class="mb-0">Financial Analyst</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row text-center">
                <div class="col-md-10 col-lg-8 col-xl-9 col-xxl-8 mx-auto">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Our Pricing</h2>
                    <h3 class="display-3 ls-sm mb-10 px-xl-15">We offer great prices and quality service for your business.
                    </h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="pricing-wrapper mb-10 mb-md-14">
                <div class="row gx-0 gy-6">
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing card shadow-none">
                            <div class="card-body">
                                <h4 class="card-title ls-sm">Basic Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price justify-content-start"><span class="price-currency">$</span><span
                                            class="price-value">9</span> <span class="price-duration">mo</span></div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-green mt-7 mb-8">
                                    <li><i class="uil uil-check"></i><span><strong>1</strong> Project </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>100MB</strong> Storage </span></li>
                                    <li><i class="uil uil-times text-red"></i><span> Weekly <strong>Reports</strong>
                                        </span></li>
                                    <li><i class="uil uil-times text-red"></i><span> 7/24 <strong>Support</strong></span>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-soft-primary rounded">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing card shadow-none">
                            <div class="card-body">
                                <h4 class="card-title ls-sm">Premium Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price justify-content-start"><span class="price-currency">$</span><span
                                            class="price-value">19</span> <span class="price-duration">mo</span></div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-green mt-7 mb-8">
                                    <li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span></li>
                                    <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                                    <li><i class="uil uil-times text-red"></i><span> 7/24 <strong>Support</strong></span>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-soft-primary rounded">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing card bg-gray">
                            <div class="card-body">
                                <h4 class="card-title ls-sm">Corporate Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price justify-content-start"><span class="price-currency">$</span><span
                                            class="price-value">29</span> <span class="price-duration">mo</span></div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-green mt-7 mb-8">
                                    <li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span></li>
                                    <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                                    <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
                                </ul>
                                <a href="#" class="btn btn-primary rounded">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing card shadow-none">
                            <div class="card-body">
                                <h4 class="card-title ls-sm">Community Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price justify-content-start"><span class="price-currency">$</span><span
                                            class="price-value">49</span> <span class="price-duration">mo</span></div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-green mt-7 mb-8">
                                    <li><i class="uil uil-check"></i><span><strong>90</strong> Projects </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>900K</strong> API Access </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>900MB</strong> Storage </span></li>
                                    <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong> </span></li>
                                    <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
                                </ul>
                                <a href="#" class="btn btn-soft-primary rounded">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                </div>
                <!--/.row -->
            </div>
            <!--/.pricing-wrapper -->
            <div class="row">
                <div class="col-xl-11 mx-auto">
                    <div class="row gx-md-8 gx-xl-12 gy-10 px-lg-5">
                        <div class="col-lg-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="./assets/img/icons/lineal/check-list.svg"
                                        class="svg-inject icon-svg icon-svg-sm text-blue me-5 mt-1" alt="" />
                                </div>
                                <div>
                                    <h4 class="fs-20 ls-sm">Can I cancel my subscription?</h4>
                                    <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                        nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                                        mollis euismod.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-lg-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="./assets/img/icons/lineal/wallet.svg"
                                        class="svg-inject icon-svg icon-svg-sm text-yellow me-5 mt-1" alt="" />
                                </div>
                                <div>
                                    <h4 class="fs-20 ls-sm">Which payment methods do you accept?</h4>
                                    <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                        nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                                        mollis euismod.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-lg-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="./assets/img/icons/lineal/insurance.svg"
                                        class="svg-inject icon-svg icon-svg-sm text-pink me-5 mt-1" alt="" />
                                </div>
                                <div>
                                    <h4 class="fs-20 ls-sm">How can I manage my Account?</h4>
                                    <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                        nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                                        mollis euismod.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-lg-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="./assets/img/icons/lineal/padlock.svg"
                                        class="svg-inject icon-svg icon-svg-sm text-green me-5 mt-1" alt="" />
                                </div>
                                <div>
                                    <h4 class="fs-20 ls-sm">Is my credit card information secure?</h4>
                                    <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                        nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                                        mollis euismod.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
