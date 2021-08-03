<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>QAB Reparaciones y Mantenimiento</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!--

    TemplateMo 546 Sixteen Clothing

    https://templatemo.com/tm-546-sixteen-clothing

    -->

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}"> 
        <link rel="stylesheet" href="{{ asset('assets/css/templatemo-sixteen.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
        @livewireStyles

  </head>

      <body>

        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>  
        <!-- ***** Preloader End ***** -->

        <!-- Header -->
        <header class="">
          <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home
                      <span class="sr-only">(current)</span>
                    </a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="products.html">Our Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
                  @if (Route::has('login'))
                      @auth
                        @if(Auth::user()->utype === 'ADM')
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('profile.show') }}">Mi Perfil ({{Auth::user()->name}})</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('admin.dashboard') }}">Mi Tablero</a>
                        </li>
                        <!-- <li class="nav-item">
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <x-jet-dropdown-link href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                                </x-jet-dropdown-link>
                          </form>
                        </li> -->
                        <li class="nav-item">
														<a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
												</li>	
												<form id="logout-form" method="POST" action="{{ route('logout') }}">
													@csrf															
												</form>		
                        @else
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('profile.show') }}">Mi Perfil ({{Auth::user()->name}})</a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('user.dashboard') }}" class="nav-link">Mi Tablero</a>
                        </li>
                        <li class="nav-item">
														<a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
												</li>	
												<form id="logout-form" method="POST" action="{{ route('logout') }}">
													@csrf															
												</form>		
                      <!-- <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </x-jet-dropdown-link>
                            </form>
                        </li> -->
                      @endif
                    @else
                    <li class="nav-item">
                      <a href="{{ route('login') }}" class="nav-link">Iniciar Sesión</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                      <a href="{{ route('register') }}" class="nav-link">Registrarme</a>
                    </li>
                    @endif
                    @endauth
                  @endif
                 
                </ul>
              </div>
            </div>
          </nav>
        </header>
      
       {{$slot}}

        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="inner-content">
                  <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
                
                - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                </div>
              </div>
            </div>
          </div>
        </footer>


        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


        <!-- Additional Scripts -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script src="{{ asset('assets/js/owl.js') }}"></script>
        <script src="{{ asset('assets/js/slick.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.js') }}"></script>
        <script src="{{ asset('assets/js/accordions.js') }}"></script>

    
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
        @livewireScripts

      </body>

    </html>
