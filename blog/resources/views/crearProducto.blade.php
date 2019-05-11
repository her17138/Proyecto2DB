@extends('master')

@section('body')

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
