@extends('layouts.app')

@section('content')
<body style="background-image: url('../vehiculos.png'); background-position: 50% -45%; background-repeat: no-repeat">
    

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6" style="text-align: center">
            
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
                    <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnqJ_3xC8HY5R9EjcuQZxl2627bOfXyI1Z9w&usqp=CAU') }}" alt="Descripción de la imagen" style="border-radius: 4px">

                    <br>
                    <br>
                                          <h1> {{ __('Bienvenidos!') }} </h1>

                       
                </div>
             </div>            
        </div>
    </div>
</div>
</body>
@endsection
