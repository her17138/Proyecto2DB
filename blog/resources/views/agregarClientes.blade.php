@extends('master')

@section('body')

<form method="post" action="{{ route('cliente.store') }}">
    <div class="form-group">
        @csrf
        <div class="row">
            <div class="col">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre"/>
            </div>
            <div class="col">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido"/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" name="direccion" placeholder="Dirección"/>
    </div>


    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" name="telefono" placeholder="Telefono"/>
            </div>
            <div class="col">
                <label for="nit">Nit</label>
                <input type="text" class="form-control" name="nit" placeholder="Nit"/>
            </div>
        </div>
    </div>
    <div class="container-contact100-form-btn">
        <button class="contact100-form-btn" href="/home">
            Siguiente
        </button>
    </div>

</form>


@endsection
		
            