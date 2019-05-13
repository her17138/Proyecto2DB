@extends('master')

@section('body')
<table class="table table-hover">
    <thead>
        <tr>
        <th >Producto</th>
        <th >Marca</th>
        <th >Categoria</th>
        <th >Precio</th>
        <th >Cantidad</th>
        </tr>
    </thead>

    <tbody>
            @for ($i=0; $i<count($productos); $i++)
            <tr>
            <td>{{$productos[$i]->Nombre}}</td>
            <td>{{$marcas[$i] -> nombre}}</td>
            <td>{{$marcas[$i]->categoriaid}}</td>
            <td>{{$marcas[$i]->precio}}</td>
            <td>{{$marcas[$i]->cantidad}}</td>
            </tr>
            @endfor
    
        
    </tbody>
    

</table>
@endsection