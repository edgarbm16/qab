<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Servicio;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class AdminAddServicioComponent extends Component
{
    use WithFileUploads;
    public $nombre;
    public $slug;
    public $descripcion;
    public $caracteristicas;
    public $costo;
    public $tiempo; 
    public $img;

    public function generateSlug(){
        $this->slug = Str::slug($this->nombre,'-');
    }

    public function addServicio(){

        $this->validate([
            'nombre' => 'required',
            'slug' => 'required',
            'descripcion' => 'required',
            'caracteristicas' => 'required',
            'costo' => 'required|numeric',
            'tiempo' => 'required',
            'img' => 'required|mimes:jpeg,png,jpg',
        ]);


        $servicio = new Servicio();
        $servicio->nombre = $this->nombre;
        $servicio->slug = $this->slug;
        $servicio->descripcion = $this->descripcion;
        $servicio->caracteristicas = $this->caracteristicas;
        $servicio->costo = $this->costo;
        $servicio->tiempo = $this->tiempo;
        $imageName = Carbon::now()->timestamp. '.' .$this->img->extension();
        $this->img->storeAs('servicios', $imageName);
        $servicio->img = $imageName;

        $servicio->save();

        session()->flash('message','Servicio creado con éxito');
    }


    public function render()
    {
        return view('livewire.admin.admin-add-servicio-component')->layout('layouts.base');
    }
}
