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
            //Enfermedades cronicas//
            $table->boolean('hipertension')->nullable();
            $table->boolean('asma')->nullable();
            $table->boolean('epilepsia')->nullable();
            $table->boolean('ciatica')->nullable();
            $table->boolean('diabetes')->nullable();
            $table->boolean('lumbagia')->nullable();
            $table->boolean('arritmia')->nullable();
            /**Enfermedades Mentales */
            $table->boolean('ansiedad')->nullable();
            $table->boolean('depresion')->nullable();
            $table->boolean('depre_postparto')->nullable();
            $table->boolean('estres_cronico')->nullable();
            $table->boolean('estres_postraumatico')->nullable();
            /**ETS */
            $table->boolean('papiloma_humano')->nullable();
            $table->boolean('herpes')->nullable();
            $table->boolean('sifilis')->nullable();
            $table->boolean('gonorrea')->nullable();
            $table->boolean('sida')->nullable();
            $table->boolean('clamidia')->nullable();
            /**Condiciones Fisicas */
            $table->boolean('desmayos')->nullable();
            $table->boolean('mareos')->nullable();
            $table->boolean('perdida_conocimiento')->nullable();
            $table->boolean('hospitalizacion')->nullable();
            /**Hospitalizaciones */
            $table->string('causa_hospitalizacion')->nullable();
            $table->date('fecha_hospitalizacion')->nullable();
            /**cirugias */
            $table->boolean('cesarea')->nullable();
            $table->boolean('abortos')->nullable();
            $table->boolean('apendice')->nullable();
            $table->boolean('vesicula')->nullable();
            $table->boolean('otro')->nullable();
            $table->string('especifique_otro')->nullable();
            $table->date('fecha_cirugia')->nullable();
            $table->string('causa_cirugia')->nullable();

            /**Sintomas adicionales */
            $table->boolean('alergias')->nullable();
            $table->string('alergias_especificacion')->nullable();
            $table->boolean('cefaleas')->nullable();
            $table->boolean('vision_borrosa')->nullable();
            $table->boolean('cancer')->nullable();
            $table->boolean('ausencia_organos')->nullable();
            $table->boolean('embarazos')->nullable();
            $table->boolean('aborto')->nullable();
            $table->boolean('metodo_anticonceptivo')->nullable();
            $table->boolean('craneocefalico')->nullable();
            $table->boolean('cervicales')->nullable();

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
