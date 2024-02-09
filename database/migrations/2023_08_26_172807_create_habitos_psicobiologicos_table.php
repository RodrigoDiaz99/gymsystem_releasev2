<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitosPsicobiologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitos_psicobiologicos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_comidas');
            $table->string('ayunos');
            $table->integer('horas_ayuno')->nullable();
            $table->string('sueño');
            $table->string('micciones_dia');
            $table->string('micciones_noche');
            $table->string('evacuaciones');
            $table->string('tabaco')->nullable();
            $table->string('alcohol')->nullable();


           $table->foreignId('expedientes_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitos_psicobiologicos');
    }
}
