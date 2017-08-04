{{-- mensaje creacion usuario exitosa --}}
@if(Session::has('message'))

<div class="alert alert-danger alert-dismissable" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="tru">&times;</span> </button>

	<ul>
	{{-- errores request --}}
	@foreach($errors->all() as $error)
		<li> {{ $error}}</li>
	@endforeach
	</ul>
	@endif
</div>