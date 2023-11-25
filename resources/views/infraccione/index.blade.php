@extends('layouts.app')

@section('template_title')
    Infracciones
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Infracciones') }}  <img src="{{ asset('https://cdn-icons-png.flaticon.com/512/9644/9644323.png') }}" width="50" height="50">
                            </span>

                             <div class="float-right">
                                <a href="{{ route('infracciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva') }}
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
                                        
										<th>Fecha</th>
										<th>Descripcion</th>
										<th>Automotores Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($infracciones as $infraccione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $infraccione->fecha }}</td>
											<td>{{ $infraccione->descripcion }}</td>
											<td>{{ $infraccione->automotore->marca }} {{ $infraccione->automotore->modelo }} . patente: {{ $infraccione->automotore->patente }}  .   titular : {{ $infraccione->automotore->titulare->apellido }}  {{ $infraccione->automotore->titulare->nombre }} </td>

                                            <td>
                                                <form action="{{ route('infracciones.destroy',$infraccione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('infracciones.show',$infraccione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('infracciones.edit',$infraccione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $infracciones->links() !!}
            </div>
        </div>
    </div>
@endsection
