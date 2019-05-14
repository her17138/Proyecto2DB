<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atributo;
use App\Categoria;

class AtributoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $input = $request -> all();
        //print_r($input);
        //guardar todos los atributos que vienen del request

        $cat1 = new Categoria;
        $cat2 = new Categoria;
        $cat1->Nombre = $request -> input("cat1");
        $cat2->Nombre = $request -> input("cat2");
        $cat1->save();
        $cat2->save();
        for($i=0; $i <= (int)((count($input) - 1)/3); $i++) {
            $attrb = new Atributo;
            $attrb -> nombre = $request -> input("nombre".$i);
            $attrb -> datatype = $request -> input("datatype".$i);
            $attrb -> required = $request -> input("required".$i);
            if(!is_null($request -> input("nombre".$i))){
                $attrb->save();
            }
        }
        return redirect('/producto');
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
