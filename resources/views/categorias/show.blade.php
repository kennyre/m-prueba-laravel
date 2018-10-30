@extends ('navegacion')


@section('contenido')

	<h2>Datos Categoría</h2>

	<p>Categoría: {{ $categoria -> titulo_categoria }} - Descripción: {{ $categoria -> desc_categoria }}</p>

@stop