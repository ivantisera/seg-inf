<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistertable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->bigIncrements('id_registro');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->date('fecha_nacimiento');
            $table->string('calle', 100);
            $table->string('numero', 5);
            $table->string('ciudad', 100);
            $table->string('provincia', 100);
            $table->string('pais', 100);
            $table->string('dni', 50);
            $table->string('nacionalidad', 100);
            $table->string('email', 100);
            $table->string('telefono', 100);
            $table->text('info_evento');
            $table->text('comentarios');
            $table->boolean('equipo_rojo');
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
        Schema::dropIfExists('registertable');
    }
}
