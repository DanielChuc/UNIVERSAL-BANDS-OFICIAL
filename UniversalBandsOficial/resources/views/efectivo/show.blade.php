@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Efectivo {{ $efectivo->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/efectivo') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/efectivo/' . $efectivo->id . '/edit') }}" title="Edit Efectivo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('efectivo' . '/' . $efectivo->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Efectivo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $efectivo->id }}</td>
                                    </tr>
                                    <tr><th> Cliente </th><td> {{ $efectivo->cliente }} </td></tr><tr><th> TipoMoneda </th><td> {{ $efectivo->tipoMoneda }} </td></tr><tr><th> Monto </th><td> {{ $efectivo->monto }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
