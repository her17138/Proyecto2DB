@extends('master')


@section('body')
 
   <h1 style="color:rgb(37,40,80);font-size: 50px;"><b> Facturas en sistema </b></h1>
   <br>
   <br>
   <div class="form-group">
    <select name="idFactura" id="idFactura" class="form-control input-lg dynamic" data-dependent="lineaFacturaId">
     <option value="">Seleccione un ID de factura</option>
     @foreach($lista_facturas as $idFactura)
        <option value="{{ $idFactura->facturaid }}">{{ $idFactura->facturaid }}</option>
     @endforeach
    </select>
   </div>
   
    <table class = 'table table-bordered table-striped' id='factura_table'>
        <tr>
            <th style="text-align:center;">ID Linea de factura</th>
            <th style="text-align:center;">ID de producto</th>
            <th style="text-align:center;">ID de marca</th>
            <th style="text-align:center;">ID de factura</th>
            <th style="text-align:center;">Cantidad</th>
            <th style="text-align:center;">Precio Unitario</th>
            <th style="text-align:center;">Fecha de facturación</th>
        </tr>
        <tbody>
   <br>
   <br>
   {{ csrf_field() }}

   <script type="text/javascript">


    $(function() {
        var condicion1 ='';
        var condicion2 ='';
    
        var value1='';
        var value2='';
    
        var condicion1 = document.getElementById('idFactura');
        
            
        function logValue() {
            value1 = this.value;
            //alert(value1);   
        }
    
        var condicion2 = document.getElementById('lineaFacturaId');
        
        function logValue2() {
            value2 = this.value;
            //alert(value2);   
        }
    
        condicion1.addEventListener('change', logValue, false);
       // condicion2.addEventListener('change', logValue2, false);    
    
    
        $('.dynamic').change(function(){
            if($(this).val() != '')
            {
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('FacturaController.fetch') }}",
                    method:"POST",
                    data:{select:select, value:value, _token:_token, dependent:dependent},
                    success:function(result)
                    {
                        $('#'+dependent).html(result);
                    }
                
                })
    
                if(value1 != ''){
                    //alert('value1: '+ value1 + 'value2: ' + value2);
                    var counter =1;
                    $.ajax({
                        url:"{{ route('FacturaController.populateTable') }}",
                        method:"POST",
                        data:{facturaid:value1, lineafactura:value2, _token:_token},
                        success:function(response)
                        {
                            var trHTML = '';
    
                            var table = document.getElementById("factura_table");
                            //or use :  var table = document.all.tableid;
                            for(var i = table.rows.length - 1; i > 0; i--)
                            {
                                table.deleteRow(i);
                            }
                            $.each(response, function (i, item) {
                            trHTML += '<tr><td>' + counter + '</td><td>' + item.productoid + '</td><td>' + item.marcaid + '</td><td>' + item.facturaid + '</td><td>' + item.cantidad + '</td><td>' + item.preciounitario +'</td><td>'+ item.created_at +'</td></tr>';
                            //alert(item.lineaid);
                            counter ++;
                            });
                            
                            $('#factura_table').append(trHTML);
    
                        }
    
                    })
                }
    
    
            }
        });
    
        
        
         $('#idFactura').change(function(){
            $('#lineaFacturaId').val('');
         });
        
         $('#lineaFacturaId').change(function(){
            
    
        });
         
        
    });
    </script>

@endsection


    