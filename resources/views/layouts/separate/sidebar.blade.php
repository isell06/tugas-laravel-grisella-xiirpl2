  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Perpustakaan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('anggotas.edit', Auth::user()->id) }}" class="d-block">{{ Auth::user()->name }}</a>
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
          <!-- <li class="nav-item menu-open">
            <a href="/" class="nav-link ">
              <p>
                Starter Pages
              </p>
            </a>
          </li> -->
            <li class="nav-item">
              <a href="{{ route('anggotas.index') }}" class="nav-link @if (Request::segment(1) == 'anggotas') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Anggota</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('petugass.index') }}" class="nav-link @if (Request::segment(1) == 'petugass') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Petugas</p> 
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('rak.index') }}" class="nav-link @if (Request::segment(1) == 'rak') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Rak</p>
              </a>
            </li>
          <li class="nav-item">
            <form action="{{ route('auth.logout') }}" method="POST">
              @csrf
              <button type="submit" class="nav-link btn btn-warning">Logout</button>
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
