@extends('master')

@section('body')
<form method="post" action="{{ route('atributo.store') }}">
@csrf
<h1 style="color:rgb(37,40,80);font-size: 50px;"><b> Datos personalizados </b></h1>
    <br>
    <hr>
    <table id="datosCustom" class=" table order-list" >
        <thead>
            <tr>
                <td style="text-align:center; font-size: 20px; text-decoration: underline;">Nombre de datos</td>
            </tr>
        </thead>
        <tbody>
            <tr >
                <td class="col-sm">
                    <input type="text" name="nombre0" class="form-control" />
                </td>
                
                <td class="col-sm-2"><a class="deleteRow"></a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" style="text-align: center;">
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