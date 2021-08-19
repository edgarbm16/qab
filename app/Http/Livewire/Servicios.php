<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Servicio;

class Servicios extends Component
{
    public $servicios, $nombre,$descripcion,$caracteristicas,$costo,$tiempo,$id_servicio;
    public $modal = false;

    public function render()
    {
        $this->servicios = Servicio::all();
        return view('livewire.servicios');
    }

    public function crear(){
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal(){
        $this->modal=true;
    }

    public function cerrarModal(){
        $this->modal=false;
    }

    public function limpiarCampos(){
        $this->nombre='';
        $this->descripcion='';
        $this->caracteristicas='';
        $this->costo='';
        $this->tiempo='';
        $this->id_servicio='';
    }

    public function editar($id){
        $servicio=Servicio::findOrFail($id);
        $this->id_servicio=$id;
        $this->nombre=$servicio->nombre;
        $this->descripcion=$servicio->descripcion;
        $this->caracteristicas=$servicio->caracteristicas;
        $this->costo=$servicio->costo;
        $this->tiempo=$servicio->tiempo;
        $this->abrirModal();
    }

    public function borrar($id){
        Servicio::find($id)->delete();
        session()->flash('message','Registro eliminado con éxito');
    }

    public function guardar()
    {
        Servicio::updateOrCreate(['id'=>$this->id_servicio],
            [
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
                'caracteristicas' => $this->caracteristicas,
                'costo' => $this->costo,
                'tiempo' => $this->tiempo
            ]);
        
        session()->flash('message',
        $this->id_servicio ? 'Actualización exitosa' : 'Servicio creado con éxito');
        

        $this->cerrarModal();
        $this->limpiarCampos();
    }
}