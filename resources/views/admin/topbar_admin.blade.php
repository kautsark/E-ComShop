<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- Messages Dropdown<li> Menu -->
      {{-- DropDown UserProfile --}}
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
          <img src="{{ asset('AdminAutoBot/dist/img/avatar5.png') }}" width="20px" height="20px"  class="img-profile rounded-circle"  alt="avatar">
          <span class="mr-2 d-none d-lg-inline text-gray-800"> {{ auth()->user()->name }} </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400 small"></i>
            Profile
        </a>
        <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Settings
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#logoutModal" 
        onclick="document.getElementById('logout-form').submit()">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
        </div>
      </li>
        
    </ul>
  </nav>
  <!-- /.navbar -->

  <form id="logout-form" method="post" action="{{ route('logout') }}">
    @csrf
  </form>