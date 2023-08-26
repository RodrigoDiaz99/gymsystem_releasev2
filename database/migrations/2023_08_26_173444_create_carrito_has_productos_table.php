<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritoHasProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito_has_productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carritos_id')->constrained();
            $table->integer('productos_id');
            $table->integer('cantidad');
            $table->boolean('lMembresia');
            $table->boolean('lPedido');
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
        Schema::dropIfExists('carrito_has_productos');
    }
}
