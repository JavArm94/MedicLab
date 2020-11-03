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
            $table->date('fechaNacimiento');
            $table->string('direccion',45);
            $table->string('correoElectronico',45);
            $table->bigInteger('numeroDocumento');
            $table->tinyInteger('estadoBaja');
            
            $table->timestamps('');

            $table->foreignId('idCargo');
            $table->foreignId('idLocalidad');
            $table->foreignId('idTipoDocumento');
            $table->foreignId('idRol');
            $table->foreignId('idGenero');
            

        });
    }

    /**
     * Reverse the migrationss.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
