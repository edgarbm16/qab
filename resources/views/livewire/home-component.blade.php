<div>

  <!--===============================
  =            Hero Area            =
  ================================-->

  <section class="bg-1 text-center overly">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">

        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="{{ asset('assets/images/call-to-action/slider-background-1.gif') }}" style="max-height:445px;" alt="Chania" width="460" height="345">
            </div>

            <div class="item">
              <img src="{{ asset('assets/images/call-to-action/slider-background-2.gif') }}" style="max-height:445px;" alt="Chania" width="460" height="345">
            </div>
          
            <div class="item">
              <img src="{{ asset('assets/images/call-to-action/slider-background-3.gif') }}" style="max-height:445px;" alt="Flower" width="460" height="345">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
          
        </div>
      </div>
    </div>

    <!-- Container End -->
  </section>

  <!--===================================
  =            Client Slider            =
  ====================================-->


  <!--===========================================
  =            Popular deals section            =
  ============================================-->

  <section class="container">
    <div class="popular-deals section bg-gray">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>Servicios Disponibles</h2>
            <p>El mejor servicio y mantenimiento para tu computadora, de excelente Calidad y servicio a domicilio</p>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- offer 01 -->
        <div class="col-lg-12 col-md-12">
          <div class="row">
            <div style="display:flex;" class="col-sm-10 col-lg-10 col-md-10" >
              @foreach($lservicio as $lservicios)
                <div class="product-item bg-light col-md-4">
                  <div class="card">
                    <div class="thumb-content">
                      <div class="price">${{$lservicios->costo}}</div>
                      <a href="single.html">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/servicios')}}/{{$lservicios->img}}" alt="Card image cap">
                      </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><a href="single.html">{{$lservicios->nombre}}</a></h4>
                        <ul class="list-inline product-meta">
                          <li class="list-inline-item">
                            <a href="single.html"><i class="fa fa-folder-open-o"></i>Equipos Informáticos</a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#"><i class="fa fa-clock-o"></i>{{$lservicios->tiempo}}</a>
                          </li>
                        </ul>
                        <p class="card-text">{{$lservicios->descripcion}}</p>
                        <p class="card-text">{{$lservicios->caracteristicas}}</p>
                        <div class="product-ratings">
                          <ul class="list-inline">
                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>       
        </div>
      </div>
  </section>



  <!--==========================================
  =            All Category Section            =
  ===========================================-->

  <section class=" section">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section title -->
          <div class="section-title">
            <h2>Mas Categorias</h2>
            <p>A través de nuestra pagina podrás encontrar mas servicios tales como</p>
          </div>
          <div class="row">
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
              <div class="category-block">
                <div class="header">
                  <i class="fa fa-laptop icon-bg-1"></i> 
                  <h4>Equipos Informáticos</h4>
                </div>
                <ul class="category-list" >
                  <li><a href="#">Laptops <span>93</span></a></li>
                  <li><a href="#">Computadoras de escritorio <span>233</span></a></li>
                  <!-- <li><a href="category.html">Microsoft  <span>183</span></a></li>
                  <li><a href="category.html">Monitors <span>343</span></a></li> -->
                </ul>
              </div>
            </div> <!-- /Category List -->
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
              <div class="category-block">
                <div class="header">
                  <i class="fa fa-gamepad   icon-bg-2"></i> 
                  <h4>Consolas de videojuegos</h4>
                </div>
                <ul class="category-list" >
                  <li><a href="#">PS4<span>393</span></a></li>
                  <li><a href="#">XBOX<span>23</span></a></li>
                  <!-- <li><a href="category.html">Restaurants  <span>13</span></a></li>
                  <li><a href="category.html">Food Track<span>43</span></a></li> -->
                </ul>
              </div>
            </div> <!-- /Category List -->
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
              <div class="category-block">
                <div class="header">
                  <i class="fa fa-desktop   icon-bg-3"></i> 
                  <h4>Dispositivos periféricos de salida y entrada</h4>
                </div>
                <ul class="category-list" >
                  <li><a href="#">Monitores<span>93</span></a></li>
                  <li><a href="#">Teclados<span>23</span></a></li>
                  <li><a href="#">Mouse<span>83</span></a></li>
                  <li><a href="#">Impresoras<span>33</span></a></li>
                </ul>
              </div>
            </div> <!-- /Category List -->
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
              <div class="category-block">
                <div class="header">
                  <i class="fa fa-mobile   icon-bg-4"></i> 
                  <h4>Celulares y smartphones</h4>
                </div>
                <ul class="category-list" >
                  <li><a href="category.html">Samsung<span>53</span></a></li>
                  <li><a href="category.html">Xiaomi <span>212</span></a></li>
                  <li><a href="category.html">Motorola <span>133</span></a></li>
                  <li><a href="category.html">Huawuei <span>143</span></a></li>
                  <li><a href="category.html">Apple <span>143</span></a></li>
                </ul>
              </div>
            </div> <!-- /Category List -->
           
            
            
          </div>
        </div>
      </div>
    </div>
    <!-- Container End -->
  </section>


  <!--====================================
  =            Call to Action            =
  =====================================-->

  <section class="call-to-action overly bg-3 section-sm"style="max-height:440px;">
    <!-- Container Start -->
    <div class="container">
      <div class="row justify-content-md-center text-center">
        <div class="col-md-8">
          <div class="content-holder">
            <h2>Ubicados en Valle de Santiago Gto.</h2>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Container End -->
  </section>

</div>