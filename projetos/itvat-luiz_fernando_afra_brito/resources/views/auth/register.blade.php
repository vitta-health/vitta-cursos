@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="{{ url('cadastrar') }}">
				{!! csrf_field() !!}

				<div class="form-group">
					<label for="name">Nome</label>
					<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
				</div>

				<div class="form-group">
					<label for="password">Senha</label>
					<input id="password" type="password" class="form-control" name="password">
				</div>

				<div class="form-group">
					<label for="password2">Repita a senha</label>
					<input id="password2" type="password" class="form-control" name="password_confirmation">
				</div>

				<button type="submit" class="btn btn-default">Cadastrar</button>
			</form>
		</div>
	</div>
</div>
@endsection('content')
