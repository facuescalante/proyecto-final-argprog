@extends('layouts.app')

@section('template_title')
    Automotores 
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Automotores') }} <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1JzoBY3q0eaKCts4Q7Sv3yc6LFCVlwCXd4Q&usqp=CAU') }}" width="60" height="40">
                            </span>

                             <div class="float-right">
                                <a href="{{ route('automotores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Marca</th>
										<th>Modelo</th>
										<th>Patente</th>
										<th>Tipo</th>
										<th>Titulares Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($automotores as $automotore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $automotore->marca }}</td>
											<td>{{ $automotore->modelo }}</td>
											<td>{{ $automotore->patente }}</td>
											<td>{{ $automotore->tipo }}</td>
											<td>{{ $automotore->titulare->apellido }} {{ $automotore->titulare->nombre }}</td>

                                            <td>
                                                <form action="{{ route('automotores.destroy',$automotore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('automotores.show',$automotore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('automotores.edit',$automotore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $automotores->links() !!}
            </div>
        </div>
    </div>
@endsection
