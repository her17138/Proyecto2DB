<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Categoria;
use App\Marca;
use App\Atributo;
use App\Valor;
use DB;


use Illuminate\Http\Request;

class ProductoController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atributos = Atributo::all();
        $categorias = Categoria::all();
        return view('crearProducto', compact('atributos', 'categorias'));
        
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

    public function producto(){
        $productos = DB::table('marcas')
                    ->join('productos', 'productos.productoid', '=', 'marcas.productoid')
                    ->join('categorias', 'categorias.categoriaid', '=', 'marcas.categoriaid')
                    ->select('productos.Nombre AS nombre', 'marcas.nombre AS marca', 'categorias.Nombre AS categoria', 'marcas.precio AS precio', 'marcas.cantidad AS cantidad')
                    ->get();
        return view('verProducto', compact('productos'));
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
            $producto = new Producto;
            $producto2 = new Producto;
            $producto -> Nombre = $request -> input("nombre");
            $producto2 -> Nombre = $request -> input("nombre");
            $producto->save();
            $producto2->save();

            $categorias = Categoria::All();
            foreach ($categorias as $categoria){
                $prueba = Categoria::find($categoria->categoriaid);
                $prueba->Nombre = $categoria->Nombre;
                $prueba->productoid = $producto->productoid;
                $prueba->save();
            }

            
            $marca = new Marca;
            $marca -> nombre = $request -> input("nombre1");
            $marca -> precio = $request -> input("precio1");
            $marca -> cantidad = $request -> input("cantidad1");
            $marca -> productoid = $producto->productoid;
            $marca -> categoriaid = $request -> input("inputState");
            
            $marca->save();

        

            $marca2 = new Marca;
            $marca2 -> nombre = $request -> input("nombre2");
            $marca2 -> precio = $request -> input("precio2");
            $marca2 -> cantidad = $request -> input("cantidad2");
            $marca2 -> productoid = $producto2->productoid;
            $marca2 -> categoriaid = $request -> input("inputState2");
            $marca2->save();

            
        
            $atributos = Atributo::all();

           

            foreach ($atributos as $atributo){
                $cambio = Atributo::find($atributo->atributoid);
                $cambio->productoid = $producto->productoid;
                $val = $atributo->atributoid;
                $val2 = $atributo->nombre;

                $valor = new Valor;
                $valor2 = new Valor;
                $valor -> productoid = $producto->productoid;
                $valor2 -> productoid = $producto2->productoid;
                $valor -> atributoid = $atributo->atributoid;
                $valor2 -> atributoid = $atributo->atributoid;

                $valor2 -> valor = $request -> input("$val2");

                $valor -> valor = $request -> input("$val");

                $valor->save();
                $valor2->save();
        
            }
        }
        catch (\Illuminate \ Database \ QueryException  $exception){
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
