@extends('layouts.auth')

@section('title') Login @stop

@section('content')

<br>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <br>
        <div class="text-center text-with" style="color: #fff">
        <h1><i class="fa fa-comments"></i> ASCOM - SMSA</h1>
        Assessoria de Comunicação</div><br>
        
        @include('section.erro')
        
        <div class="portlet portlet-green">
            <div class="portlet-heading login-heading">
                <div class="portlet-title">
                    <h4><strong>Entrar no SIGESCON!</strong>
                    </h4>
                </div>
                <div class="portlet-widgets">
                    <button class="btn btn-white btn-xs" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fa fa-plus-circle"></i> Novo Usuário</button>
                </div>
                <div class="clearfix"></div>
            </div>


            <div class="portlet-body">
                <form  method="POST" action="{{ url('/login') }}" accept-charset="UTF-8" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me"> Lembre-me
                            </label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-lg btn-green btn-block">Login</button>
                    </fieldset>
                    <br>
                    <p class="small">
                        <a href="{{ url('/password/reset') }}">Esqueceu sua Senha?</a>
                    </p>
                </form>
            </div>
        </div>
        <div class="text-center text-with" style="color: #fff">Secretaria Municipal de Saúde</div>
    </div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Registro de Novo Usuário</h4>
            </div>
            <div class="modal-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirma Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

@endsection
