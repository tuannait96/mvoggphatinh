<!DOCTYPE html>
<html>
 @include('user.layout.head')
<body>
<!-- ***** Preloader Start ***** -->
   @include('user.layout.loader')
    <!-- ***** Preloader End ***** -->
 
<div class="container">
   @include('user.layout.header')
   @include('user.layout.menu')
   @include('user.layout.chuchay')
  <section id="sliderSection">
    <div class="row">
      @include('user.layout.slide')
      @include('user.layout.notif')
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
       @yield('content')
       @include('user.layout.r_category')
    </div>
  </section>
  @include('user.layout.footer')
</div>
 @include('user.layout.script')
</body>
</html>