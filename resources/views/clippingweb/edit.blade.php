@extends('layouts.app')

@section('title') Editar Clipping Web @stop

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1><i class="fa fa-edit"></i> Editar Clipping Web
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  <a href="/home">Home</a></li>
                <li class="active">Edição de Clipping Web</li>
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE ROW -->


<table class="table table-bordered">
    <thead>
        <tr class="active">
            <th class="text-center" colspan="1">CLIPPING DE NOTÍCIAS</th>
        </tr>
    </thead>
</table>

@include('section.erro')

{!! Form::model($clippingweb, ['route' => ['clippingweb.update', $clippingweb->id], 'method' => 'PUT']) !!}

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('veiculo', 'VEÍCULO') !!}
                        {!! Form::text('veiculo', null, ['class' => 'form-control', 'style="text-transform:uppercase"', 'autofocus']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('data', 'DATA') !!}
                        {!! Form::date('data', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('link', 'LINK') !!}
                        {!! Form::url('link', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('superintendencia', 'SUPERINTENDENCIA') !!}
                        {!! Form::text('superintendencia', null, ['class' => 'form-control', 'style="text-transform:uppercase"']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="critica" class="text-red"><i class="fa fa-thumbs-o-up"></i> CLASSIFICAÇÃO</label>
                        <select class="form-control" name="critica">
                            <option value="up"> POSITIVA</option>
                            <option value="down text-red"> NEGATIVA</option>
                            <option value="o-up"> NEUTRA</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('titulo', 'TÍTULO') !!}
                        {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('texto', 'TEXTO:') !!}
                {!! Form::textarea('texto', null, ['class' => 'form-control', 'rows' => '12']) !!}
            </div>
        </div>
    </div>

{!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}

<a class="btn btn-default" href="/clippingweb"><i class="fa fa-reply"></i> Cancelar</a>

{!! Form::close() !!}

@endsection