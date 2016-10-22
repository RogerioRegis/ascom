@extends('layouts.auth')

@section('content')

<br>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-banner text-center">
            <h1><i class="fa fa-comments"></i> ASCOM - SMSA</h1>
            Assessoria de Comunicação
        </div>
        
        
        
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
        <div class="login-banner text-center">
        NID - Núcleo de Inclusão Digital<br>Secretaria Municipal de Saúde
        </div>
    </div>
</div>
</div>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Envie um solicitação</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nome:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Telefone:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">E-mail:</label>
                        <input type="email" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Mensagem:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>

@endsection
