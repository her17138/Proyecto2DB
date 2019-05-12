@extends('master')

@section('body')

<form method="post" action="{{ route('cliente.store') }}">
<h1 style="color:rgb(37,40,80);font-size: 50px;"><b> Ingreso de clientes </b></h1>
<br>
    <div class="form-group">
        @csrf
        <div class="row">
            <div class="col">
                <label for="nombre" style="font-size: 20px;">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre"/>
            </div>
            <div class="col">
                <label for="apellido"  style="font-size: 20px;">Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido"/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label for="direccion"  style="font-size: 20px;">Dirección</label>
        <input type="text" class="form-control" name="direccion" placeholder="Dirección"/>
    </div>


    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="telefono"  style="font-size: 20px;">Teléfono</label>
                <input type="text" class="form-control" name="telefono" placeholder="Teléfono"/>
            </div>
            <div class="col">
                <label for="nit"  style="font-size: 20px;">Nit</label>
                <input type="text" class="form-control" name="nit" placeholder="Nit"/>
            </div>
        </div>
    </div>
    <div class="container-contact100-form-btn">
        <button class="contact100-form-btn btn-block" href="/home">
            Siguiente
        </button>
    </div>

</form>


@endsection
		
            