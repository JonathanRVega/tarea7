<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            
            $table->enum('tipoActividad', ['Tarea', 'Actividad', 'Prueba rapida', 'Parcial']);
            
            $table->date('fecha');
            
            $table->decimal('calificacion', 3, 1)->check('calificacion >= 0 and calificacion <= 10');
            
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
        Schema::dropIfExists('materias');
    }
}
