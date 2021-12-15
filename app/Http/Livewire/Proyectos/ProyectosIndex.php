<?php

namespace App\Http\Livewire\Proyectos;

use App\Models\Proyecto;
use Livewire\Component;
use Livewire\WithPagination;

class ProyectosIndex extends Component
{
    protected $paginationTheme = "bootstrap";
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {
        $proyectos = ($this->cargado == true) ? Proyecto::where("nombre_proyecto", "LIKE", "%".$this->search."%")
        ->orwhere("progreso", "LIKE", "%".$this->search."%")
        ->orwhere("estado", "LIKE", "%".$this->search."%")
        ->paginate(7) : [];
        return view('livewire.proyectos.proyectos-index', compact("proyectos"));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function cargando()
    {
        $this->cargado = true;
    }
}
