<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('assets/img/logo_etalase.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Etalase e-commerce</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/img/avatar2.png')}}" class="img-rounded elevation-2 mt-3" alt="User Image">
        </div>
        <div class="info">
          <!-- <a href="#" class="d-block">Dwi Febriyanti</a> -->

          @auth
           @if (Auth::check())
           <div class="info">
            <a class="d-block" href="{{ route('profile.edit') }}">{{ strtoupper(Auth::user()->name) ?? "" }}</a>
            <span class="text-primary">Role: {{ Auth::user()->role }}</span>
           </div>
           @endif
           @endauth
           @guest
           <a href="#" class="d-block">Guest</a>
           @endguest

        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @auth
          <li class="nav-item">
          
              <a href="{{ url('halaman_utama') }}" class="nav-link">
              <i class="fa-solid fa-house"></i>
                  <p>
                      Halaman Dashboard
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('profil') }}" class="nav-link">
              <i class="fa-regular fa-address-card"></i>
                  <p>
                      Profile
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('produk/show') }}" class="nav-link">
              <i class="fa-solid fa-gift"></i>
                  <p>
                      Produk
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('testimoni/show') }}" class="nav-link">
              <i class="fa-regular fa-comments"></i>
                  <p>
                      Testimoni
                  </p>
              </a>
          </li>
          <li class="nav-item">
          @if(Auth::user()->role=='administrator')
              <a href="{{ url('jenis_produk/show') }}" class="nav-link">
              <i class="fa-regular fa-paper-plane"></i>
                  <p>
                      Jenis Produk
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('kategori_tokoh/show') }}" class="nav-link">
              <i class="fa-solid fa-users"></i>
                  <p>
                      Kategori Tokoh
                  </p>
              </a>
          </li>
          @endif
          <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fa-solid fa-right-from-bracket"></i>
                  <p> Logout </p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
          </li>
          
          @endauth
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>