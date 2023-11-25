@extends('layouts.app')

@section('template_title')
    {{ $automotore->name ?? "{{ __('Show') Automotore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Automotor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('automotores.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $automotore->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $automotore->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Patente:</strong>
                            {{ $automotore->patente }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $automotore->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Titulares Id:</strong>
                            {{ $automotore->titulares_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
