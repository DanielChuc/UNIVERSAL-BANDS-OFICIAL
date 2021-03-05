@extends('adminlte::page')
@section('content')
@section('title', 'Lista de Entradas')

    <h1 class="text-center">Lista de Entradas</h1>
    {{-- BOTON QUE MANDA A LA VISTA DE CREACION DE PRODUCTOS --}}
    {{-- <a class="btn btn-success" href="{{ route('products.create') }}">Crear</a>
    Con empty verificamos que exista o contenga datos el array $products  --}}
    @empty($entradas)
        <div class="alert alert-warning">
            La lista de Entradas Vacia
        </div>
    @else

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Cliente</th>
                            <th>Evento</th>
                            <th>Codigo De Entrada</th>
                            <th>Fecha y Hora de Entrada</th>

                        </tr>
                    </thead>
                    <thead>
                        <body>
                            {{-- @dump($query) --}}
                            @foreach ($query as $query)
                                {{-- @foreach ($querydos as $querydos) --}}

                            <tr>
                            <td>{{ $query->id }}</td>
                            <td>{{ $query->nombre }}</td>
                            <td>{{ $query->nombreEvento }}</td>
                            <td>{{ $query->codigoDeEntrada }}</td>
                            <td>{{ $query->fechaHoraEntrada }}</td>
                                {{-- @endforeach --}}
                            @endforeach
                        </body>
                    </thead>
                </table>
            </div>
    @endempty
@endsection
