<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('carritos_id')->constrained();
            $table->foreignId('corte_cajas_id')->constrained();
            $table->integer('cantidad');
            $table->double('precio_total');
            $table->string("vendedor");
            $table->double('cantidad_pagada')->nullable();
            $table->double('cambio')->nullable();
            $table->string('estatus');
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
        Schema::dropIfExists('vouchers');
    }
}
