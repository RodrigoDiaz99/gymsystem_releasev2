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
            $table->boolean('manchas_oscura_axilas')->nullable()->default(0);
            $table->boolean('manchas_oscura_mejillas')->nullable()->default(0);
            $table->boolean('manchas_oscura_entrepierna')->nullable()->default(0);
            $table->boolean('manchas_rosada_rostro')->nullable()->default(0);
            $table->boolean('manchas_blanca_boca')->nullable()->default(0);
            $table->boolean('manchas_oscura_cuello')->nullable()->default(0);
            $table->boolean('sintomas_cancer')->nullable()->default(0);
            $table->boolean('acne')->nullable()->default(0);
            $table->boolean('alergias')->nullable()->default(0);
            $table->boolean('migraña')->nullable()->default(0);
            $table->boolean('golpes_espalda')->nullable()->default(0);
            $table->boolean('golpes_cabeza')->nullable()->default(0);
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
