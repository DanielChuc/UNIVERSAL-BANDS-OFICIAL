<h1 class="text-center bg-info">UNIVERSAL BANDS</h1>

<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Direccion</th>
        <th>Pais</th>
        <th>Ciudad</th>
        <th>CodigoPostal</th>
        <th>Telefono</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cliente as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->apellido }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->direccion }}</td>
            <td>{{ $cliente->pais }}</td>
            <td>{{ $cliente->ciudad }}</td>
            <td>{{ $cliente->codigoPostal }}</td>
            <td>{{ $cliente->telefono }}</td>

        </tr>
    @endforeach
    </tbody>
</table>