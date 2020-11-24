{{-- {{ dd($medicos) }} --}}
{!! Form::model(request()->all(), ['route' => 'cortito', 'method' => 'GET', 'class' => 'form-inline']) !!}

{!! Form::label('Médico', 'Médico', ['class' => 'mr-sm-2']) !!}
{!! Form::select('idmedico', $medicos, null, ['class' => 'form-control']) !!}

    {!! Form::label('fecha_inicial', 'Desde (F. entrada):', ['class' => 'mr-sm-2']) !!}
    {!! Form::date('fecha_inicial', null, ['class' => 'form-control mr-sm-2']) !!}

    {!! Form::label('fecha_final', 'Hasta (F. entrada):', ['class' => 'mr-sm-2']) !!}
    {!! Form::date('fecha_final', null, ['class' => 'form-control mr-sm-2']) !!}

    <button type="submit" class="btn btn-primary mr-sm-2">
        <i class="fas fa-search"></i> Filtrar
    </button>
    <a href="{{ route('cortito') }}" class="btn btn-dark">
        <i class="fas fa-sync-alt"></i> Reiniciar
    </a>
{!! Form::close() !!}<br>