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
            $table->string('tipo_dieta');
            $table->string('servicio_medico');
            $table->integer('numero_control');
            /**Condiciones Fisicas */
            $table->boolean('descanso')->default(0);
            $table->boolean('hipermetropia')->default(0);
            $table->boolean('miopia')->default(0);
            $table->boolean('astigmatismo')->default(0);
            $table->boolean('desmayos')->default(0);
            $table->boolean('mareos')->default(0);

            $table->boolean('hospitalizaciones')->default(0);
            $table->boolean('fracturas')->default(0);

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
