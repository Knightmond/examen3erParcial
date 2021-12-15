<?php

use App\Http\Livewire\Actividad\ActividadCreate;
use App\Http\Livewire\Actividad\ActividadDelete;
use App\Http\Livewire\Actividad\ActividadEdit;
use App\Http\Livewire\Actividad\ActividadIndex;
use App\Http\Livewire\Actividad\ActividadRead;
use App\Http\Livewire\Empleados\EmpleadosCreate;
use App\Http\Livewire\Empleados\EmpleadosDelete;
use App\Http\Livewire\Empleados\EmpleadosEdit;
use App\Http\Livewire\Empleados\EmpleadosIndex;
use App\Http\Livewire\Empleados\EmpleadosRead;
use App\Http\Livewire\Proyectos\ProyectosCreate;
use App\Http\Livewire\Proyectos\ProyectosDelete;
use App\Http\Livewire\Proyectos\ProyectosEdit;
use App\Http\Livewire\Proyectos\ProyectosIndex;
use App\Http\Livewire\Proyectos\ProyectosRead;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Login\Logout;
use Illuminate\Support\Facades\Route;

# Login
Route::get("/login", Login::class)->name("login");

Route::group(["middleware" => "auth"], function() {
    # Empleados
    Route::get('/empleados', EmpleadosIndex::class)->name("empleados.index");
    Route::get("/empleados/create", EmpleadosCreate::class)->name("empleados.create");
    Route::get("/empleados/{empleado}/edit", EmpleadosEdit::class)->name("empleados.edit");
    Route::get("/empleados/{empleado}/delete", EmpleadosDelete::class)->name("empleados.delete");
    Route::get("/empleados/{empleado}/read", EmpleadosRead::class)->name("empleados.read");

    # Proyectos
    Route::get('/proyectos', ProyectosIndex::class)->name("proyectos.index");
    Route::get("/proyectos/create", ProyectosCreate::class)->name("proyectos.create");
    Route::get("/proyectos/{proyecto}/edit", ProyectosEdit::class)->name("proyectos.edit");
    Route::get("/proyectos/{proyecto}/delete", ProyectosDelete::class)->name("proyectos.delete");
    Route::get("/proyectos/{proyecto}/read", ProyectosRead::class)->name("proyectos.read");

    # Actividades (me refería a las notificaciones de avance en el proyecto)
    Route::get("/actividades", ActividadIndex::class)->name("actividades.index");
    Route::get("/actividades/create", ActividadCreate::class)->name("actividades.create");
    Route::get("/actividades/{actividad}/edit", ActividadEdit::class)->name("actividades.edit");
    Route::get("/actividades/{actividad}/delete", ActividadDelete::class)->name("actividades.delete");
    Route::get("/actividades/{actividad}/read", ActividadRead::class)->name("actividades.read");

    #Logout
    Route::get("/logout", Logout::class)->name("login.logout");
});

