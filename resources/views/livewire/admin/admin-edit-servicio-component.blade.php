<div>
    <section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border border">
                        <h3 class="bg-gray p-4">EDITAR SERVICIO</h3>
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>
                        @endif
                        <form wire:submit.prevent="updateServicio">
                            <fieldset class="p-4">
                                <input type="text" placeholder="Nombre" class="border p-3 w-100 my-2" required wire:model="nombre" wire:keyup="generateSlug">
                                <input type="text" placeholder="Servicio URL" class="border p-3 w-100 my-2" required wire:model="slug">
                                <input type="text" placeholder="Descripción" class="border p-3 w-100 my-2" required wire:model="descripcion">
                                <input type="text" placeholder="Características" class="border p-3 w-100 my-2" required wire:model="caracteristicas">
                                <input type="number" placeholder="Costo" class="border p-3 w-100 my-2" required wire:model="costo">
                                <input type="text" placeholder="Tiempo del servicio" class="border p-3 w-100 my-2" required wire:model="tiempo">
                                <div>
                                    <input type="file"  class="border p-3 w-100 my-2"  wire:model="newimage">
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="100">
                                    @else
                                        <img src="{{asset('assets/images/servicios')}}/{{$img}}" width="100">
                                    @endif
                                </div>
                                <button type="submit" class="d-block py-3 px-4 my-2 bg-primary text-white border-0 rounded font-weight-bold"> Actualizar </button>
                                <a href="{{ route('admin.servicios') }}" class="btn btn-info py-3 px-4 my-2 text-white border-0 rounded font-weight-bold ">Todos los servicios</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>