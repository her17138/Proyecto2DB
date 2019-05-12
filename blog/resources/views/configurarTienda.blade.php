@extends('master')

@section('body')
<form method="post" action="{{ route('atributo.store') }}">
@csrf
<h1 style="color:rgb(37,40,80);font-size: 50px;"><b> Datos personalizados </b></h1>
        <br>
    <table id="datosCustom" class=" table order-list">
        <thead>
            <tr>
                <td style="text-align:center;font-size: 20px;">Nombre</td>
                <td style="text-align:center;font-size: 20px;">Tipo</td>
                <td style="text-align:center;font-size: 20px;">¿Requerido?</td>
            </tr>
        </thead>
        <tbody>
            <tr >
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
                    <input type="button" class="btn btn-info btn-lg btn-block" style="border-radius:100px" id="addrow" value="+" />
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