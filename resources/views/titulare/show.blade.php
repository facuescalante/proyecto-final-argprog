@extends('layouts.app')

@section('template_title')
    {{ $titulare->name ?? "{{ __('Ver') Titular" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Titular</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('titulares.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $titulare->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $titulare->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $titulare->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $titulare->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Nrolicencia:</strong>
                            {{ $titulare->nrolicencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
