<div class="form-group {{ $errors->has('coordenadas') ? 'has-error' : ''}}">
    {!! Form::label('coordenadas', 'coordenadas', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('coordenadas', null, ['class' => 'form-control']) !!}
    {!! $errors->first('coordenadas', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label class="col-md-4 control-label" for="direccion">Direccion</label>
    <div class="col-md-6">
        <input type="text" name="direccion" class="form-control">
        {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Telefono') ? 'has-error' : ''}}">
    {!! Form::label('telefono', 'Telefono', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<input name="idempresa" hidden value="{{$empresa->id}}">

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
