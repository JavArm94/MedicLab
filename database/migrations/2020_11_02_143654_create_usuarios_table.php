<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id');
            $table->integer('legajo');
            $table->string('apellido',45);
            $table->string('nombreUsuario',30);
            $table->string('contrasenaUsuario',45);
            $table->date('fechaNacimineto');
            $table->string('direccion',45);
            $table->string('correoElectronico',45);
            $table->bigInteger('numeroDocumento');
            $table->tinyInteger('estadoBaja');
            $table->timestamps('');
            $table->foreignId('cargo_id');
            $table->foreignId('localidad_id');
            $table->foreignId('tipoDocumento_id');
            $table->foreignId('tipoUsuario_id');
            $table->foreignId('rol_id');
            $table->foreignId('genero_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
