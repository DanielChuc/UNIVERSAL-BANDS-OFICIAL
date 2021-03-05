@extends('adminlte::page')
<!-- csrf_field  Sirve para que no cualquier aplicacion le envie datos  -->
@section('title', 'Eventos a Elegir')


@section('content')

  <h1 class="text-center text-danger " >Eventos Disponibles</h1>
<div>
@foreach($evento as $evento)
    <tr>
    <div class="jumbotron text-center">
            <h4> Evento: 
    
           <td>{{ $loop->iteration }}</td> 
           </h4>
            <br>
        
           <h5>Nombre:  <td>{{ $evento->nombre }}</td> 
           <br>
           <h5>ID:  <td>{{ $evento->id }}</td> 
                <br>
           Dirección: <td>{{ $evento->direccion }}</td>
           <br>
           Descripción: <td>{{ $evento->descripcion }}</td> </h5>
            <a href="/compraEvento/{{$evento->id}}"><button class="btn btn-dark btn-sm " > Comprar</button> </a>
                {{-- <button>Comprar</button> --}}
        
    </div>
            <td>
        

           
            
            </td>
    </tr>
 @endforeach
 </div>





@endsection