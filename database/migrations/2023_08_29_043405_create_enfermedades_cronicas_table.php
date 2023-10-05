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
            $table->boolean('hipertension_arterial')->nullable()->default(0);
            $table->boolean('colesterol')->nullable()->default(0);
            $table->boolean('trigliceridos')->nullable()->default(0);
            $table->boolean('anemia')->nullable()->default(0);
            $table->boolean('bronquitis')->nullable()->default(0);
            $table->boolean('asma')->nullable()->default(0);
            $table->boolean('convulsiones')->nullable()->default(0);

            $table->boolean('nervio_ciatico')->nullable()->default(0);
            $table->boolean('diabetes')->nullable()->default(0);
            $table->boolean('lumbagia')->nullable()->default(0);
            $table->boolean('arritmia')->nullable()->default(0);
            $table->boolean('narcolepsia')->nullable()->default(0);
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
