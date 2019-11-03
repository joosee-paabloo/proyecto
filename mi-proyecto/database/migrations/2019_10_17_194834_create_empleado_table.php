<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('cui',40);
            $table->string('nombre',40);
            $table->string('apellido',40);
            $table->string('email',40);
            $table->string('direccion',60);
            $table->string('telefono_casa',20);
            $table->string('telefono_movil',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
}
