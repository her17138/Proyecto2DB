<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use App\LineaFactura;
use App\Marca;
use App\Producto;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::all();
        $facturas = Factura::all();
        $productos = Producto::all();
        $idfactura = count(Factura::all()) +1;
        return view('facturacion', compact('marcas', 'facturas', 'productos', 'idfactura'));
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
            for($i=0; $i <= $length; $i++) {
                $suma += $request -> input("precio".$i);
            }
            $factura = new Factura;
            $factura -> clienteNIT = $request -> input("clienteNIT");
            $factura -> total = $suma;
            $factura -> direccion = $request -> input("direccion");
            $factura -> saveOrFail();
            
            //loop para las lineas de la factura
            for($i=0; $i <= $length; $i++) {
                $il = new LineaFactura;
                $il -> productoid = $request -> input("producto".$i);
                $il -> marcaid = $request -> input("marca".$i);
                $il -> facturaid = $idfac;
                $il -> cantidad = $request -> input("cantidad".$i);
                $il -> preciounitario = $request -> input("precio".$i);
                if(!is_null($request -> input("producto".$i))){
                    $il->save();
                }
            }
        }
        catch (\Illuminate\Database\QueryException $exception) {
            return back()->withError('    El NIT ' . $request->input('clienteNIT'). ' no es válido. ')->withInput();
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
