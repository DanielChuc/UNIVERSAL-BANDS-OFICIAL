@extends('adminlte::page')
@section('content')
@section('title', 'Lista de Entradas Por sensor')

    <h1 class="text-center bg-info">Lista de Entradas del Concierto</h1>


<div class="table-responsive bg-yellow">
    <table class="table table-striped">
        <style>
            td{
                text-align: center;
            },
        </style>
        <tr>
            <th>Puerta</th>
            <th>Número de Entradas registradas</th>
            <th>Número de Entradas registradas Por sensor</th>
            <th>Fecha y Hora</th>
            <th>Comparacion</th>
        </tr>
        <tr>
            <th>Puerta Norte</th>
            <td>200</td>
            <td>200</td>
            <td>~~~~~~~~~~~~~</td>
            <td>Coincide</td>
        </tr>
        <tr>
            <th>Puerta Noreste</th>
            <td>200</td>
            <td>200</td>
            <td>~~~~~~~~~~~~~</td>
            <td>Coincide</td>
        </tr>
        <tr>
            <th>Puerta Noroeste</th>
            <td>200</td>
            <td>200</td>
            <td>~~~~~~~~~~~~~</td>
            <td>Coincide</td>
        </tr>
        <tr>
            <th>Puerta Sur</th>
            <td>200</td>
            <td>202</td>
            <td>~~~~~~~~~~~~~</td>
            <td>No Coincide</td>
        </tr>
    </table>
</div>
        <p class="text-center">
            <hr>
            En esta sección de iot pondremos un contador de entradas en las puetas de los eventos para que se 
            registre todas las entradas independientemente de la función de log de entradas para tener un manejo de 
            entradas legales e ilegales para que posteriormente se haga una retro alimentación de como prevenirlo en 
            los futuros eventos.
            <hr>
        </p>
@endsection