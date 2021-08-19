<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Servicio;

class HomeComponent extends Component
{
    public function render()
    {
        $lservicio =  Servicio::all();
        return view('livewire.home-component',['lservicio'=>$lservicio])->layout('layouts.base');
    }
}
