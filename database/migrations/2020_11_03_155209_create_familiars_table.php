<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiars', function (Blueprint $table) {
            $table->id('id');
            $table->string('apellido',45);
            $table->string('nombres',45);
            $table->date('fechaNacimiento');
                        
            $table->timestamps();

            $table->foreignId('idUsuario');
            $table->foreignId('idParentesco');
            $table->foreignId('idGenero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiars');
    }
}
