<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ets', function (Blueprint $table) {
            $table->id();
            /**ETS */
            $table->boolean('papiloma_humano')->nullable();
            $table->boolean('herpes')->nullable();
            $table->boolean('sifilis')->nullable();
            $table->boolean('gonorrea')->nullable();
            $table->boolean('sida')->nullable();
            $table->boolean('clamidia')->nullable();
            $table->foreignId('expedientes_id')->constrained();
            $table->softDeletes();
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
        Schema::dropIfExists('ets');
    }
}
