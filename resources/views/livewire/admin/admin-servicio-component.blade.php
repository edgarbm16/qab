<div>
    <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
        <!-- Recently Favorited -->
        <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header">LISTA DE SERVICIOS</h3>
          <!-- <a class="nav-link text-white add-button" href="ad-listing.html"><i class="fa fa-plus-circle"></i> Add Listing</a> -->
          <a href="{{ route('admin.addservicio') }}" class="btn btn-main-sm"><i class="fa fa-plus-circle"></i> Agregar servicio</a>
          <br><br>
          <table class="table table-responsive product-dashboard-table">
            <thead>
              <tr>
                <th class="text-center">ID</th>
                <!-- <th class="text-center">IMAGEN</th> -->
                <th class="text-center">NOMBRE DEL SERVICIO</th>
                <th class="text-center">DESCRIPCIÓN</th>
                <th class="text-center">CARACTERÍSTICAS</th>
                <th class="text-center">PRECIO</th>
                <th class="text-center">TIEMPO</th>
                <th class="text-center">ACCIONES</th>
              </tr>
            </thead>
                
            <tbody>
            @foreach($servicios as $servicio)
              <tr>
                <td class="text-center">
                    {{$servicio->id}}
                </td>
                <!-- <td class="product-thumb">
                  <img width="80px" height="auto" src="images/products/products-1.jpg" alt="image description">
                </td> -->
                <td class="text-center">
                  <!-- <h3 class="title">Macbook Pro 15inch</h3>
                  <span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                  <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                  <span class="status active"><strong>Status</strong>Active</span>
                  <span class="location"><strong>Location</strong>Dhaka,Bangladesh</span> -->
                  {{$servicio->nombre}}
                </td>
                <td class="text-center">
                  {{$servicio->descripcion}}
                </td>
                <td class="text-center">
                  {{$servicio->caracteristicas}}
                </td>
                <td class="text-center">
                  {{$servicio->costo}}
                </td>
                <td class="text-center">
                  {{$servicio->tiempo}}
                </td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <!-- <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="view" class="view" href="category.html">
                          <i class="fa fa-eye"></i>
                        </a>
                      </li> -->
                      <li class="list-inline-item">
                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="">
                          <i class="fa fa-pencil"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="delete" data-toggle="tooltip" data-placement="top" title="Delete" href="">
                          <i class="fa fa-trash"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              @endforeach
              <tr>
            </tbody>
          </table>
        {{$servicios->links('pagination::bootstrap-4')}}
    </div>
</div>