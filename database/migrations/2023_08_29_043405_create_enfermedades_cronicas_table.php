<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfermedadesCronicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermedades_cronicas', function (Blueprint $table) {
            $table->id();
            $table->boolean('hipertension')->nullable();
            $table->boolean('asma')->nullable();
            $table->boolean('epilepsia')->nullable();
            $table->boolean('ciatica')->nullable();
            $table->boolean('diabetes')->nullable();
            $table->boolean('lumbagia')->nullable();
            $table->boolean('arritmia')->nullable();
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
        Schema::dropIfExists('enfermedades_cronicas');
    }
}
