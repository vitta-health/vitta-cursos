@extends('app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">JÁ SOU CADASTRADO</h3>
                </div>
                <div class="panel-body">
                    <form action="{{ url('login') }}" method="POST">
                        {!! csrf_field() !!}
                       
                         <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input id="password" type="password" class="form-control" name="password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Continuar conectado
                            </label>
                        </div>

                        <button type="submit" class="btn btn-default">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">QUERO ME CADASTRAR</h3>
                </div>
                <div class="panel-body">
                    <br/> <br/> </br>
                    Cadastrar é rápido e fácil! Comece agora <br/><br/>
                    <a href="{{ url('cadastrar') }}" class="btn btn-default">Cadastre-se</a>
                    <br/> <br/> <br/><br/> <br/>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection('content')
