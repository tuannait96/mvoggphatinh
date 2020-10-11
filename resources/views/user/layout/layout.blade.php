<!DOCTYPE html>
<html lang="vi">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand CSS Blog by TemplateMo</title>
    <!--css them vao -->


    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="{{asset('admin_asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}"> -->
    <link href="{{asset('user_asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('user_asset/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('user_asset/assets/css/templatemo-stand-blog.css')}}">
    <link rel="stylesheet" href="{{asset('user_asset/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('user_asset/assets/css/them.css')}}">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
   @include('user.layout.loader')
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
   @include('user.layout.header')
   @include('user.layout.slide')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
   
    <!-- Banner Ends Here -->

<!-- Đoạn quảng cáo
    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Stand Blog HTML5 Template</span>
                  <h4>Creative HTML Template For Bloggers!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  -->


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          @yield('content')
          @include('user.layout.r_category')
        </div>
      </div>
    </section>

    @include('user.layout.footer')
   

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('user_asset/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin_asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{asset('user_asset/assets/js/custom.js')}}"></script>
    <script src="{{asset('user_asset/assets/js/owl.js')}}"></script>
    <script src="{{asset('user_asset/assets/js/slick.js')}}"></script>
    <script src="{{asset('user_asset/assets/js/isotope.js')}}"></script>
    <script src="{{asset('user_asset/assets/js/accordions.js')}}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>