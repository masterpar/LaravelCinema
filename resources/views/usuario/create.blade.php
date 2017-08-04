@extends('layouts.admin')

@section('content')

@include('alerts.request')
    <br><br>
    <blockquote> <h2>Registro</h2></blockquote>
	
		{{-- Nombre --}}
		{!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
		
		@include('usuario.forms.user')

		{{-- enviar Formulario --}}
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

		{!!Form::close()!!}


@stop