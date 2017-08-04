@extends('layouts.admin')

@section('content')

{{-- Mensaje de alerta --}}
@if(Session::has('message'))

<div class="alert alert-success alert-dismissable" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="tru">&times;</span>
</button>
{{ Session::get('message')}}	
</div>
@endif
{{-- /// --}}
<h2 >Usuarios</h2>

<table class="table table-bordered">
	<thead>
		<tr class="active">
			<th>Nombre</th>
			<th>E-mail</th>
			<th>Acción</th>
		</tr>
	</thead>
	<tbody>
	{{-- Imprimier Usuarios --}}
	@foreach($users as $user)
		<tr>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>	
		
			 {!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
				{{-- Boton Editar --}}
				{!!link_to_route('usuario.edit', $title = "Editar", $parameters = $user->id,
			 $attributes = ['class'=>'btn btn-info'])!!}

			 {{-- Boton Eliminar --}}
			 {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
			 {!!Form::close()!!}
			</td>
		</tr>
	@endforeach	
	</tbody>
</table>

{{ $users->render()}}

@stop