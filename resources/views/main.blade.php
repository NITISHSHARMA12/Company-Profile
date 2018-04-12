<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.partials.head')
  </head>
  <body>
    <header class="navbar navbar-custom" role="banner" style="z-index: 999;">
      @include('layouts.partials.header')
    </header>

    @yield('content')
    
    <!---::::::::::::::::::::::::::::::::::::::::::::::::footer::::::::::::::-->
    <!-- <div class="divider"></div> -->
    <section class="footer_sec">
      @include('layouts.partials.footer')
    </section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/index.js')}}"></script>
<script src="{{asset('js/npm.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
</body>
</html>