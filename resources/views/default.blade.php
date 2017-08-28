<!doctype html>
<html>
<head>
    @include('inlcudes.header')
</head>
<body id="page-top">
	<nav class="navbar navbar-expand-lg navbar-light " id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">PC Helpline</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <div id="main" class="row">
        @yield('content')
    </div>

  <!--    <div class="call-to-action bg-dark">
      <div class="container text-center">
        <h2>Let's Get In Touch!</h2><br><br>
     
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">email@email.com</a>
            </p>
          </div>
        </div>
      </div>
    </div> -->

    @include('inlcudes.footer')
    @yield('scripts')
</body>
</html>