@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Evento {{ $evento->id }}

                        <img src="{{ url('imagenes/UniversalBandsOficial - copia/'.(
                            isset($evento->imagenEvento) ? $evento->imagenEvento : 'No_image.png'
                        ))}}"
                        height="80px">


                    </div>
                    <div class="card-body">

                        <a href="{{ url('/evento') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/evento/' . $evento->id . '/edit') }}" title="Edit Evento"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('evento' . '/' . $evento->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Evento" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $evento->id }}</td>
                                    </tr>
                                    <tr><th> Nombre del Evento </th><td> {{ $evento->nombreEvento }} </td></tr><tr><th> Direccion </th><td> {{ $evento->direccion }} </td></tr><tr><th> Descripcion </th><td> {{ $evento->descripcion }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
