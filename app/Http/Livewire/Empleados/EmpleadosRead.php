<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class EmpleadosRead extends Component
{
    public Empleado $empleado;
    public function render()
    {
        return view('livewire.empleados.empleados-read');
    }
}
