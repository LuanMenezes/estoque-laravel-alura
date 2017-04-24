@extends('principal')

@section('conteudo')

<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>

 <form action="/login" method="POST">

 	<input type="hidden" name="_token" value=" {{ csrf_token() }}">

 	<div class="form-group">
	 	<label>E-mail</label>
	 	<input name="email" class="form-control" />
 	</div>
 	<div class="form-group">
	 	<label>Senha</label>
	 	<input type="password" name="password" class="form-control" />
 	</div>

 	 <button type="submit" class="btn btn-default">Login</button>

 </form>
@stop