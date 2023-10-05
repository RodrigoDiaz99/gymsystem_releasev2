<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuplementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suplementos', function (Blueprint $table) {
            $table->id();
            $table->boolean('creatina')->nullable()->default(0);
            $table->boolean('proteina')->nullable()->default(0);
            $table->boolean('hmb')->nullable()->default(0);
            $table->boolean('testrol')->nullable()->default(0);
            $table->boolean('bnox')->nullable()->default(0);

            $table->boolean('betalanina')->nullable()->default(0);
            $table->boolean('animal_pak')->nullable()->default(0);
            $table->boolean('lcarnitina')->nullable()->default(0);
            $table->boolean('cla')->nullable()->default(0);
            $table->boolean('taurina')->nullable()->default(0);

            $table->boolean('colageno')->nullable()->default(0);
            $table->boolean('aminoacidos')->nullable()->default(0);
            $table->boolean('bca')->nullable()->default(0);
            $table->boolean('glutamina')->nullable()->default(0);
            $table->boolean('leucina')->nullable()->default(0);

            $table->boolean('itravil')->nullable()->default(0);
            $table->boolean('redotex')->nullable()->default(0);
            $table->boolean('acxion')->nullable()->default(0);
            $table->boolean('te_divina')->nullable()->default(0);
            $table->boolean('piñalim')->nullable()->default(0);

            $table->boolean('herbalife')->nullable()->default(0);
            $table->boolean('omnilife')->nullable()->default(0);
            $table->boolean('cromasol')->nullable()->default(0);
            $table->boolean('farmasi')->nullable()->default(0);
            $table->boolean('otros')->nullable()->default(0);
            $table->foreignId('expedientes_id')->constrained();
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
        Schema::dropIfExists('suplementos');
    }
}
