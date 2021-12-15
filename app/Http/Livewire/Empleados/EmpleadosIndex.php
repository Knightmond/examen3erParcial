<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;
use Livewire\WithPagination;

class EmpleadosIndex extends Component
{
    protected $paginationTheme = "bootstrap";
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {
        $empleados = ($this->cargado = true) ? Empleado::where("nombre", "LIKE", "%".$this->search."%")
            ->orwhere("apellido", "LIKE", "%".$this->search."%")
            ->orwhere("email", "LIKE", "%".$this->search."%")
            ->paginate(7) : [];
        return view('livewire.empleados.empleados-index', compact("empleados"));
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function cargando() {
        $this->cargado = true;
    }
}
