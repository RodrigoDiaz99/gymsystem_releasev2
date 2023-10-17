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
            $table->boolean('creatina')->default(0);
            $table->boolean('proteina')->default(0);
            $table->boolean('hmb')->default(0);
            $table->boolean('testrol')->default(0);
            $table->boolean('bnox')->nullable()->default(0);

            $table->boolean('betalanina')->default(0);
            $table->boolean('animal_pak')->default(0);
            $table->boolean('lcarnitina')->default(0);
            $table->boolean('cla')->default(0);
            $table->boolean('taurina')->default(0);

            $table->boolean('colageno')->default(0);
            $table->boolean('aminoacidos')->default(0);
            $table->boolean('bca')->default(0);
            $table->boolean('glutamina')->default(0);
            $table->boolean('leucina')->default(0);

            $table->boolean('itravil')->default(0);
            $table->boolean('redotex')->default(0);
            $table->boolean('acxion')->default(0);
            $table->boolean('te_divina')->default(0);
            $table->boolean('piñalim')->default(0);

            $table->boolean('herbalife')->default(0);
            $table->boolean('omnilife')->default(0);
            $table->boolean('cromasol')->default(0);
            $table->boolean('farmasi')->default(0);
            $table->boolean('otros')->default(0);
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
        Schema::dropIfExists('suplementos');
    }
}
