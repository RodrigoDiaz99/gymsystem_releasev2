<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioMembresiasPagoMembresiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_membresias_pago_membresias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_membresias_id')->constrained();
            $table->foreignId('pago_membresias_id')->constrained();
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
        Schema::dropIfExists('usuario_membresias_pago_membresias');
    }
}
