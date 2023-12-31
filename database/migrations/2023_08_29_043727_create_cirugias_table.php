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
             $table->boolean('cesarea')->nullable();
             $table->boolean('abortos')->nullable();
             $table->boolean('apendice')->nullable();
             $table->boolean('vesicula')->nullable();
             $table->boolean('otro')->nullable();
             $table->string('especifique_otro')->nullable();
             $table->date('fecha_cirugia')->nullable();
             $table->string('causa_cirugia')->nullable();
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
