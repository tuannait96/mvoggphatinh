  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <!-- <div class="header_top_left">
          </div> -->
          <div class="header_top_right" style="float: right;">
            @auth
           <ul class="top_nav">
              <li style="float: right;"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng xuất</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
              <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
            </ul>
          @endauth
          @guest
             <li><a href="{{ route('login') }}">Login</a></li>
             <li><a href="{{ route('register') }}">Register</a></li>
          @endguest
          </div>

        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12" >
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo"><img src="{{asset('user_asset/images/logo.jpg')}}" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="{{asset('user_asset/assets/images/addbanner_728x90_V1.jpg')}}" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  