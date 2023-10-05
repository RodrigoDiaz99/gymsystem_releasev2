<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlPesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_pesos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_visita');
            $table->string('talla_ropa');
            $table->string('altura');
            $table->string('peso');
            $table->string('cuello');
            $table->string('busto');
            $table->string('cintura');
            $table->string('cadera');
            $table->string('brazo_der');
            $table->string('brazo_izq');
            $table->string('pierna_der');
            $table->string('pierna_izq');

            $table->string('observaciones');
            $table->string('alimentos_no_agradables');
            $table->string('alergia_alimentos');
            $table->foreignId('expedientes_id')->constrained();
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
        Schema::dropIfExists('control_pesos');
    }
}
