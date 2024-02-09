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
            $table->boolean('ansiedad')->default(0);
            $table->boolean('anorexia')->default(0);
            $table->boolean('bulimia')->default(0);
            $table->boolean('obesidad')->default(0);
            $table->boolean('epilepsia')->default(0);
            $table->boolean('depresion')->default(0);
            $table->boolean('depresion_postparto')->default(0);
            $table->boolean('estres_cronico')->default(0);
            $table->boolean('estres_postraumatico')->default(0);
            $table->boolean('fobias')->default(0);
            $table->foreignId('expedientes_id')->constrained()->default(0);
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
