<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfermedadesMentalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermedades_mentales', function (Blueprint $table) {
            $table->id();
            /**Enfermedades Mentales */
            $table->boolean('ansiedad')->nullable();
            $table->boolean('depresion')->nullable();
            $table->boolean('depre_postparto')->nullable();
            $table->boolean('estres_cronico')->nullable();
            $table->boolean('estres_postraumatico')->nullable();
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
        Schema::dropIfExists('enfermedades_mentales');
    }
}
