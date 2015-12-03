@extends('layouts.public')
​
@section('title', 'Autores')

@section('content')
	<h2>Autores</h2>
	<hr>
	@foreach($autores as $autor)
		<a href="/autores/{{ $autor->id }}">
			<img src="{{ $autor->foto }}">
		</a>
	@endforeach
@stop
