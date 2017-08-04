{!!Form::label('Nombre: ')!!}
		{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingrese su nombre'])!!}

		{{-- Email --}}
		{!!Form::label('E-mail: ')!!}
		{!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese su E-mail'])!!}

		{{-- Password --}}
		{!!Form::label('Contraseña: ')!!}
		{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese su contraseña'])!!}
		<br>