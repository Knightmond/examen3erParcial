<?php

namespace App\Http\Livewire\Empleados;

class EmpleadosRules
{

    public static function reglas($id = null)
    {
        $valPassword = ($id) ? "nullable|min:8" : "required|min:8";

        return
            [
                'empleado.nombre' => 'required|string',
                'empleado.apellido' => 'required|string',
                'empleado.email' => 'required|email|unique:usuarios,email,'.$id,
                'empleado.rol' => 'required|string',
                'password' => $valPassword,
                'confirmar_password' => 'same:password',
                'foto' => 'nullable|image'
            ];
    }
}
