//referencia: https://bootsnipp.com/snippets/402bQ
//funciones para la tabla de configurar tienda
$(document).ready(function () {
    var counter = 1; 

    /**
     * Funcion para las filas de la tabla de configurar tienda
     */
    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td class="col-sm-4"> <input type="text" name="nombre' + counter +'" class="form-control" /> </td>';
        cols += '<td class="col-sm-4"> <select name="datatype' + counter +'">  <option value="int">Números enteros</option> <option value="float">Números reales</option> <option value="string">Texto</option></select></td>';
        cols += '<td  style="text-align:center" class="col-sm-4" ><input type="checkbox" name="required' + counter +'" checked></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Borrar"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });
    /**
     * funcion para agregarle filas a la tabla de facturacion
     */
    $("#addrowF").on("click", function () {
    //function addrowFun() {
        var newRow = $("<tr>");
        var cols = "";
        var marArray = JSON.parse(marcas); // convertir el json que viene a un array
        var prodArray = JSON.parse(productos);
        
        cols += '<td style="text-align:center" class="col-sm-3"> \
                    <select name="producto' + counter +'">';
        prodArray.forEach(function(producto){
            cols +='\<option value="'+producto["productoid"]+'">' +producto["Nombre"]+ '</option>';
        });
        cols +='</select></td>';
        cols += '<td style="text-align:center" class="col-sm-3"> \
                    <select name="marca' + counter +'">';
        marArray.forEach(function(marca){
            cols +='\<option value="'+marca["marcaid"]+'">' +marca["nombre"]+ '</option>';
        });
        cols +='</select></td>';
        cols += '<td style="text-align:center" class="col-sm-3"> <input type="number" name="cantidad' + counter +'" class="form-control" /> </td>';
        cols += '<td style="text-align:center" class="col-sm-3" ><input type="number" step="any" name="precio' + counter +'" class="form-control" /></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Borrar"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });


    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });

});

