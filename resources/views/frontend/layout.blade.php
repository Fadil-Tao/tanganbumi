<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Untree.co" />
  <link rel="shortcut icon" href="favicon.png" />

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap5" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- Include Owl Carousel CSS --> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.default.min.css" />

  <!-- Include jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Include Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />



  <link rel="stylesheet" href="{{ asset('tanganbumi/fonts/icomoon/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('tanganbumi/fonts/flaticon/font/flaticon.css') }}" />

  <link rel="stylesheet" href="{{ asset('tanganbumi/css/tiny-slider.css') }}" />
  <link rel="stylesheet" href="{{ asset('tanganbumi/css/aos.css') }}" />
  <link rel="stylesheet" href="{{ asset('tanganbumi/css/style.css') }}" />

  <title>
    Tanganbumi
  </title>
</head>

<body>
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav">
    <div class="container">
      <div class="menu-bg-wrap">
        <div class="site-navigation">
          <a href="/" class="logo m-0 float-start">Tanganbumi</a>

          <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">Tentang Kami</a></li>
            <li class="{{ request()->is('catalog') || request()->is('catalog/*') ? 'active' : '' }}">
              <a href="{{ route('catalog') }}">Katalog</a>
            </li>
            <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Hubungi Kami</a></li>
          </ul>

          <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </nav>

  @yield('content')

  <div class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <h3>Contact</h3>
            <address>Balikpapan Baru, Balikpapan</address>
            <ul class="list-unstyled links">
              <li><a href="https://www.instagram.com/tanganbumi/">Instagram : @Tanganbumi</a></li>
              <li><a href="https://line.me/R/ti/p/%40510nxsty">Line : @tanganbumi</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Links</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Hubungi kami</a></li>
            </ul>

            <ul class="list-unstyled social">
              <li>
                <a href="#"><span class="icon-instagram"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-whatsapp"></span></a>
              </li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

          <p>
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            . All Rights Reserved. &mdash; Designed with love by
            <a href="https://untree.co">Untree.co</a>
            <!-- License information: https://untree.co/license/ -->
          </p>
          <div>
            Distributed by
            <a href="https://themewagon.com/" target="_blank">themewagon</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.site-footer -->

  <!-- Preloader -->
  <!-- <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div> -->

  <script src="{{ asset('tanganbumi/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('tanganbumi/js/tiny-slider.js') }}"></script>
  <script src="{{ asset('tanganbumi/js/aos.js') }}"></script>
  <script src="{{ asset('tanganbumi/js/navbar.js') }}"></script>
  <script src="{{ asset('tanganbumi/js/counter.js') }}"></script>
  <script src="{{ asset('tanganbumi/js/custom.js') }}"></script>
</body>

</html>