  <!-- MENU SIDEBAR-->
  <aside class="menu-sidebar2">
      <div class="logo">
          <a href="#">
              <img src="images/icon/logo-white.png" alt="Cool Admin" />
          </a>
      </div>
      <div class="menu-sidebar2__content js-scrollbar1">
          <nav class="navbar-sidebar2">
              <ul class="list-unstyled navbar__list">
                  <li>
                      <a href="{{ route('dashboard') }}">
                          <i class="fas fa-chart-bar"></i>Dashboard</a>
                  </li>
                  
                  <li class="has-sub">
                      <a class="js-arrow" href="#">
                          <i class="fas fa-trophy"></i>Kelola
                          <span class="arrow">
                              <i class="fas fa-angle-down"></i>
                          </span>
                      </a>
                      <ul class="list-unstyled navbar__sub-list js-sub-list">
                          <li>
                              <a href="{{ route('kelola-siswa') }}">
                                  <i class="fas fa-table"></i>Siswa</a>
                          </li>
                          <li>
                              <a href="{{ route('kelola-buku') }}">
                                  <i class="far fa-check-square"></i>Buku</a>
                          </li>
                          <li>
                              <a href="{{ route('kelola-kategori') }}">
                                  <i class="fas fa-calendar-alt"></i>Kategori</a>
                          </li>
                      
                      </ul>
                  </li>
                 
              </ul>
          </nav>
      </div>
  </aside>
  <!-- END MENU SIDEBAR-->
