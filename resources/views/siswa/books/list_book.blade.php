@extends('siswa.layout.layout')
@section('main')
    @include('siswa.books.header')
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <h2 class="display-4 mb-3 text-center">Our List Books</h2>
            <div class="ms-auto d-flex justify-content-center fs-lg mb-10 text-center px-md-12 px-lg-16 px-xl-0">
                <nav class="d-flex" aria-label="pagination">
                    <ul class="pagination pagination-alt d-flex justify-content-center flex-wrap mb-0">
                        @php
                            $letters = range('A', 'Z');
                            array_unshift($letters, '#');
                        @endphp
                        @foreach ($letters as $char)
                            <li class="page-item mb-1">
                                <a class="page-link" href="{{ route('list_book', $char) }}">
                                    {{ $char }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="container-card">
                <div class="row justify-content-center mb-6 g-6">
                    {{ $books }}
                    @forelse ($books as $book)
                        <div class="col-lg-4">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                    <a href="{{ route('detail', ['id' => $book->id_buku]) }}">
                                        <img src="{{ ($book->gambar === null || $book->gambar === ' ' ? 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' : str_contains($book->gambar, 'https')) ? $book->gambar : asset('uploads/' . $book->gambar) }}"
                                            alt="{{ $book->judul }}" alt="{{ $book->judul }}" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Lihat Detail</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <div class="post-category text-line">
                                        <a href="#" class="text-blue hover" rel="category">{{ $book->kategori }}</a>
                                    </div>
                                    <h2 class="post-title h3 mt-1 mb-3">
                                        <a class="link-dark"
                                            href="{{ route('detail', ['id' => $book->id_buku]) }}">{{ $book->judul }}</a>
                                    </h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li>
                                            <a>Terbitan</a>
                                        </li>
                                        <li class="post-date">
                                            <i class="uil uil-calendar-alt"></i>
                                            <span>{{ \Carbon\Carbon::parse($book->tahun_terbit)->format('d F Y') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    @empty
                        <p class="text-center">Tidak ditemukan buku dengan inisial berikut.</p>
                    @endforelse
                </div>
                <!-- Pagination links -->
                <div class="d-flex justify-content-center">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- /section -->
@endsection
