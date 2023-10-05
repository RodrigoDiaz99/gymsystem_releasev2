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
            $table->boolean('ansiedad')->nullable()->default(0);
            $table->boolean('anorexia')->nullable()->default(0);
            $table->boolean('bulimia')->nullable()->default(0);
            $table->boolean('obesidad')->nullable()->default(0);
            $table->boolean('epilepsia')->nullable()->default(0);
            $table->boolean('depresion')->nullable()->default(0);
            $table->boolean('depresion_postparto')->nullable()->default(0);
            $table->boolean('estres_cronico')->nullable()->default(0);
            $table->boolean('estres_postraumatico')->nullable()->default(0);
            $table->boolean('fobias')->nullable()->default(0);
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
