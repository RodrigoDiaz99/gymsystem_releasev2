<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasPausadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas_pausadas', function (Blueprint $table) {
            $table->id();
            $table->integer('productos_id');
            $table->integer('cantidad');
            $table->boolean('lMembresia');
            $table->boolean('lPedido');
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
        Schema::dropIfExists('ventas_pausadas');
    }
}
