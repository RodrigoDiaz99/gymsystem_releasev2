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
            /**Condiciones Fisicas */
            $table->boolean('descanso')->nullable()->default(0);
            $table->boolean('hipermetropia')->nullable()->default(0);
            $table->boolean('miopia')->nullable()->default(0);
            $table->boolean('astigmatismo')->nullable()->default(0);
            $table->boolean('desmayos')->nullable()->default(0);
            $table->boolean('mareos')->nullable()->default(0);

            $table->boolean('hospitalizaciones')->nullable()->default(0);
            $table->boolean('fracturas')->nullable()->default(0);

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
