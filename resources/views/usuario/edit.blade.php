@extends('layouts.admin')

@section('content')

{{-- Nombre --}}
		{!!Form::model($user, ['route'=>['usuario.update',$user->id], 'method'=>'PUT'])!!}
		
		@include('usuario.forms.user')

		{{-- enviar Formulario --}}
		{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}

		{!!Form::close()!!}

@stop