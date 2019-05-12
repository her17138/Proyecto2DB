@extends('master')

@section('body')

<form method="post" action="{{ route('producto.store') }}" >
<h1 style="color:rgb(37,40,80);font-size: 50px;"><b> Ingreso de productos </b></h1>
<br>
    <div class="form-group">
        @csrf
        <label for="name" style="font-size: 20px;"> Nombre del producto</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre del producto"/>
        
    </div>
    <br>
    <hr>
    <div>
        <span style="color:rgb(37,40,80);font-size: 25px;text-decoration: underline;">Marca</span>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nombre1" style="font-size: 20px;">Nombre</label>
            <input type="text" class="form-control" name="nombre1" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
            <label for="inputState" style="font-size: 20px;">Categoria</label>
            <select name="inputState" class="form-control">
                @foreach ($categorias as $categoria)
                <option value="{{ $categoria-> categoriaid }}">{{ $categoria-> categoriaid }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="precio1" style="font-size: 20px;">Precio Unitario</label>
            <input type="text" class="form-control" name="precio1" placeholder="Precio">
        </div>
        <div class="form-group col-md-6">
            <label for="cantidad1" style="font-size: 20px;">Cantidad</label>
            <input type="text" class="form-control" name="cantidad1" placeholder="Cantidad">
        </div>
    </div>

    <br>
    <div class="form-group">
        <label style="font-size: 20px;"> Atributos del producto </label>
        
        @foreach ($atributos as $atributo)
           
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control-plaintext" style="font-size: 22px;text-align:center;" name="categoria1" value="{{ $atributo->nombre }}"/>
                    <br>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="{{ $atributo-> atributoid }}" placeholder="Valor"/>
                    <br>
                </div>
            </div>
            
            
        @endforeach
        
    </div>

    <br>
    <hr>
    <div>
        <span style="color:rgb(37,40,80);font-size: 25px;text-decoration: underline;">Marca</span>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nombre2" style="font-size: 20px;">Nombre</label>
            <input type="text" class="form-control" name="nombre2" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
            <label for="inputState2" style="font-size: 20px;">Categoria</label>
            <select name="inputState2" class="form-control">
                @foreach ($categorias as $categoria)
                <option value="{{ $categoria-> categoriaid }}">{{ $categoria-> categoriaid }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="precio2" style="font-size: 20px;">Precio Unitario</label>
            <input type="text" class="form-control" name="precio2" placeholder="Precio">
        </div>
        <div class="form-group col-md-6">
            <label for="cantidad2" style="font-size: 20px;">Cantidad</label>
            <input type="text" class="form-control" name="cantidad2" placeholder="Cantidad">
        </div>
    </div>

    <br>
    <div class="form-group">
        <label style="font-size: 20px;"> Atributos del producto </label>
        
        @foreach ($atributos as $atributo)
           
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control-plaintext" style="font-size: 22px;text-align:center;" name="atributo" value="{{ $atributo->nombre }}"/>
                    <br>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="{{ $atributo-> nombre }}" placeholder="Valor"/>
                    <br>
                </div>
            </div>
            
            
        @endforeach
        
    </div>
    
    <div class="container-contact100-form-btn">
        <button class="contact100-form-btn btn-block" href="/home">
            Agregar
        </button>
    </div>
</form>
@endsection
