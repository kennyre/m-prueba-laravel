<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CreateMessageRequest;




class PagesController extends Controller
{
    /*
    protected $request;

    public function __constructor(Request $request)
    {
    	$this->request = $request;
    }
    */


	
	public function __construct()
	{
		$this->middleware('validateformcategorias', ['except' => ['categorias']]);
	}


	//Método Inicio
	public function inicio()
	{
		return view('inicio');
	}


	//Método categorias 
	public function categorias()
	{
		return view('categorias');
	}


	//Método crear categorias 
	public function crear_categorias(CreateMessageRequest $request)
	{
		/*
		$this->validate($request, [

			'titulo_categoria' => 'required',
			'desc_categoria' => 'required'

		]);
		*///Ya no lo validamos de esta forma sino que se utiliza la clase CreateMessageRequest

		$data = $request->all(); // Procesar los datos del formulario


		
		// Respuesta para el usuario, ejemplos de respuestas:
		
		//return redirect('/'); Ej.1
		/*
		return redirect()
			->route('categorias')
			->with('info', 'La Categoría se ha creado correctamente');
		*/

		return back()->with('info', 'La Categoría se ha creado correctamente');


	}


	//Método tareas 
	public function tareas()
	{
		return view('tareas');
	}

}
