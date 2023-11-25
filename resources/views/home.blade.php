@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Registro Automotor') }}</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        <br>
                        <br>
                        
                    @endif
                    <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnqJ_3xC8HY5R9EjcuQZxl2627bOfXyI1Z9w&usqp=CAU') }}" alt="Descripción de la imagen">

                    <br>
                    <br>
                                          <h1> {{ __('Bienvenidos!') }} </h1>

                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
