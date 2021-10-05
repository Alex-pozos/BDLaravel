<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->id();

            // Aqui creamos los campos que se van a pedir al usuario y que se van a mandar a la DB
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('Nombre');
            $table->text('Sexo');
            $table->date('Fecha_Nacimiento');
            $table->string('Correo')->unique();

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
        Schema::dropIfExists('datos_personales');
    }
}
