<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ url('/dashboard') }}" class="brand-link">
    <img src="{{ asset('AdminAutoBot/dist/img/logoAutoBike.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> --}}

    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ route('dashboard')}}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p> Dashboard </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
              Setup
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link"> 
                <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                <p class="mr-2 d-none d-lg-inline text-gray-800 small">Setup User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('usergroup.index') }}" class="nav-link"> 
                <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                <p class="mr-2 d-none d-lg-inline text-gray-800 small">Setup Group User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"> 
                <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                <p class="mr-2 d-none d-lg-inline text-gray-800 small">Setup Supplier</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('barang.index') }}" class="nav-link"> 
                <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                <p class="mr-2 d-none d-lg-inline text-gray-800 small">Setup Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('merkbarang.index') }}" class="nav-link"> 
                <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                <p class="mr-2 d-none d-lg-inline text-gray-800 small">Setup Merk Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"> 
                <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                <p class="mr-2 d-none d-lg-inline text-gray-800 small">Setup Profil Bengkel</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-truck-loading"></i>
            <p>Penerimaan Barang
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                <p class="mr-2 d-none d-lg-inline text-gray-800 small">Penerimaan Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#"" class="nav-link">
                <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                <p class="mr-2 d-none d-lg-inline text-gray-800 small">Retur Terima</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calculator" aria-hidden="true"></i>
            <p>Penjualan
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                 <p class="mr-2 d-none d-lg-inline text-gray-800 small">Penjualan Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                 <p class="mr-2 d-none d-lg-inline text-gray-800 small">Lihat Penjualan Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p class="mr-2 d-none d-lg-inline text-gray-800 small">Retur Jual Barang</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-warehouse"></i>
            <p>
              Gudang
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p class="mr-2 d-none d-lg-inline text-gray-800 small">Stock Opname</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p class="mr-2 d-none d-lg-inline text-gray-800 small">Lihat Kartu Stock</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p class="mr-2 d-none d-lg-inline text-gray-800 small">Adjustment Barang</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">LAPORAN</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-archive" aria-hidden="true"></i>
            <p>Lap. Stock Barang</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-archive"></i>
            <p>Lap. Penerimaan Barang</p>
          </a>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>