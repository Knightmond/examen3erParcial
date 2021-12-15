<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EmpleadosEdit extends Component
{
    use WithFileUploads;
    public Empleado $empleado;
    public $password;
    public $confirmar_password;
    public $foto;

    public function render()
    {
        return view('livewire.empleados.empleados-edit');
    }

    public function editar()
    {
        $this->validate();
        if ($this->foto){
            if ($this->empleado->foto){
                Storage::disk("public")->delete("images/empleados", $this->empleado->foto);
            }
            $this->empleado->foto = Storage::disk("public")->put("images/empleados", $this->foto);
        }
        if ($this->password) {
            $this->empleado->password = Hash::make($this->password);
        }
        $this->empleado->save();
        $this->emit("exito","Empleado modificado exitosamente!");
        return redirect(route("empleados.index"));
    }

    public function rules()
    {
        return EmpleadosRules::reglas($this->empleado->id);
    }
}
