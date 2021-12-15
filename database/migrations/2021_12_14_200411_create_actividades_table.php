<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->string("tipo");
            $table->string("titulo");
            $table->unsignedBigInteger("id_proyecto");
            $table->unsignedBigInteger("id_empleado");
            $table->string("descripcion");
            $table->timestamps();

            $table->foreign("id_empleado")->references("id")->on("empleados");
            $table->foreign("id_proyecto")->references("id")->on("proyectos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividads');
    }
}
