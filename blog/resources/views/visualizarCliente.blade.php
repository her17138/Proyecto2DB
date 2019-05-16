@extends('master')

@section('body')

<table class="table table-hover">
    
    
    @if($clientes->count())
        <thead>
            <tr>
            <th style="text-align:center;">Nombre</th>
            <th style="text-align:center;">Apellido</th>
            <th style="text-align:center;">Telefono</th>
            <th style="text-align:center;">Dirección</th>
            <th style="text-align:center;">Nit</th>
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
    @else
        <h1>No hay clientes ingresados </h1>
    @endif

</table>
        


@endsection