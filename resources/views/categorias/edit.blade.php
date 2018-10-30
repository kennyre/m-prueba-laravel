@extends('navegacion')


@section('contenido')

	<h2>Editar Categoría: {{ $categoria -> titulo_categoria }}</h2>


	<form method="post" action="{{ route('categorias.update', $categoria->id) }}">

			{!! method_field('PUT') !!}

	    	{!! csrf_field() !!}

	    	<div>
		    	<label for="titulo_categoria">
		    		Título Categoría
		    		<input type="text" name="titulo_categoria" value="{{ $categoria->titulo_categoria }}">

		    		{!! $errors->first('titulo_categoria','<span class=error>:message</span>') !!}

		    	</label>
		    </div>
		    <br>

	    	<div>
		    	<label for="desc_categoria">
		    		Descripción Categoría
		    		<input type="text" name="desc_categoria" value="{{ $categoria->desc_categoria }}">

					{!! $errors->first('desc_categoria','<span class=error>:message</span>') !!}

		    	</label>
	    	</div>
	    	<br>

	    	<input type="submit" value="Actualizar Categoria">

	    </form>


@stop