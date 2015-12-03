@extends('layouts.public')
​
@section('title', 'Autor')
​
@section('content')
	<form method="POST" action="/autores">
    	<input type="hidden" name="_method" value="POST">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    	
    	<input type="text" name="nome">
    	<input type="text" name="sobrenome">
    	<input type="text" name="telefone">
    	<input type="text" name="email">

    	<input type="submit">
	</form>
@stop
