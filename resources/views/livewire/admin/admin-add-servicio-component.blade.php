<div>
    <section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border border">
                        <h3 class="bg-gray p-4">REGISTRAR SERVICIO</h3>
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>
                        @endif
                        <form wire:submit.prevent="guardarServicio">
                            <fieldset class="p-4">
                                <input type="text" placeholder="Nombre" class="border p-3 w-100 my-2" required wire:model="nombre">
                                <input type="text" placeholder="Descripción" class="border p-3 w-100 my-2" required wire:model="descripcion">
                                <input type="text" placeholder="Características" class="border p-3 w-100 my-2" required wire:model="caracteristicas">
                                <input type="number" placeholder="Costo" class="border p-3 w-100 my-2" required wire:model="costo">
                                <input type="text" placeholder="Tiempo del servicio" class="border p-3 w-100 my-2" required wire:model="tiempo">
                                <button type="submit" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold"> Registrar </button>
                                <a href="{{ route('admin.servicios') }}" class="btn btn-info py-3 px-4 my-2 text-white border-0 rounded font-weight-bold ">Todos los servicios</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>