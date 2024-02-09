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
            $table->boolean('manchas_oscura_axilas')->default(0);
            $table->boolean('manchas_oscura_mejillas')->default(0);
            $table->boolean('manchas_oscura_entrepierna')->default(0);
            $table->boolean('manchas_rosada_rostro')->default(0);
            $table->boolean('manchas_blanca_boca')->default(0);
            $table->boolean('manchas_oscura_cuello')->default(0);
            $table->boolean('sintomas_cancer')->default(0);
            $table->boolean('acne')->default(0);
            $table->boolean('alergias')->default(0);
            $table->boolean('migraña')->default(0);
            $table->boolean('golpes_espalda')->default(0);
            $table->boolean('golpes_cabeza')->default(0);
            $table->string('medicamentos');
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
