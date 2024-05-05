    <!-- navbar DESKTOP-->
 <header class="header-desktop2">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="header-wrap2">
                 <div class="logo d-block d-lg-none">
                     <a href="#">
                         <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                     </a>
                 </div>
                 <div class="header-button2">
                     <div class="js-item-menu mr-3 text-light">
                              {{$user['username']}}
                     </div>
                     <div class="header-button-item mr-0 js-sidebar-btn">
                         <i class="zmdi zmdi-menu"></i>
                     </div>
                     <div class="setting-menu js-right-sidebar d-none d-lg-block">
                         <div class="account-dropdown__body">
                             <div class="account-dropdown__item">
                                 <a href="#">
                                     <i class="zmdi zmdi-account"></i>Account</a>
                             </div>
                             <div class="account-dropdown__item">
                                 <a href="{{ route('logout') }}">
                                  <i class="zmdi zmdi-settings"></i>Log out</a>
                             </div>

                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
   
    <!-- END navbar DESKTOP-->

    <!-- BREADCRUMB-->
    <section class="au-breadcrumb m-t-75">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="{{ route('dashboard') }}">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">{{ $title }}</li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB-->