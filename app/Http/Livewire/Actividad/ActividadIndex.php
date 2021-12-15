<?php

namespace App\Http\Livewire\Actividad;

use App\Models\Actividad;
use Livewire\Component;
use Livewire\WithPagination;

class ActividadIndex extends Component
{
    protected $paginationTheme = "bootstrap";
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {
        $actividades = ($this->cargado == true) ? Actividad::join("empleados","actividads.id_empleado","=","empleados.id")
        ->join("proyectos","actividads.id_proyecto","=","proyectos.id")
        ->select(
            "actividads.*",
            "empleados.nombre as nombre_responsable",
            "proyectos.nombre_proyecto as proyecto_actividad"
        )
        ->paginate(7): [];
        return view('livewire.actividad.actividad-index', compact("actividades"));
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function cargando() {
        $this->cargado = true;
    }
}
