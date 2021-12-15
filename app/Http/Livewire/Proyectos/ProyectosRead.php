<?php

namespace App\Http\Livewire\Proyectos;

use App\Models\Proyecto;
use Livewire\Component;

class ProyectosRead extends Component
{
    public Proyecto $proyecto;

    public function render()
    {
        return view('livewire.proyectos.proyectos-read');
    }
}
