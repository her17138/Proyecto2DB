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
                    ->select('productos.Nombre AS nombre', 'marcas.nombre AS marca',  'marcas.precio AS precio', 'marcas.cantidad AS cantidad')
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
            $producto -> Nombre = $request -> input("nombre");
            $producto->save();
          
            
            $cat1 = new Categoria;
            $cat1-> Nombre = $request -> input("cat1");
            $cat1 -> productoid = $producto->productoid;
            $cat1->save();
        
        
        
            $cat2 = new Categoria;
            $cat2-> Nombre = $request -> input("cat2");
            $cat2 -> productoid = $producto->productoid;
            $cat2->save();
            
            

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
            if ($request -> input("inputState") == $cat1->Nombre){
                $marca -> categoriaid = $cat1->categoriaid;
                $marca->save();
            } elseif ($request -> input("inputState") == $cat2->Nombre){
                $marca -> categoriaid = $cat2->categoriaid;
                $marca->save();
            } else {
                $message = "La categoria no es correcta";
                return view('error', compact('message'));
            }
            
            
            $atributos = Atributo::all();
    
            $marca2 = new Marca;
            if( $request -> input("nombre2") != Null){
                $marca2 -> nombre = $request -> input("nombre2");
                $marca2 -> precio = $request -> input("precio2");
                $marca2 -> cantidad = $request -> input("cantidad2");
                $marca2 -> productoid = $producto->productoid;
                if ($request -> input("inputState2") == $cat1->Nombre){
                    $marca2 -> categoriaid = $cat1->categoriaid;
                } elseif ($request -> input("inputState2") == $cat2->Nombre){
                    $marca2 -> categoriaid = $cat2->categoriaid;
                } elseif ($request -> input("inputState2") == Null){
                    $marca2 -> categoriaid = $request -> input("inputState2");
                } else {
                    $message = "La categoria no es correcta";
                    return view('error', compact('message'));
                }
                $marca2->save();

                foreach ($atributos as $atributo){
                    $cambio = Atributo::find($atributo->atributoid);
                    $cambio->productoid = $producto->productoid;
                    $val = $atributo->atributoid;
                    $val2 = $atributo->nombre;
    
                    $valor = new Valor;
                    $valor2 = new Valor;
                    $valor -> marcaid = $marca->marcaid;
                    $valor2 -> marcaid = $marca2->marcaid;
                    $valor -> atributoid = $atributo->atributoid;
                    $valor2 -> atributoid = $atributo->atributoid;
    
                    $valor2 -> valor = $request -> input("$val2");
    
                    $valor -> valor = $request -> input("$val");
    
                    $valor->save();
                    $valor2->save();
            
                }
            } else {
                foreach ($atributos as $atributo){
                    $cambio = Atributo::find($atributo->atributoid);
                    $cambio->productoid = $producto->productoid;
                    $val = $atributo->atributoid;
                    $valor = new Valor;
                    $valor -> marcaid = $marca->marcaid;
                    $valor -> atributoid = $atributo->atributoid;
                    $valor -> valor = $request -> input("$val");
                    $valor->save();
                }

            }


            return redirect('/clientes');
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
