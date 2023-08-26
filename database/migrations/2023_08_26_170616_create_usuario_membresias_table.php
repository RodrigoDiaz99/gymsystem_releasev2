<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioMembresiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_membresias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained();
            $table->date('fecha_inicio');
            $table->foreignId('carritos_id')->nullable()->constrained();
            $table->date('fecha_expiracion')->nullable();
            $table->foreignId('tipo_membresias_id')->constrained();

            $table->boolean('estatus_membresia')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_membresias');
    }
}
