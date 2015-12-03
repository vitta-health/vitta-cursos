@extends('layouts.public')
​
@section('title', 'Model')
​
@section('content')
	<h2>{{ $autor->nome }}</h2>
	<hr>
	<div class="col-md-4">
		<img src="{{ $autor->foto }}">
	</div>
	<div class="col-md-8">
		<p>{{ $autor->nome }}</p>
		<p>{{ $autor->sobrenome }}</p>
		<p>{{ $autor->telefone }}</p>
		<p>{{ $autor->email }}</p>
	</div>
@stop
