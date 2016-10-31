@extends('layouts.auth')

@section('title') Redefinir Senha @stop

<!-- Main Content -->
@section('content')


<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <ol class="breadcrumb">
               
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE ROW -->

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <!-- Basic Form Example -->
        <div class="col-lg-12">

            <div class="conteiner">
    </div>            
            <div class="portlet portlet-green">
                <div class="portlet-heading">
                    <div class="portlet-title">
                        <h3>Redefinir Senha <i class="fa fa-refresh"></i></h3>
                    </div>
                    <div class="portlet-widgets">
                        <a data-toggle="collapse" data-parent="#accordion" href="#basicFormExample"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="basicFormExample" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <!-- resources/views/auth/register.blade.php -->

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Seu E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar Link e Redefinir Senha
                                </button>
                            </div>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
            <!-- /.portlet -->
        </div>
        <!-- /.col-lg-12 (nested) -->
        <!-- End Basic Form Example -->
    </div>
</div>

@endsection
