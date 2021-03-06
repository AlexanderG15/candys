@if(Auth::guest())

@extends('layouts.app')

@section('content')
<div class="container">
<br><br><br><br><br>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">

            <div class="login-panel panel panel-default">
                <div class="panel-heading">Iniciar Sesión</div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Usuario" name="user" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                            </div>

                            <button class="btn btn-primary">Entrar</button>
                        </fieldset>
                    </form><br>
                    <p class="text-center"><small> © 2016 - Condominio Candys II </small></p>
                </div>
            </div>


        </div><!-- /.col-->
    </div><!-- /.row -->
</div>
@endsection

@else
@endif
