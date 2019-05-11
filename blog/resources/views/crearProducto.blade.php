@extends('master')

@section('body')

<h1>Ingresar un producto </h1>
<br>
<form method="post" action="{{ route('producto.store') }}">
    <div class="form-group">
        @csrf
        <label for="name"> Nombre del producto</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre del producto"/>
    </div>

    <br>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="categoria1">Categoria 1</label>
                <input type="text" class="form-control" name="categoria1" placeholder="Nombre categoria"/>
            </div>
            <div class="col">
                <label for="categoria2">Categoria 2</label>
                <input type="text" class="form-control" name="categoria2" placeholder="Nombre categoria"/>
            </div>
        </div>
    </div>

    <br>
    <hr>
    <div>
        <span>Marca</span>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nombre1">Nombre</label>
            <input type="text" class="form-control" name="nombre1" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Categoria</label>
            <select name="inputState" class="form-control">
                <option value="cat1">1</option>
                <option value="cat2">2</option>
                <option value="null">Ninguna</option>
            </select>
            <br>
            <label for="note" style="color:red;font-size:10px;">*Nota si selecciona 1 o 2 asegurese de haber llenado el campo antes*</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="precio1">Precio Unitario</label>
            <input type="text" class="form-control" name="precio1" placeholder="Precio">
        </div>
        <div class="form-group col-md-6">
            <label for="cantidad1">Cantidad</label>
            <input type="text" class="form-control" name="cantidad1" placeholder="Cantidad">
        </div>
    </div>

    <br>
    <hr>
    <div>
        <span>Marca</span>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nombre2">Nombre</label>
            <input type="text" class="form-control" name="nombre2" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
            <label for="inputState2">Categoria</label>
            <select name="inputState2" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="0">Ninguna</option>
            </select>
            <br>
            <label for="note" style="color:red;font-size:10px;">*Nota si selecciona 1 o 2 asegurese de haber llenado el campo antes*</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="precio2">Precio Unitario</label>
            <input type="text" class="form-control" name="precio2" placeholder="Precio">
        </div>
        <div class="form-group col-md-6">
            <label for="cantidad2">Cantidad</label>
            <input type="text" class="form-control" name="cantidad2" placeholder="Cantidad">
        </div>
    </div>
    
    <div class="container-contact100-form-btn">
        <button class="contact100-form-btn" href="/home">
            Agregar
        </button>
    </div>
</form>
@endsection
