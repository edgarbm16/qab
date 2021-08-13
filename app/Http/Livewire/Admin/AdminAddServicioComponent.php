<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Servicio;
use Carbon\Carbon;
Use Livewire\WithFileUploads;

class AdminAddServicioComponent extends Component
{
    use WithFileUploads;
    public $nombre,$descripcion,$caracteristicas,$costo,$tiempo,$img;

    public function addServicio(){
        $servicio = new Servicio();
        $servicio->nombre = $this->nombre;
        $servicio->descripcion = $this->descripcion;
        $servicio->caracteristicas = $this->caracteristicas;
        $servicio->costo = $this->costo;
        $servicio->tiempo = $this->tiempo;
        $imageName = Carbon::now()->timestamp . '.' . $this->img->extension();
        $this->img->storeAs('servicios',$imageName);
        $servicio->img = $imageName;
        $servicio->save();

        session()->flash('message','Servicio creado con éxito');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-servicio-component')->layout('layouts.base');
    }
}
