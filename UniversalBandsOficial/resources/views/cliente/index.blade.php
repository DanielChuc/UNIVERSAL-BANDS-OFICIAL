@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Cliente</div>
                    <div class="card-body">
                        <a href="{{ url('/cliente/create') }}" class="btn btn-success btn-sm" title="Add New Cliente">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        {{-- EXCEL --}}
                        <a href="{{ url('/export/clientes') }}" class="btn btn-warning btn-sm">
                            Exportar a Excel
                        </a>
                        {{-- EXCEL --}}

                        {{-- EXCEL VIEWS--}}
                        <a href="{{ url('/export/clientesV') }}" class="btn btn-warning btn-sm">
                            Exportar a Excel View
                        </a>
                        {{-- EXCEL VIEWS--}}
                        <form method="GET" action="{{ url('/cliente') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cliente as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->apellido }}</td><td>{{ $item->email }}</td>
                                        <td>
                                            <a href="{{ url('/cliente/' . $item->id) }}" title="View Cliente"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/cliente/' . $item->id . '/edit') }}" title="Edit Cliente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/cliente' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Cliente" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $cliente->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
