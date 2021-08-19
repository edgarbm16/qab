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
                        <form wire:submit.prevent="addServicio">
                            <fieldset class="p-4">
                                <div>
                                    <input type="text" placeholder="Nombre" class="border p-3 w-100 my-2" required wire:model="nombre" wire:keyup="generateSlug">
                                    <!-- <img class="start_img" id="start_nom" src="{{ asset('assets/images/mic.gif') }}"> -->
                                </div>

                                <input type="text" placeholder="Servicio URL" class="border p-3 w-75 my-2" required wire:model="slug">

                                <div>
                                    <!-- <textarea id="input_des" placeholder="Descripción" class="border p-3 w-75 my-2" rows="4" cols="50"  required wire:model="descripcion"></textarea> -->
                                    <input type="text" placeholder="Descripción" class="border p-3 w-100 my-2" required wire:model="descripcion">
                                    <!-- <img class="start_img" id="start_des" src="{{ asset('assets/images/mic.gif') }}"> -->
                                </div>

                                <div>
                                    <!-- <textarea id="input_car" placeholder="Características" class="border p-3 w-75 my-2" rows="4" cols="50"  required wire:model="caracteristicas"></textarea> -->
                                    <input type="text" placeholder="Características" class="border p-3 w-100 my-2" required wire:model="caracteristicas">
                                    <!-- <img class="start_img" id="start_car" src="{{ asset('assets/images/mic.gif') }}"> -->
                                </div>

                                <div>
                                    <input type="number" placeholder="Costo" class="border p-3 w-100 my-2" required wire:model="costo">
                                    <!-- <img class="start_img" id="start_cos" src="{{ asset('assets/images/mic.gif') }}"> -->
                                </div>

                                <div>
                                    <input type="text" placeholder="Tiempo del servicio" class="border p-3 w-100 my-2" required wire:model="tiempo">
                                    <!-- <img class="start_img" id="start_tie" src="{{ asset('assets/images/mic.gif') }}"> -->
                                </div>

                                <div>
                                    <input type="file"  class="border p-3 w-75 my-2" required wire:model="img">
                                    @if($img)
                                        <img src="{{$img->temporaryUrl()}}" width="100">
                                    @endif
                                </div>
                                <button type="submit" class="d-block py-3 px-4 my-2 bg-primary text-white border-0 rounded font-weight-bold"> Registrar </button>
                                <a href="{{ route('admin.servicios') }}" class="btn btn-info py-3 px-4 my-2 text-white border-0 rounded font-weight-bold ">Todos los servicios</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>