<?php

namespace App\Http\Livewire\Actividad;
class ActividadRules
{

    public static function reglas()
    {

        return
            [
                "actividad.tipo" => "required|string",
                "actividad.titulo" => "required|string",
                "actividad.id_proyecto" => "required|integer",
                "actividad.id_empleado" => "required|integer",
                "actividad.descripcion" => "required|string"
            ];
    }
}
