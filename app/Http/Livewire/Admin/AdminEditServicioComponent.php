<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Servicio;
Use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminEditServicioComponent extends Component
{
    use WithFileUploads;
    public $nombre;
    public $slug;
    public $descripcion;
    public $caracteristicas;
    public $costo;
    public $tiempo; 
    public $img;
    public $newimage;
    public $servicio_id;

    public function mount($servicio_slug){
        $servicio = Servicio::where('slug',$servicio_slug)->first();
        $this->nombre = $servicio->nombre;
        $this->slug = $servicio->slug;
        $this->descripcion = $servicio->descripcion;
        $this->caracteristicas = $servicio->caracteristicas;
        $this->costo = $servicio->costo;
        $this->tiempo = $servicio->tiempo; 
        $this->img = $servicio->img;
        $this->newimage = $servicio->newimage;
        $this->servicio_id = $servicio->id;
    }

    public function generateSlug(){
        $this->slug = Str::slug($this->nombre,'-');
    }

    public function updateServicio()
    {
        $this->validate([
            'nombre' => 'required',
            'slug' => 'required',
            'descripcion' => 'required',
            'caracteristicas' => 'required',
            'costo' => 'required|numeric',
            'tiempo' => 'required',
            'img' => 'required|mimes:jpeg,png,jpg',
        ]);

        $servicio = Servicio::find($this->servicio_id);
        $servicio->nombre = $this->nombre;
        $servicio->slug = $this->slug;
        $servicio->descripcion = $this->descripcion;
        $servicio->caracteristicas = $this->caracteristicas;
        $servicio->costo = $this->costo;
        $servicio->tiempo = $this->tiempo;
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('servicios', $imageName);
            $servicio->newimage = $imageName;
        }

        $servicio->save();

        session()->flash('message','Servicio actualizado con éxito');
    }
    
    public function render()
    {
        return view('livewire.admin.admin-edit-servicio-component')->layout('layouts.base');
    }
}
