@extends('layouts.app')

@section('title') Editar Controle @stop

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Editar Demanda
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  <a href="/home">Home</a>
                </li>
                <li class="active">Controle de Demandas</li>
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
            <th class="text-center" colspan="1">CONTROLE DE CONTRATO</th>
        </tr>
    </thead>
</table>

{!! Form::model($demandas, ['route' => ['demandas.update', $demandas->id], 'method' => 'PUT']) !!}

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('veiculo', 'VEÍCULO') !!}
                    {!! Form::text('veiculo', null, ['class' => 'form-control']) !!}
                </div>
          
                <div class="form-group">
                    {!! Form::label('data', 'DATA') !!}
                    {!! Form::date('data', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('deadline', 'DEADLINE') !!}
                    {!! Form::time('deadline', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('status', 'STATUS') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>
    <!-- Campo para o Obseervações -->
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('obs', 'OBS:') !!}
            {!! Form::textarea('obs', null, ['class' => 'form-control', 'rows' => '6']) !!}
        </div>
    </div>
</div>

{!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}

<a class="btn btn-default" href="/demandas"><i class="fa fa-reply"></i> Cancelar</a>

{!! Form::close() !!}



@endsection