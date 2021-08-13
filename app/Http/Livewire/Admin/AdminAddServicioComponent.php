<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Servicio;

class AdminAddServicioComponent extends Component
{
    public $nombre,$descripcion,$caracteristicas,$costo,$tiempo;

    public function guardarServicio(){
        $servicio = new Servicio();
        $servicio->nombre = $this->nombre;
        $servicio->descripcion = $this->descripcion;
        $servicio->caracteristicas = $this->caracteristicas;
        $servicio->costo = $this->costo;
        $servicio->tiempo = $this->tiempo;
        $servicio->save();

        session()->flash('message','Servicio creado con éxito');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-servicio-component')->layout('layouts.base');
    }
}
