<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use App\LineaFactura;
use App\Marca;
use App\Producto;
use DB;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::All();
        $facturas = Factura::All();
        $productos = Producto::All();

        $atributos = DB::table('marcas')
                        ->distinct('marcas.marcaid', 'marcas.nombre')
                        ->get();
    
        $idfactura = count(Factura::All()) +1;
        return view('facturacion', compact('atributos', 'facturas', 'productos', 'idfactura'));
    }

    public function index_through(){
        $lista_facturas = DB::table('facturas')->orderBy('facturaid')->groupBy('facturaid')->get();
        //echo $lista_facturas;
        return view('verLineaFactura')->with('lista_facturas', $lista_facturas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            //print_r($request -> all());
            $input = $request -> all();
            $idfac = count(Factura::all()) +1; //id de factura

            $length = (int)((count($input) -3 )/3); // lineas de factura ingresada
            
            $suma =0;

            //loop para obtener el precio total 
            for($i=0; $i < $length; $i++) {
                $suma += $request -> input("precio".$i) * $request -> input("cantidad".$i);
            }
            $factura = new Factura;
            $factura -> clienteNIT = $request -> input("clienteNIT");
            $factura -> total = $suma;
            $factura -> direccion = $request -> input("direccion");
            
            
            //loop para las lineas de la factura
            for($i=0; $i < $length; $i++) {
                $il = new LineaFactura;
                $prueba = Marca::find($request -> input("marca".$i));
                $nCant = $prueba->cantidad - $request -> input("cantidad".$i);
                $prueba->cantidad = $nCant;
                if($nCant <= 0){
                    $message = "Ya no tiene existencias suficientes";
                    return view('/error', compact('message'));
                } else {
                    $prueba->save();
                    $factura -> saveorFail();
                }
                
                $productoid = DB::table('marcas')->select('productoid')->where('productoid', $request->input("marca".$i))->first();
                $il -> productoid = $productoid->productoid;
                $il -> marcaid = $request -> input("marca".$i);
                $il -> facturaid = $factura->facturaid;
                $il -> cantidad = $nCant;
                $il -> preciounitario = $request -> input("precio".$i);
                $il->save();
                                
                
            }
        
        }catch (\Illuminate\Database\QueryException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        
        
       
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    function fetch(Request $request){
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('linea_facturas')->where('facturaid', $value)->get();
        $output = '<option value="">Seleccione '.ucfirst($dependent).'</option>';
        foreach($data as $row)
        {
           
            echo $row->lineaid;
            $output .= '<option value="'.$row->lineaid.'">'.$row->lineaid.'</option>';
        }
        echo $output;
    } 

    function populateTable(Request $request){
        $facturaid = $request->get('facturaid');
        $lineaid = $request->get('lineafactura');

        $data = DB::table('linea_facturas')->where('facturaid', $facturaid)->where('lineaid',$lineaid)->get();
        return response()->json($data);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
