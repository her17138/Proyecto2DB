<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Categoria;
use App\Marca;

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
        
        return view('crearProducto');
        
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
        $producto = new Producto;
        $producto -> Nombre = $request -> input("nombre");
        $producto->save();

        $categoria = new Categoria;
        $categoria2 = new Categoria;
        $cat1 = $request -> input("categoria1");
        $cat2 = $request -> input("categoria2");
        $categoria -> Nombre = $request -> input("categoria1");
        $categoria2 -> Nombre = $request -> input("categoria2");
        $categoria -> productoid = $producto->productoid;
        $categoria2 -> productoid = $producto->productoid;
        if ($cat1 != Null) {
            $categoria->save();
        }
        if($cat2 != Null){
            $categoria2->save();
        }

        $marca = new Marca;
        $marca -> nombre = $request -> input("nombre1");
        $marca -> precio = $request -> input("precio1");
        $marca -> cantidad = $request -> input("cantidad1");
        $marca -> productoid = $producto->productoid;
        $catM1 = $request -> input("inputState");
     
        if($catM1 == "cat1"){
            $marca -> categoriaid = $categoria->categoriaid;
        }elseif($catM1 == "cat2"){
            $marca -> categoriaid = $categoria2->categoriaid;
        }
        $marca->save();

        $marca2 = new Marca;
        $marca2 -> nombre = $request -> input("nombre2");
        $marca2 -> precio = $request -> input("precio2");
        $marca2 -> cantidad = $request -> input("cantidad2");
        $marca2 -> productoid = $producto->productoid;
        $catM2 = $request -> input("inputState2");
     
        if($catM2 == "1"){
            $marca2 -> categoriaid = $categoria->categoriaid;
        }elseif($catM2 == "2"){
            $marca2 -> categoriaid = $categoria2->categoriaid;
        }
        $marca2->save();
       
        
        return redirect('/atributos'); // redireccion de vista al terminar de guardarlo
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
