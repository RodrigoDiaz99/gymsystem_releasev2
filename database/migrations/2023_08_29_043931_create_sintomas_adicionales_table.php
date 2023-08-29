<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSintomasAdicionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sintomas_adicionales', function (Blueprint $table) {
            $table->id();

            /**Sintomas adicionales */
            $table->boolean('alergias')->nullable();
            $table->string('alergias_especificacion')->nullable();
            $table->boolean('cefaleas')->nullable();
            $table->boolean('vision_borrosa')->nullable();
            $table->boolean('cancer')->nullable();
            $table->boolean('ausencia_organos')->nullable();
            $table->boolean('embarazos')->nullable();
            $table->boolean('aborto')->nullable();
            $table->boolean('metodo_anticonceptivo')->nullable();
            $table->boolean('craneocefalico')->nullable();
            $table->boolean('cervicales')->nullable();
            $table->foreignId('expedientes_id')->constrained();
            $table->softDeletes();
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
        Schema::dropIfExists('sintomas_adicionales');
    }
}
