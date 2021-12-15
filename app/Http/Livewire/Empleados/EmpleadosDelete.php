<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EmpleadosDelete extends Component
{
    use WithFileUploads;
    public Empleado $empleado;
    public $foto;

    public function render()
    {
        return view('livewire.empleados.empleados-delete');
    }

    public function delete()
    {
        if ($this->empleado->foto)
        {
            Storage::disk("public")->delete("images/empleados",$this->foto);
        }
        $this->empleado->delete();
        $this->emit("exito","Empleado eliminado exitosamente");
        return redirect(route("empleados.index"));
    }
}
