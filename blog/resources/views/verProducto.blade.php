@extends('master')

@section('body')
<table class="table table-hover">
 
    
        @if($productos->count())
            
                <thead>
                <tr>
                <th >Producto</th>
                <th >Marca</th>
              
                <th >Precio</th>
                <th >Cantidad</th>
                </tr>
                </thead>
                <tbody>
                @for ($i=0; $i<count($productos); $i++)
                
                        <tr>
                        <td>{{$productos[$i]->nombre}}</td>
                        <td>{{$productos[$i] -> marca}}</td>
                     
                        <td>{{$productos[$i]-> precio}}</td>
                        <td>{{$productos[$i]->cantidad}}</td>
                        </tr>
                
                @endfor
                </tbody>
        @else
            <h1> No hay productos ingresados aun </h1>
        @endif
        
    
    

</table>
@endsection