@extends('layouts.app')

@section('template_title')
    Titulare
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="font-weight: bold; display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <img src="{{ asset('https://static.vecteezy.com/system/resources/previews/010/154/511/non_2x/people-icon-sign-symbol-design-free-png.png') }}" width="40" height="30" style="margin-right: 6px">  {{ __('Titulares') }} 
                            </span>

                             <div class="float-right">
                                <a href="{{ route('titulares.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Dni</th>
										<th>Edad</th>
										<th>Nrolicencia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($titulares as $titulare)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $titulare->nombre }}</td>
											<td>{{ $titulare->apellido }}</td>
											<td>{{ $titulare->dni }}</td>
											<td>{{ $titulare->edad }}</td>
											<td>{{ $titulare->nrolicencia }}</td>

                                            <td>
                                                <form action="{{ route('titulares.destroy',$titulare->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('titulares.show',$titulare->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('titulares.edit',$titulare->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $titulares->links() !!}
            </div>
        </div>
    </div>
    
@endsection
