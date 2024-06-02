<header class="wrapper bg-light">
    <nav
        class="navbar navbar-expand-lg classic transparent position-absolute {{ str_contains(url()->current(), '/detail-book') ? 'navbar-dark' : 'navbar-light' }} ">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a class="nav-link d-flex gap-2 item-center" href="{{ route('landing_page') }}">
                    <img class="img-fluid" width="60" height="60" src="{{ asset('/assets/img/logo_smk.png') }}"
                        alt="Logo SMK" />
                    <span class="fs-30 text-white ch-color mt-1">Perpustakaan</span>
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">Perpustakaan</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link ch-color" href="{{ route('landing_page') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ch-color" href="{{ route('list_book') }}">Books</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link ch-color dropdown-toggle" href="#"
                                data-bs-toggle="dropdown">{{ $user->username }}</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:first.last@email.com"
                                class="link-inverse fs-12">perpustakaan@smkn3palangkaraya.sch.id</a>
                            <br /> ( 0536 ) 123 45
                            67 <br />
                            <nav class="nav social social-white mt-4">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other ms-lg-4">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->

    <!-- /.offcanvas -->
    <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
            <form class="search-form w-100">
                <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
            </form>
            <!-- /.search-form -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.offcanvas -->
</header>
