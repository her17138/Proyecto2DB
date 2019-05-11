@extends('master')

@section('body')

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
