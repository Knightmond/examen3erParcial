<?php

namespace App\Http\Livewire\Proyectos;

use App\Models\Proyecto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProyectosDelete extends Component
{
    use WithFileUploads;
    public Proyecto $proyecto;

    public function render()
    {
        return view('livewire.proyectos.proyectos-delete');
    }

    public function delete()
    {
        if($this->proyecto->foto){
            Storage::disk("public")->delete("images/proyectos", $this->proyecto->foto);
        }
        $this->proyecto->delete();
        $this->emit("exito","Proyecto eliminado exitosamente!");
        return redirect(route("proyectos.index"));
    }
}
