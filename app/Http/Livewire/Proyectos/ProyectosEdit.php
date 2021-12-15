<?php

namespace App\Http\Livewire\Proyectos;

use App\Models\Proyecto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProyectosEdit extends Component
{
    use WithFileUploads;
    public Proyecto $proyecto;
    public $foto;

    public function render()
    {
        return view('livewire.proyectos.proyectos-edit');
    }

    public function editar()
    {
        $this->validate();
        if($this->foto){
            if($this->proyecto->foto){
                Storage::disk("public")->delete("images/proyectos", $this->proyecto->foto);
            }
            $this->proyecto->foto = Storage::disk("public")->put("images/proyectos", $this->foto);
        }
        $this->proyecto->save();
        $this->emit("exito","proyecto modificado exitosamente!");
        return redirect(route("proyectos.index"));
    }

    public function rules()
    {
        return ProyectosRules::reglas();
    }
}
