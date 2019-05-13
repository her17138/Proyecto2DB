@extends('master')

@section('body')

<table class="table table-hover">
    <thead>
        <tr>
        <th >Nombre</th>
        <th >Apellido</th>
        <th >Telefono</th>
        <th >Dirección</th>
        <th >Nit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
            
            <td>{{$cliente->Nombre}}</td>
            <td>{{$cliente->Apellido}}</td>
            <td>{{$cliente->Telefono}}</td>
            <td>{{$cliente->Direccion}}</td>
            <td>{{$cliente->clienteNIT}}</td>
            </tr>
        @endforeach
        
    </tbody>

</table>
        


@endsection