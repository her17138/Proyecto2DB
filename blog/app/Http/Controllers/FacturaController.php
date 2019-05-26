<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use App\LineaFactura;
use App\Marca;
use App\Producto;
use DB;
use Artisan;


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
        return view('facturacion', compact('facturas', 'productos','atributos', 'idfactura'));
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

            $length = (int)((count($input) -3 )/2); // lineas de factura ingresada
            
            $suma =0;
            //loop para obtener el precio total 
            for($i=0; $i < $length; $i++) {
                $cantidad = $request -> input("cantidad".$i);
                $precio = DB::table('marcas')->select('precio')->where('marcaid', $request->input("marca".$i))->first();
                if ($cantidad > 0){
                    $suma += $precio->precio * $request -> input("cantidad".$i);
                }
                else{
                    $suma += $precio->precio;
                }
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
                    $factura -> save();
                }
                
                $productoid = DB::table('marcas')->select('productoid')->where('marcaid', $request->input("marca".$i))->first();
                $precio = DB::table('marcas')->select('precio')->where('marcaid', $request->input("marca".$i))->first();
                $il -> productoid = $productoid->productoid;
                
                $il -> marcaid = $request -> input("marca".$i);
                $il -> facturaid = $factura->facturaid;
                if ($request -> input("cantidad".$i) >0){
                    $il -> cantidad = $request -> input("cantidad".$i);
                }
                else{
                    $il -> cantidad = 1;
                }
                $il -> preciounitario = $precio->precio;
                $il->save();
                            
            }
            return redirect('/verFactura'); 
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
        /*$data = DB::table('linea_facturas')
                    ->join('facturas', 'linea_facturas.facturaid', '=', 'facturas.facturaid')
                    ->select('linea_facturas.*', 'facturas.created_at')
                    ->where('facturaid', $facturaid)
                    ->get();*/
                    $data = DB::table('linea_facturas')
                    ->leftJoin('facturas', 'linea_facturas.facturaid', '=', 'facturas.facturaid')
                    ->where('linea_facturas.facturaid', $facturaid)
                    ->select('linea_facturas.*', 'facturas.created_at')
                    ->get();
        return response()->json($data);

    }

    function migrate(Request $request){
        $fecha = $request->get('cantidadDias');
        exec('composer dump-autoload');
        for ($x = 0; $x <= $fecha-1; $x++) {
            Artisan::call('db:seed' ,['--force' => true]);
            DB::select('call offsetDays(?)', array($x+1));
        } 
        
        
        //llamamos stored procedure..
       
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
