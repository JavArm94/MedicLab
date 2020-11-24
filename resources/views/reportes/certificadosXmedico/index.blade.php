@extends('layouts.javi') 

@section('content')
    @method('GET')
    <section class="content-header">
        <h1 class="pull-left">Certificados emitidos por Médico  
        @isset($medico)    
            {{  $medico->nombres .',' . $medico->apellido }}</h1>
        @endisset
        <h1 class="pull-right">
         
        </h1>
    </section>
    <div>

    </div>
    <div class="content">
        <div class="clearfix">
          @include('reportes.certificadosXmedico.filtro')
        </div>

        @include('flash::message')

        <div class="clearfix">
            
        </div>
        <div class="box box-primary">
         <div class="box-body">
          <div class="table-responsive">
            <table class="table" id="certificados-table">
                <thead>
                    <tr>
                        <th>Titular</th>
                        <th>Fecha</th>
                        <th>Patología</th>
                        <th>Médico</th>
                        <th>Días de ausencia</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($certificados as $certificado)
                    <tr>
                        <td> {{ $certificado->usuario->nombreUsuario .' '. $certificado->usuario->apellido}}</td> 
                        <td> {{ $certificado->fechaCertificado }}</td>
                        <td> {{ $certificado->patologia->nombrePatologia }} </td> 
                        <td> {{ $certificado->medico->apellidoNombres }} </td> 
                        <td> {{ $certificado->diasDeAusencia }}</td>
                        <td> {{ $certificado->estadoCertificado }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
          </div>
         </div>
        </div>

        <div class="text-center">
            
        </div>
    </div>
@endsection

