<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCirugiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cirugias', function (Blueprint $table) {
            $table->id();
             /**cirugias */
             $table->boolean('cesarea')->nullable()->default(0);
             $table->date('fecha_cesarea')->nullable();
             $table->boolean('extirpacion_matriz')->nullable()->default(0);
             $table->date('fecha_extirpacion')->nullable();
             $table->boolean('embarazo')->nullable()->default(0);
             $table->date('fecha_embarazo')->nullable();
             $table->integer('numero_embarazos')->nullable();
             $table->boolean('abortos')->nullable()->default(0);
             $table->date('fecha_aborto')->nullable();
             $table->boolean('extirpacion_apendice')->nullable()->default(0);
             $table->date('fecha_extirpacion_apendice')->nullable();

             $table->boolean('extirpacion_vesicula')->nullable()->default(0);
             $table->date('fecha_extirpacion_vesicula')->nullable();

             $table->boolean('hernias')->nullable()->default(0);
             $table->date('fecha_hernias')->nullable();
             $table->boolean('extirpacion_senos')->nullable()->default(0);
             $table->date('fecha_extirpacion_senos')->nullable();
             $table->boolean('piedras_riñon')->nullable()->default(0);
             $table->date('fecha_piedras_riñon')->nullable();
             $table->boolean('otro')->nullable()->default(0);

             $table->string('explicacion_otro')->nullable();
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
        Schema::dropIfExists('cirugias');
    }
}
