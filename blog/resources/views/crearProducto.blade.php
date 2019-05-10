@extends('master')

@section('body')
<!--form class="contact100-form validate-form">
    <span class="contact100-form-title">
        Creación de tienda
    </span>

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
<form method="post" action="{{ route('producto.store') }}">
    <div class="form-group">
        @csrf
        <label for="id">Id del producto:</label>
        <input type="text" class="form-control" name="id"/>
    </div>
    <div class="form-group">
        <label for="name"> Nombre del producto :</label>
        <input type="text" class="form-control" name="nombre"/>
    </div>
    <div class="form-group">
        <label for="storeid">Id de la tienda:</label>
        <input type="text" class="form-control" name="tiendaid"/>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
