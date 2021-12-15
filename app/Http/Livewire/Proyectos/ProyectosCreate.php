<?php

namespace App\Http\Livewire\Proyectos;

use App\Models\Proyecto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProyectosCreate extends Component
{
    use WithFileUploads;
    public Proyecto $proyecto;
    public $foto;

    public function mount()
    {
        $this->proyecto = new Proyecto();
    }

    public function render()
    {
        return view('livewire.proyectos.proyectos-create');
    }

    public function crear()
    {
        $this->validate();
        if ($this->foto) {
            $this->proyecto->foto = Storage::disk("public")->put("images/proyectos", $this->foto);
        }
        $this->proyecto->save();
        $this->emit("exito","Proyecto creado exitosamente!");
        return redirect(route("proyectos.index"));
    }

    public function rules()
    {
        return ProyectosRules::reglas();
    }
}
