@if(Session::has('message-error'))

<div class="alert alert-danger alert-dismissable" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="tru">&times;</span> </button>

	<ul>
	{{ Session::get('message-error')}}
	</ul>
	@endif
</div>