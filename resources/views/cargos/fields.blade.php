<!-- Nombrecargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreCargo', 'Nombrecargo:') !!}
    {!! Form::text('nombreCargo', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45,'autofocus']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cargos.index') }}" class="btn btn-default">Cancel</a>
</div>
