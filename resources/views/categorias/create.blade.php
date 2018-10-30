@extends('navegacion')



@section('contenido')

	<h1>Categorías</h1>
    <h2>Cear, Consultar, actualizar y eliminar categorías</h2>


    @if(session()->has('info'))
    	<h3>{{ session('info') }}</h3>

    @else
	    <form method="post" action="{{ route('categorias.store') }}">

	    	{{ csrf_field() }}

	    	<div>
		    	<label for="titulo_categoria">
		    		Título Categoría
		    		<input type="text" name="titulo_categoria" value="{{ old('titulo_categoria') }}">

		    		{!! $errors->first('titulo_categoria','<span class=error>:message</span>') !!}

		    	</label>
		    </div>
		    <br>

	    	<div>
		    	<label for="desc_categoria">
		    		Descripción Categoría
		    		<input type="text" name="desc_categoria" value="{{ old('desc_categoria') }}">

					{!! $errors->first('desc_categoria','<span class=error>:message</span>') !!}

		    	</label>
	    	</div>
	    	<br>

	    	<input type="submit" value="Crear Categoria">

	    </form>

	@endif

    

@stop