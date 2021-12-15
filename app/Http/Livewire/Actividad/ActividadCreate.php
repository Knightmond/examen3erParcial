<?php

namespace App\Http\Livewire\Actividad;

use App\Models\Actividad;
use App\Models\Empleado;
use App\Models\Proyecto;
use Livewire\Component;

class ActividadCreate extends Component
{
    public Actividad $actividad;

    public function mount()
    {
        $this->actividad = new Actividad();
    }

    public function render()
    {
        $empleados = Empleado::all();
        $proyectos = Proyecto::all();
        return view('livewire.actividad.actividad-create', compact("empleados","proyectos"));
    }

    public function crear()
    {
        $this->validate();
        $this->actividad->save();
        $this->emit("exito","La actividad ha sido agregado exitosamente");
        return redirect(route("actividades.index"));
    }

    public function rules()
    {
        return ActividadRules::reglas();
    }
}
