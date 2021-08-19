<div>
    <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
        <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header">LISTA DE SERVICIOS</h3>
          <a href="{{ route('admin.addservicio') }}" class="btn btn-main-sm"><i class="fa fa-plus-circle"></i> Agregar servicio</a>
          <br><br>
          @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{Session::get('message')}}
            </div>
          @endif
          <table class="table table-responsive product-dashboard-table">
            <thead>
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">IMAGEN</th>
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
                <td class="text-center">
                  <img src="{{asset('assets/images/servicios')}}/{{$servicio->img}}" width="70" >
                </td>
                <td class="text-center">
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
                      <li class="list-inline-item">
                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="{{ route('admin.editservicio',['servicio_slug'=>$servicio->slug])}}">
                          <i class="fa fa-pencil"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="delete" data-toggle="tooltip" data-placement="top" title="Eliminar" href="" wire:click.prevent="deleteServicio({{$servicio->id}})">
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