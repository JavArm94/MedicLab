<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->id('id');
            $table->integer('diasDeAusencia');
            $table->string('lugar',45);
            $table->bigInteger('numeroComprobante');
            $table->date('fechaVencimiento');
            $table->date('fechaCertificado');
            $table->binary('imagen')->nullable();
            $table->enum('estadoCerficado',['Pendiente','Justificado','Injustificado','Vencido','Finalizado']);

            $table->timestamps();

            $table->foreignId('idUsuarioCertificado');
            $table->foreignId('idPatologia');
            $table->foreignId('idMedico');
            $table->foreignId('idTipoCertificado');
            $table->foreignId('idFamiliar')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificados');
    }
}
