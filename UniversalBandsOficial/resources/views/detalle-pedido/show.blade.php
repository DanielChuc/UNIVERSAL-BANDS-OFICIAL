@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">DetallePedido {{ $detallepedido->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/detalle-pedido') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/detalle-pedido/' . $detallepedido->id . '/edit') }}" title="Edit DetallePedido"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('detallepedido' . '/' . $detallepedido->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete DetallePedido" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $detallepedido->id }}</td>
                                    </tr>
                                    <tr><th> EstadoPedido </th><td> {{ $detallepedido->estadoPedido }} </td></tr><tr><th> Descripcion </th><td> {{ $detallepedido->descripcion }} </td></tr><tr><th> Cantidad </th><td> {{ $detallepedido->cantidad }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
