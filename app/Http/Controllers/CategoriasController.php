<?php

namespace App\Http\Controllers;


use DB;

use Carbon\Carbon;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias = DB::table('categorias')->get();


        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardar mensaje
        DB::table('categorias')->insert([
            "titulo_categoria" => $request->input('titulo_categoria'),
            "desc_categoria" => $request->input('desc_categoria'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);


        //Redireccionar
        return redirect()->route('categorias.index');
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
        $categoria = DB::table('categorias')->where('id', $id)->first();

         return view('categorias.show', compact('categoria'));
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

        $categoria = DB::table('categorias')->where('id', $id)->first();

        return view('categorias.edit', compact('categoria'));

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
        //Actualizamos
        DB::table('categorias')->where('id', $id)->update([

            "titulo_categoria" => $request->input('titulo_categoria'),
            "desc_categoria" => $request->input('desc_categoria'),
            
            "updated_at" => Carbon::now(),
        ]);


        //Redireccionamos
        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar categoria
        DB::table('categorias')->where('id', $id)->delete();


        //Redireccionar
        return redirect()->route('categorias.index');


    }
}
