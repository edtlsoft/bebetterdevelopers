<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesionales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->string('cedula', 20);
            $table->string('fecha_nacimiento', 10);
            $table->string('direccion', 150);
            $table->string('telefono', 20);
            $table->enum('sexo', ['M', 'F']);
            $table->foreignId('profesion_id')->constrained('profesiones');
            $table->foreignId('municipio_id')->constrained('municipios');
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
        Schema::dropIfExists('profesionales');
    }
}
