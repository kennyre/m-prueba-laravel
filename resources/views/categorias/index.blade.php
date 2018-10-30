@extends('navegacion')


@section('contenido')

	<h1>Todas las Categorías</h1>


	<table width="100%" border="1">
		
		<thead>
			<tr>
				<th>ID</th>
				<th>Título Categoría</th>
				<th>Descripción Categoría</th>
				<th>Acciones</th>
			</tr>
		</thead>


		<tbody>
			
			@foreach ($categorias as $categoria)

				<tr>
					<td>{{ $categoria -> id }}</td>


					<td>
						<a href=" {{ route('categorias.show', $categoria->id) }} ">
							{{ $categoria -> titulo_categoria }}
						</a>
					</td>
					

					<td>{{ $categoria -> desc_categoria }}</td>

					<td>
						<a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
						
						<form style="display: inline" method="POST" action="{{ route('categorias.destroy', $categoria->id) }}">

							{!! csrf_field() !!}
							{!! method_field('DELETE') !!}

							<button type="submit">Eliminar</button>

						</form>

					</td>

				</tr>


			@endforeach

		</tbody>

	</table>


@stop
