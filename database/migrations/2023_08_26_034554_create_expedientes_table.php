<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_interview')->nullable();

            /**Condiciones Fisicas */
            $table->boolean('desmayos')->nullable();
            $table->boolean('mareos')->nullable();
            $table->boolean('perdida_conocimiento')->nullable();
            $table->boolean('hospitalizacion')->nullable();
            /**Hospitalizaciones */
            $table->string('causa_hospitalizacion')->nullable();
            $table->date('fecha_hospitalizacion')->nullable();
            /**Medicamentos */
            $table->string('medicamentos')->nullable();
            $table->string('numero_control')->nullable();
            /**foraneas */
            $table->foreignId('users_id')->constrained();
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
        Schema::dropIfExists('expedientes');
    }
}
