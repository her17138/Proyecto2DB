@extends('master')

@section('body')
<!--
    <div class="wrap-input100 validate-input" data-validate="Porfavor ingrese el nombre de la tienda">
        <input class="input100" type="text" name="name" placeholder="Nombre del producto">
        <span class="focus-input100"></span>
    </div>


    <div class="wrap-input100 validate-input" data-validate = "Ingrese sus productos separados por comas">
        <textarea class="input100" name="message" placeholder="Atributos del producto (separadas por coma)"></textarea>
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Ingrese sus productos separados por comas">
        <textarea class="input100" name="message" placeholder="Categorías (separadas por coma)"></textarea>
        <span class="focus-input100"></span>
    </div>

    <div class="container-contact100-form-btn">
        <a type="submit" class="contact100-form-btn" >
            Siguiente
        </a>
    </div>
</form>-->
<h1>Ingresar un producto </h1>
<br>
<form method="post" action="{{ route('producto.store') }}">
    <div class="form-group">
        @csrf
        <label for="name"> Nombre del producto</label>
        <input type="text" class="form-control" name="nombre" placeholer="Nombre del producto"/>
    </div>
    
    <div class="container-contact100-form-btn">
        <button class="contact100-form-btn" href="/home">
            Agregar
        </button>
    </div>
</form>
@endsection
