<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditoriaCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditoria_certificados', function (Blueprint $table) {
            $table->id('id');
            $table->date('fechaModificacion');
            $table->string('tipoModificacion',1);
            $table->integer('diasDeAusencia');
            $table->bigInteger('numeroComprobante');
            $table->date('fechaVencimiento');
            $table->date('fechaCertificado');
            $table->binary('imagen')->nullable();
            $table->enum('estadoCerficado',['Pendiente','Justificado','Injustificado','Vencido','Finalizado']);

            $table->timestamps();

            $table->foreignId('idUsuarioCertificado');
            $table->foreignId('idUsuarioQueModifica');
            $table->foreignId('idPatologia');
            $table->foreignId('idMedico');
            $table->foreignId('idTipoCertificado');
            $table->foreignId('idFamiliar')->nullable(); 
            $table->foreignId('idCertificado');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auditoria_certificados');
    }
}
