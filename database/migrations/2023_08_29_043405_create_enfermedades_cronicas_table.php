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
            $table->boolean('hipertension_arterial')->default(0);
            $table->boolean('colesterol')->default(0);
            $table->boolean('trigliceridos')->default(0);
            $table->boolean('anemia')->default(0);
            $table->boolean('bronquitis')->default(0);
            $table->boolean('asma')->default(0);
            $table->boolean('convulsiones')->default(0);

            $table->boolean('nervio_ciatico')->default(0);
            $table->boolean('diabetes')->default(0);
            $table->boolean('lumbagia')->default(0);
            $table->boolean('arritmia')->default(0);
            $table->boolean('narcolepsia')->default(0);
            $table->foreignId('expedientes_id')->constrained()->default(0);
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
