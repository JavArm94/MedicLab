<!-- Nombrelocalidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreLocalidad', 'Nombre de localidad:') !!}
    {!! Form::text('nombreLocalidad', null, ['class' => 'form-control','maxlength' => 255,'autofocus']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Grabar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('localidades.index') }}" class="btn btn-default">Cancelar</a>
</div>
