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
    <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin_asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin_asset/dist/css/adminlte.min.css')}}">
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
   
    <!-- Page Content -->
    <!-- Banner Starts Here -->
   @include('user.layout.slide')

    <section class="blog-posts">
      <div class="container-fluid">
        <div class="row">
          @yield('content')
          @include('user.layout.r_category')
        </div>
      </div>
    </section>

    @include('user.layout.footer')
   

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('user_asset/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('user_asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{asset('user_asset/assets/js/custom.js')}}"></script>
    <script src="{{asset('user_asset/assets/js/owl.js')}}"></script>
    <script src="{{asset('user_asset/assets/js/slick.js')}}"></script>
    <script src="{{asset('user_asset/assets/js/isotope.js')}}"></script>
    <script src="{{asset('user_asset/assets/js/accordions.js')}}"></script>
    <!-- DataTables -->
<script src="{{asset('admin_asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin_asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin_asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin_asset/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin_asset/dist/js/demo.js')}}"></script>

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