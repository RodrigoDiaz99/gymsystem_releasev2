<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('usuario')->nullable()->unique();
            $table->string('codigo_usuario')->nullable()->unique();
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->string('telefono_contacto')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('huella_digital')->nullable();
            $table->string('foto_perfil')->default('img/profile.png')->nullable()->comment('Estos datos se necesitan obligatorios al momento de crear el expediente');
            $table->string('ocupacion')->nullable()->comment('Estos datos se necesitan obligatorios al momento de crear el expediente');
            $table->string('edad')->nullable()->comment('Estos datos se necesitan obligatorios al momento de crear el expediente');
            $table->date('fecha_nacimiento')->nullable()->comment('Estos datos se necesitan obligatorios al momento de crear el expediente');
            $table->boolean('expediente')->default(0);
            $table->boolean('cliente')->nullable();
            $table->boolean('empleado')->nullable();
            $table->foreignId('roles_id')->nullable()->references('id')->on('roles');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
