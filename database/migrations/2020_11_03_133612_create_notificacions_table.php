<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacions', function (Blueprint $table) {
            $table->id('id');
            $table->string('informacion',45);
            $table->string('tipoNotificacion',25);
            $table->date('fecha');
            $table->time('hora');
            $table->timestamp('fechaNotificacion');
            
            $table->timestamps();

            $table->foreignId('idTipoUsuarioDestinatario');
            $table->foreignId('idUsuarioDestinatario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificacions');
    }
}
