@extends('layouts.default')

@section('title') Editar Controle @stop

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Editar Controle
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  <a href="/">Dashboard</a>
                </li>
                <li class="active">Controle de Contratos</li>
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

{!! Form::model($contratos, ['route' => ['contratos.update', $contratos->id], 'method' => 'PUT']) !!}

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('numero_processo', 'NÚMERO DO PROCESSO') !!}
                    {!! Form::text('numero_processo', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('origem', 'ORIGEM') !!}
                    {!! Form::text('origem', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('tipo_licitacao', 'TIPO DE LICITAÇÃO') !!}
                    {!! Form::text('tipo_licitacao', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('tipo_empenho', 'TIPO DE EMPENHO') !!}
                    {!! Form::text('tipo_empenho', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('credor', 'CREDOR') !!}
            {!! Form::text('credor', null, ['class' => 'form-control']) !!}
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('valor_global', 'VALOR') !!}
                    {!! Form::text('valor_global', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('vigencia_meses', 'VIGÊNCIA DO CONTRATO') !!}
                    {!! Form::text('vigencia_meses', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('vigencia_inicio', 'DATA INÍCIO') !!}
                    {!! Form::text('vigencia_inicio', null, ['class' => 'form-control']) !!}
                </div>

            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('vigencia_fim', 'DATA TERMINO') !!}
                    {!! Form::text('vigencia_fim', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('aditivo_1', '1º ADITIVO') !!}
                    {!! Form::text('aditivo_1', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">  
                <div class="form-group">
                    {!! Form::label('aditivo_2', '2º ADITIVO') !!}
                    {!! Form::text('aditivo_2', null, ['class' => 'form-control']) !!}
                </div>
            </div>

        </div>
    </div>
    <!-- Campo para o Objeto -->
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('objeto', 'OBJETO') !!}
            {!! Form::textarea('objeto', null, ['class' => 'form-control', 'rows' => '16']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('fical_gestor', 'FICAL(S) - GESTOR') !!}
            {!! Form::text('fical_gestor', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

{!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}

<a class="btn btn-default" href="/contratos"><i class="fa fa-reply"></i> Cancelar</a>

{!! Form::close() !!}




<!--<table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-center" colspan="1">DADOS DO PROCESSO</th>
        </tr>
    </thead>
</table>

<div class="row">
     Primeira coluna 
    <div class="col-sm-4">
        <div class="form-group">
            <label for="data_emp">DATA DO EMPENHO</label>
            <input type="date" class="form-control" name="" placeholder="Data">
        </div>
        <div class="form-group">
            <label for="number">NUMERO DO EMPENHO</label>
            <input type="text" class="form-control" name="" placeholder="Numero">
        </div>
        <div class="form-group">
            <label for="data_emp">VALOR DO EMPENHO</label>
            <input type="text" class="form-control" name="" placeholder="R$ 0,00">
        </div>
    </div>
     Fim Primeira coluna 
     Segunda coluna 
    <div class="col-sm-4">
        <div class="form-group">
            <label for="data_emp">DATA DA NOTA FISCAL</label>
            <input type="date" class="form-control" name="" placeholder="Data">
        </div>

        <div class="form-group">
            <label for="data_emp">Nº DA NOTA FISCAL</label>
            <input type="text" class="form-control" name="" placeholder="Numero">
        </div>

        <div class="form-group">
            <label for="data_emp">VALOR DA NOTA FISCAL</label>
            <input type="text" class="form-control" name="" placeholder="R$ 0,00">
        </div>
    </div>
     Segunda coluna 
     Terceira coluna 
    <div class="col-sm-4">
        <div class="form-group">
            <label for="data_emp">SALDO DO EMPENHO</label>
            <input type="text" class="form-control" name="" placeholder="Data">
        </div>
        <div class="form-group">
            <label for="data_emp">DATA DE SAÍDA DA NOTA FISCAL</label>
            <input type="date" class="form-control" name="" placeholder="Saída da Nota Fiscal">
        </div>
        <div class="form-group">
            <label for="data_emp">OBSERVAÇÃO</label>
            <input type="data" class="form-control" name="" placeholder="Observações">
        </div>
    </div>
     Fim Terceira coluna 
</div>
<button type="submit" class="btn btn-default">Salvar</button>-->



@endsection