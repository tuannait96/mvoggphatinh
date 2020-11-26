<!DOCTYPE html>
<html>
  @include('admin.layout.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
 	@include('admin.layout.header')

  <!-- Content Wrapper. Contains page content -->

  	@yield('content')
</div>
  <!-- /.content-wrapper -->
  @include('admin.layout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('admin.layout.js')

</body>
</html>
