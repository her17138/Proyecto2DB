@extends('master')

@section('body')
<form class="contact100-form validate-form">
    <span class="contact100-form-title">
        Caracteristicas productos
    </span>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Producto 1</a>
            <a class="dropdown-item" href="#">Producto 2</a>
            <a class="dropdown-item" href="#">Producto 3</a>
        </div>
    </div>

    <h>
    <h>
    <div class="wrap-input100 validate-input" data-validate = "Ingrese sus productos separados por comas">
        <textarea class="input100" name="message" placeholder="Productos"></textarea>
        <span class="focus-input100"></span>
    </div>

    <div class="container-contact100-form-btn">
        <button class="contact100-form-btn" href="/home">
            Siguiente
        </button>
    </div>
</form>

@endsection
