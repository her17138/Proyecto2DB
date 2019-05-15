@extends('master')

@section('body')

<script type="text/javascript">var marcas = '<?= $atributos ?>';</script>
<script type="text/javascript">var productos = '<?= $productos ?>';</script>




<form method="post" action="{{ route('factura.store') }}">
@csrf
    <h1><b> Facturación </b></h1>
    
    <br>
    <h4><b> Factura No.:        {{ $idfactura }}  </b></h4>
    <br>
    <div class="form-group">
        
            <label for="NIT">NIT</label>
            <input type="text" class="form-control" name="clienteNIT" placeholder="NIT del cliente">
        
    </div>
    <br>

    
    @if (session('error'))
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong>Danger!</strong> <span>El nit del cliente no existe</span>
        </div>
    @endif
    

    <br>
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" name="direccion" placeholder="Dirección">
    </div>
    <br>
    <table id="datosFactura" class="table order-list">
        <thead>
            <tr>
                <td style="text-align:center;">Producto</td>
                <td style="text-align:center;">Cantidad</td>
                <td style="text-align:center;">Precio</td>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align:center" class="col-sm-6">                    
                    <select name="marca0" class="form-control dynamic" data-dependent="precio0">
                    @foreach ($atributos as $atributo)
                        <option value="{{ $atributo -> marcaid }}" > {{ $atributo -> nombre.' '.$atributo->valor}} </option>
                    @endforeach
                    </select>
                </td>
                <td style="text-align:center" class="col-sm-3">
                    <input type="number" name="cantidad0" class="form-control" />
                </td>
                <td  style="text-align:center" class="col-sm-3">
                    <input type="number"  name="precio0" class="form-control" >
                </td>
                <td class="col-sm-2"><a class="deleteRow"></a>
                </td>
            </tr>
            {{csrf_field()}}
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" style="text-align: left;">
                    <input type="button" class="btn btn-info btn-lg btn-block" style="border-radius:100px" id="addrowF" value="+"/>
                </td>
            </tr>
            <tr>
            </tr>
        </tfoot>
    </table>

        <div class="container-contact100-form-btn">
            <button class="contact100-form-btn" style="color: rgb(255,255,255);" >
                Realizar compra
            </button>
        </div>
    </form>
@endsection

<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>

