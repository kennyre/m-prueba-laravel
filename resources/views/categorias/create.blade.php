@extends('navegacion')



@section('contenido')

	<h1>Categorías</h1>
    <h2>Cear, Consultar, actualizar y eliminar categorías</h2>


    @if(session()->has('info'))
    	<h3>{{ session('info') }}</h3>

    @else
	    <form method="post" action="{{ route('categorias.store') }}">

	    </form>

	@endif

    

@stop