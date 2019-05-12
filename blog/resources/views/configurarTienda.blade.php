@extends('master')

@section('body')
<form method="post" action="{{ route('atributo.store') }}">
@csrf
<h1><b> Datos personalizados </b></h1>
        <!--
        <div class="input-group mb-3">
            <input id="userinput" type="text" class="form-control" placeholder="add an item..." aria-label="Add an item" aria-describedby="basic-addon2">
            <div class="input-group-append">
            <button class="btn btn-outline-info" id="enter" type="button">Add</button>
            </div>
        </div>
            <div class="col-12">
            <ul class="list-group">
            <li class="list-group-item">Jello</li>
            <li class="list-group-item">Spinach</li>
            <li class="list-group-item">Rice</li>
            <li class="list-group-item">Birthday Cake</li>
            <li class="list-group-item">Candles</li>
            </ul>

        </div>

        </div>
        -->
    <table id="datosCustom" class=" table order-list">
        <thead>
            <tr>
                <td style="text-align:center;">Nombre</td>
                <td style="text-align:center;">Tipo</td>
                <td style="text-align:center;">¿Requerido?</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="col-sm-4">
                    <input type="text" name="nombre0" class="form-control" />
                </td>
                <td class="col-sm-4">                    
                    <select name="datatype0">
                    <option value="int">Números enteros</option>
                    <option value="float">Números reales</option>
                    <option value="string">Texto</option>
                    </select>
                </td>
                <!--td class="col-sm-3"  style="text-align:center">
                    <input type="checkbox" id="defaultChecked" checked>
                </td-->
                <td  style="text-align:center" class="col-sm-4">
                    <input type="checkbox" name="required0" checked>
                </td>
                <td class="col-sm-2"><a class="deleteRow"></a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" style="text-align: left;">
                    <input type="button" class="btn btn-lg btn-block " id="addrow" value="+" />
                </td>
            </tr>
            <tr>
            </tr>
        </tfoot>
    </table>

        <div class="container-contact100-form-btn">
            <button class="contact100-form-btn" style="color: rgb(255,255,255);" >
                Finalizar
            </button>
        </div>
    </form>
@endsection

<script>

</script>