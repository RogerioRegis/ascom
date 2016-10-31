@extends('layouts.app')

@section('title') Novo Clipping wEB @stop

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1><i class="fa fa-paperclip"></i> Novo Clipping Web
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i>  <a href="/home">Home</a></li>
                <li class="active"><a href="{{ url('/clipping') }}">Clipping</a></li>
                <li class="active">Novo Clipping</li>
                @include('section.datahora')
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE ROW -->

@include('section.erro')

<table class="table table-bordered">
    <thead>
        <tr class="active">
            <th class="text-center" colspan="1">CLIPPING DE NOTÍCIAS</th>
        </tr>
    </thead>
</table>

<form action="{{ route('demandas.store') }}" method="POST"> 
{{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="veiculo"><i class="fa fa-at"></i> VEÍCULO</label>
                        <input type="text" class="form-control" style="text-transform:uppercase" name="veiculo">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="data"><i class="fa fa-calendar"></i> DATA</label>
                        <input type="date" class="form-control" name="data" placeholder="dd/mm/aaaa">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="link"><i class="fa fa-link"></i> LINK</label>
                        <input type="link" class="form-control" name="link" placeholder="Link Web">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">SUPERINTENDENCIA</label>
                        <select class="form-control" name="status">
                            <option>Escolha o Departamento</option>
                            <option>APE - ENGENHARIA</option>
                            <option>DCAR - DEPARTAMENTO DE CONTROLE, AVALIAÇÃO E REGULAÇÃO</option>
                            <option>DEAS - DIRETORIA EXECUTIVA DE ATENÇÃO A SAÚDE</option>
                            <option>DEVISA - DEPARTAMENTO DE VIGILÂNCIA SANITÁRIA</option>
                            <option>HCSA - HOSPITAL DA CRIANÇA SANTO ANTONIO</option>
                            <option>NID - NUCLEO DE INCLUSÃO DIGITAL</option>
                            <option>SAB - SUPERINTENDÊNCIA DE ATENÇÃO BÁSICA</option>
                            <option>SAE - SUPERINTENDÊNCIA DE ATENÇÃO ESPECIALIZADA</option>
                            <option>SAF - SUPERINTENDÊNCIA DE ASSISTÊNCIA FARMACÊUTICA</option>
                            <option>SGTES - SUPERINTENDÊNCIA DE GESTÃO DO TRABALHO E EDUCAÇÃO EM SAÚDE</option>
                            <option>SVS - SUPERINTENDÊNCIA DE VIGILÂNCIA EM SAÚDE</option>
                        </select>
                    </div>
                </div>
            </div>


        </div>
        <!-- Campo para o Objeto -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="obs">TEXTO</label>
                <textarea class="form-control" name="obs" rows="5" placeholder="Sinópse da Matéria:"></textarea>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('/clipping') }}" class="btn btn-blue">Cancelar</a>

</form>

@endsection

