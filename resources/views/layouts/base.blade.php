<!DOCTYPE html>
<html lang="es">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QAB Reparaciones y Mantenimiento</title>
  
  <!-- FAVICON -->
  <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap-slider.css') }}">
  <!-- Font Awesome -->
  <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="{{ asset('assets/plugins/slick-carousel/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/plugins/slick-carousel/slick/slick-theme.cs') }}s" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="{{ asset('assets/plugins/fancybox/jquery.fancybox.pack.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

  <style>.carousel-inner > .item > img,.carousel-inner > .item > a > img {width: 100%;margin: auto;}</style>

  @livewireStyles     
  
  {!! htmlScriptTagJsApi(['lang' => 'es']) !!}

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="/">
						<img style="max-height: 60px;" src="{{ asset('assets/images/logo.png') }}" alt="logo">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown dropdown-slide">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Productos<span><i class="fa fa-angle-down"></i></span>
                  </a>

                  <!-- Dropdown list -->
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="dashboard.html">Productos</a>
                    <a class="dropdown-item" href="dashboard-my-ads.html">Productos Adquiridos</a>
                    <a class="dropdown-item" href="dashboard-favourite-ads.html">Añadidos a Favoritos</a>
                    <a class="dropdown-item" href="dashboard-archived-ads.html">Productos Archivados</a>
                    <a class="dropdown-item" href="dashboard-pending-ads.html">Productos en Carrito</a>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-slide">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nosotros <span><i class="fa fa-angle-down"></i></span>
                  </a>
                  <!-- Dropdown list -->
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Acerca de nosotros</a>
                    <a class="dropdown-item" href="#">Contactanos</a>
                    <!-- <a class="dropdown-item" href="user-profile.html">User Profile</a>
                    <a class="dropdown-item" href="blog.html">Blog</a> -->

                  </div>
                </li>
                <!-- <li class="nav-item dropdown dropdown-slide">
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Listing <span><i class="fa fa-angle-down"></i></span> -->
                  </a>
                  <!-- Dropdown list -->
                  <!-- <div class="dropdown-menu">
                    <a class="dropdown-item" href="category.html">Ad-Gird View</a>
                    <a class="dropdown-item" href="ad-listing-list.html">Ad-List View</a>
                  </div>
                </li> -->
                <li class="nav-item dropdown dropdown-slide">
                  @if (Route::has('login'))
                        @auth
                          @if(Auth::user()->utype === 'ADM')
                          <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{Auth::user()->name}} <span><i class="fa fa-angle-down"></i></span>
                          </a>
                          <!-- Dropdown list -->
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ route('profile.show') }}">Perfil</a>
                              <a class="dropdown-item" href="{{ route('admin.servicios') }}">Servicios</a>
                              <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                              <form id="logout-form" method="POST" action="{{ route('logout') }}">
                              @csrf															
                              </form>
                            </div>
                            @else	
                            <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}} <span><i class="fa fa-angle-down"></i></span>
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ route('profile.show') }}">Mi Perfil</a>
                              <a class="dropdown-item" href="{{ route('user.dashboard') }}">Mi Tablero</a>
                              <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                              <form id="logout-form" method="POST" action="{{ route('logout') }}">
                              @csrf															
                              </form>
                            </div>
                 </li>
                            @endif
                            @else
            </ul>
                <ul class="navbar-nav ml-auto mt-10">
                          <li class="nav-item">
                            <a class="nav-link login-button" href="{{ route('login') }}">Iniciar sesión</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                <a class="nav-link login-button" href="{{ route('register') }}">Únete</a>
                              </li>
                          @endif
                        @endauth
                  @endif
                  
						    </ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>
<!--Contenido Principal HOME-->
{{$slot}}

<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="{{ asset('assets/images/logo.png') }}" style="max-height: 60px; " alt="">
          <!-- description -->
          <p class="alt-color">Reparaciones y Mantenimiento de Telefonia, computadoras, consolas de videojuegos
            todo al mejor precio, y hasta la puerta de tu domicilio.
          </p>
        </div>
      </div>
      
      <!-- Link list -->
      <!-- <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="category.html">Category</a></li>
            <li><a href="single.html">Single Page</a></li>
            <li><a href="store.html">Store Single</a></li>
            <li><a href="single-blog.html">Single Post</a>
            </li>
            <li><a href="blog.html">Blog</a></li>



          </ul>
        </div>
      </div> -->
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <div class="mobile d-flex">
            <a href="">
              <!-- Icon -->
              <img src="{{ asset('assets/images/footer/phone-icon.png') }}" alt="mobile-icon">
            </a>
            <p>Obtenga la aplicación móvil</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="#"><img src="{{ asset('assets/images/apps/google-play-store.png') }}" class="img-fluid" alt=""></a>
            <a href="#" class=" ml-3"><img src="{{ asset('assets/images/apps/apple-app-store.png') }}" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. All Rights Reserved, theme by <a class="text-primary" href="https://themefisher.com" target="_blank">themefisher.com</a></p>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-vimeo" href=""></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="{{ asset('assets/plugins/jQuery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap-slider.js') }}"></script>
  <!-- tether js -->
<script src="{{ asset('assets/plugins/tether/js/tether.min.js') }}"></script>
<script src="{{ asset('assets/plugins/raty/jquery.raty-fa.js') }}"></script>
<script src="{{ asset('assets/plugins/slick-carousel/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('assets/plugins/smoothscroll/SmoothScroll.min.js') }}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="{{ asset('assets/plugins/google-map/gmap.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- <script src="{{ asset('assets/js/main.js') }}"></script> -->

<script>
  function anterior() {
  $('#myCarousel').carousel('prev');
  }
  function siguiente() {
  $('#myCarousel').carousel('next');
  }
</script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>

<script>
  if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
      'siguiente': function () {
          siguiente();
      },
    
      'anterior': function () {
          anterior();
      },
  };
  annyang.setLanguage('es-MX');
  annyang.addCommands(commands);
  annyang.debug();
  annyang.start({ continuous: false });
  }
</script>

@livewireScripts
</body>

</html>






