<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EmpleadosCreate extends Component
{
    use WithFileUploads;
    public Empleado $empleado;
    public $foto;
    public $password;
    public $confirmar_password;

    public function mount()
    {
        $this->empleado = new Empleado();
    }

    public function render()
    {
        return view('livewire.empleados.empleados-create');
    }

    public function crear()
    {
        $this->validate();
        $this->empleado->password = Hash::make($this->password);
        if ($this->foto != null) {
            $this->empleado->foto = Storage::disk("public")->put("images/empleados", $this->foto);
        }
        $this->empleado->save();
        $this->emit("exito","El empleado ha sido agregado exitosamente");
        return redirect(route("empleados.index"));
    }

    public function rules()
    {
        return EmpleadosRules::reglas();
    }
}
