@extends('siswa.layout.layout')
@section('main')
    @include('siswa.books.header')
    @php
          function findCategory($id, $kategoris)
    {
        foreach ($kategoris as $kat) {
            if ($kat->id_kategori == $id) {
                return $kat->kategori;
            }
        }
        return $id; // Mengembalikan ID jika kategori tidak ditemukan
    }
    @endphp
    <section class="wrapper image-wrapper bg-image bg-overlay text-white"
        data-image-src="{{ ($book->gambar === null || $book->gambar === ' ' ? 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' : str_contains($book->gambar, 'https')) ? $book->gambar : asset('uploads/' . $book->gambar) }}"
        alt="{{ $book->judul }}">
        <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <div class="post-header">
                        <div class="post-category text-line text-white">
                            <a href="#" class="text-reset" rel="category">{{ $book->kategori }}</a>
                        </div>
                        <!-- /.post-category -->
                        <h1 class="display-1 mb-3 text-white">{{ $book->judul }}</h1>
                        <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18">Gendre . {{ $book->gendre }}</p>
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
                        <h2 class="display-6 mb-4">Sinopsis</h2>
                        <div class="row gx-0">
                            <div class="col-md-9 text-justify">
                                <p>{{ $book->sinopsis }}</p>
                                <p>Donec id elit non mi porta gravida at eget metus. Cras mattis consectetur purus sit amet
                                    fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                    odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                                    Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum
                                    faucibus dolor auctor.</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-2 ms-auto">
                                <ul class="list-unstyled">
                                    <li>
                                        <h5 class="mb-1">Terbitan</h5>
                                        <p>{{ \Carbon\Carbon::parse($book->tahun_terbit)->format('d F Y') }}</p>
                                    </li>
                                    <li>
                                        <h5 class="mb-1">Penulis</h5>
                                        <p>{{ $book->penulis }}</p>
                                    </li>
                                    @if ($username)
                                         <li>
                                        <h5 class="mb-1">Peminjam</h5>
                                 <p class="text-success font-weight-bold">{{ $username }}</p>

                                    </li>
                                    @endif
                                   
                                    <li>
                                        <h5 class="mb-1">Status</h5>
                                        <p>
                                            @if ($book->status_pinjaman)
                                                <span class="badge bg-warning">Dipinjam</span>
                                            @else
                                                <span class="badge bg-success">Tersedia</span>
                                            @endif
                                        </p>

                                    </li>
                                    <li>
                                        <h5 class="mb-1">Kategori</h5>
                                        <p>
                                            @if ($book->kategori)
                                                <span class="">{{ findCategory($book->kategori, $categorys) }}</span>
                                            @endif
                                        </p>

                                    </li>
                                </ul>
                                {{-- <a href="#" class="more hover">See Project</a> --}}
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
                                    src="{{ $book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
                                    alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img
                                    src="{{ $book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
                                    alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img
                                    src="{{ $book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
                                    alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img
                                    src="{{ $book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
                                    alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img
                                    src="{{ $book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
                                    alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img
                                    src="{{ $book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
                                    alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img
                                    src="{{ $book->gambar ? asset('uploads/' . $book->gambar) : 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
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
@endsection
