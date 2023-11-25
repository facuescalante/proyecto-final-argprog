@extends('layouts.app')

@section('template_title')
    {{ $infraccione->name ?? "{{ __('Ver') Infracciones" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Infracciones</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('infracciones.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $infraccione->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $infraccione->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Automotores Id:</strong>
                            {{ $infraccione->automotores_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
