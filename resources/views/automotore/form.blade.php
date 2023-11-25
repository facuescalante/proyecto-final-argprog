<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $automotore->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $automotore->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('patente') }}
            {{ Form::text('patente', $automotore->patente, ['class' => 'form-control' . ($errors->has('patente') ? ' is-invalid' : ''), 'placeholder' => 'Patente']) }}
            {!! $errors->first('patente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $automotore->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titulares_id') }}
            {{ Form::select('titulares_id',$titulares, $automotore->titulares_id, ['class' => 'form-control' . ($errors->has('titulares_id') ? ' is-invalid' : ''), 'placeholder' => 'Titulares Id']) }}
            {!! $errors->first('titulares_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
        <a class="btn btn-primary" href="{{ route('automotores.index') }}"> {{ __('Volver') }}</a>
    </div>
</div>