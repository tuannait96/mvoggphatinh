<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('admin')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
<!--
    !-- SEARCH FORM --
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          Admin
        </a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item">
            Đổi mật khẩu
          </a>
          <div class="dropdown-divider"></div>
      </li>
      <a class="nav-link" href="#">Đăng xuất
      </a>
	  <a class="dropdown-item" href="{{ route('logout') }}"
	   onclick="event.preventDefault();
					 document.getElementById('logout-form').submit();">
		{{ __('Logout') }}
	  </a>
	  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
			@csrf
	  </form>
	  
	  
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>

    @include('admin.layout.menu')
  </nav>