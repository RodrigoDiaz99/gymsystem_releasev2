<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->foreignId('productos_id')->constrained();
            $table->foreignId('pedidos_id')->constrained();
            $table->boolean('lActivo');
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
        Schema::dropIfExists('productos_pedidos');
    }
}
