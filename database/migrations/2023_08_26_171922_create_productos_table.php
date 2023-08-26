<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_barras')->unique();
            $table->string('nombre_producto')->unique();
            $table->foreignId('proveedores_id')->nullable()->constrained();
            $table->foreignId('categoria_productos_id')->nullable()->constrained();
            $table->boolean('inventario')->default(false);
            $table->integer('cantidad_producto');
            $table->integer('alerta_minima')->nullable();
            $table->integer('alert_maxima')->nullable();
            $table->double('precio_venta')->nullable();
            $table->foreignId('creado_por')->constrained('users');
            $table->foreignId('productos_id')->constrained();
            $table->enum('estatus', ['Solicitado', 'Comprado', 'Empaquetado', 'En camino', 'Disponible'])->default('Solicitado');
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
        Schema::dropIfExists('productos');
    }
}