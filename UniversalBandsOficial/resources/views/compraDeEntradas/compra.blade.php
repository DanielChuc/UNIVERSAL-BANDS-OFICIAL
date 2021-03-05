@extends('adminlte::page')
<!-- csrf_field  Sirve para que no cualquier aplicacion le envie datos  -->
@section('title', 'Nueva Banda')

@section('content')

<h2 class="text-center bg-dark">Compra de Bandas Nuevas</h2>

<h2 class="text-center bg-info">Evento Actual: {{ $eventos->nombre }}</h2>

<div class="jumbotron text-center">

  <div class="container">
    <div class="row justify-content-center h-100">
    
            
        <form method="POST" action="/compraEvento/{{ $eventos->id }}"> 
 
        {{ csrf_field() }} 
            <div class="form-group " >
            <div class="card card-dark">
              <div class="card-header">
                <h2 class="card-title" for="cliente_id" >  Clientes</h2>
              </div>
            </div>
                <select class="form-control" id="cliente_id" name="cliente_id">
                    <br>
                @foreach($clientes as $c)
                
                <option value="{{$c->id}}" >{{$c->nombre}}</option>
                
                @endforeach
                </select>
            </div>


            <br>

            <div class="card card-dark">
              <div class="card-header">
                <h2 class="card-title" for="banda_id">Banda</h2>
              </div>
            </div>
                <input type="text" class="form-control" id="banda_id" name="codigo" required>
                <br>


          
                 <button type="submit" class="btn btn-primary">Realizar Compra</button>
        </form>

        
    </div>
  </div>
  <h1>Lugares Disponibles: {{ $eventos->lugaresDisponibles }}</h1>


</div>


@endsection