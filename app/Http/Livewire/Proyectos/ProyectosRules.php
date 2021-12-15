<?php

namespace App\Http\Livewire\Proyectos;

class ProyectosRules
{

    public static function reglas()
    {
        return [
            "proyecto.nombre_proyecto" => "required|string",
            "proyecto.foto" => "nullable|image",
            "proyecto.fecha_inicio" => "required|date",
            "proyecto.fecha_final" => "required|date",
            "proyecto.progreso" => "required|integer",
            "proyecto.estado" => "required|string"
        ];
    }
}
