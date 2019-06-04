//referencia: https://bootsnipp.com/snippets/402bQ
//funciones para la tabla de configurar tienda
$(document).ready(function () {
    var counter = 1; 
    var total = 0;
    var cantidad =0;
    var precio=0;
    var marArray = JSON.parse(atributos);
    var subtotales = [];
    //para lista de subtotales al iniciar
    var scant = "cantidad"+ String(counter-1);
    (document.getElementById("cantidad"+String(counter-1))).addEventListener("change", getPrecio(counter-1));
    (document.getElementById("marca"+String(counter-1))).addEventListener("change", getPrecio(counter-1));
    cantidad = parseFloat(String(document.getElementById(String(scant)).value));
    precio = marArray[document.getElementById("marca0").selectedIndex]["precio"];
    subtotales.push(cantidad*precio);
    for (var i =0; i<subtotales.length; i++){
        total += parseFloat(String(subtotales[i]));
    }
    document.getElementById("suma").innerHTML="Total: " + String(total);

    /**
     * Funcion para las filas de la tabla de configurar tienda
     */
    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td class="col-sm-4"> <input type="text" name="nombre' + counter +'" class="form-control" /> </td>';
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
        var newRow = $("<tr id="+counter+">");
        var cols = "";
        marArray = JSON.parse(atributos); // convertir el json que viene a un array
        
        cols +='</select></td>';
        cols += '<td style="text-align:center" class="col-sm-6"> \
                    <select class="form-control" name="marca' + counter +'" id="marca' + counter +'">';
        marArray.forEach(function(marca){
            cols +='\<option value="'+marca["marcaid"]+'">' +marca["nombre"]+ '</option>';
        });
        cols +='</select></td>';
        cols += '<td style="text-align:center" class="col-sm-3"> <input value ="1" type="number" name="cantidad' + counter +'" id="cantidad' + counter +'"class="form-control " /> </td>';
        cols += '<td style="text-align:center" class="col-sm-3" id="precioU'+ counter +'">'+ marArray[0]["precio"]+' \
        </td>'
        

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Borrar"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        (document.getElementById("cantidad"+String(counter))).addEventListener("change", getPrecio(counter));
        (document.getElementById("marca"+String(counter))).addEventListener("change", getPrecio(counter));
        var scant = "cantidad"+ String(counter);
        cantidad = parseFloat(String(document.getElementById(String(scant)).value));
        precio = parseFloat(String(marArray[document.getElementById("marca"+String(counter)).selectedIndex]["precio"]));
        subtotales.push(cantidad*precio);
        total =0;
        for (var i =0; i<subtotales.length; i++){
            total += parseFloat(String(subtotales[i]));
        }
        document.getElementById("suma").innerHTML = "Total: " + String(total);
        counter++;
    });
    //(document.getElementById("cantidad"+String(counter-1))).addEventListener("change", getPrecio);
    //var dropdown = document.getElementById("marca"+String(counter-1));
    //dropdown.addEventListener("change", getPrecio);
    function getPrecio(id){
        return function(){
            var scant = "cantidad"+ String(id);
            cantidad = parseInt(String(document.getElementById(String(scant)).value));
            dropdown = document.getElementById("marca"+String(id));
            precio = parseFloat(String(marArray[dropdown.selectedIndex]["precio"]));
            document.getElementById("precioU"+String(id)).innerHTML = precio;
            subtotales[id] = cantidad*precio;
            total =0;
            for (var i =0; i<subtotales.length; i++){
                total += parseFloat(String(subtotales[i]));
            }
            document.getElementById("suma").innerHTML = "Total: " + total;
        }
    }


    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();     
        var ind = ($(this).closest("tr").remove()[0]["id"]);
        subtotales.splice(ind, 1);
        total =0;
        for (var i =0; i<subtotales.length; i++){
            total += parseFloat(String(subtotales[i]));
        }
        document.getElementById("suma").innerHTML = "Total: " + total;
        counter -= 1
    });

});

