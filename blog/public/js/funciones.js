//referencia: https://bootsnipp.com/snippets/402bQ
//funciones para la tabla de configurar tienda
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="nombre' + counter + '"/></td>';
        cols += '<td> <select name="cars">  <option value="int">Números enteros</option> <option value="float">Números reales</option> <option value="string">Texto</option></select></td>';
        cols += '<td  style="text-align:center" ><input type="checkbox" name="required" checked></td>';

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



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}