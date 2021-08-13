<?php

namespace App\Http\Livewire\Admin;

use App\Models\Servicio;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServicioComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $servicios = Servicio::paginate(5);
        return view('livewire.admin.admin-servicio-component',['servicios'=>$servicios])->layout('layouts.base');
    }
}
