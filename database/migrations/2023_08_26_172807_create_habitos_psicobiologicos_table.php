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
            $table->string('horas_descanso');
            $table->string('micciones_dia');
            $table->string('micciones_noche');
            $table->string('evacuaciones');
            $table->boolean('tabaco');
            $table->boolean('alcohol');

            $table->boolean('marihuana')->nullable();
            $table->boolean('opiaceos')->nullable();
            $table->boolean('cocaina')->nullable();
            $table->boolean('heroina')->nullable();
            $table->boolean('pastillas')->nullable();
            $table->boolean('crack')->nullable();
            $table->boolean('resistol')->nullable();
            $table->boolean('gasolina')->nullable();
            $table->boolean('thiner')->nullable();
            $table->boolean('cristal')->nullable();
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
