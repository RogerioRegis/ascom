@extends('layouts.app')

@section('title') Nova Demandas @stop

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Nova Demanda
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i>  <a href="/home">Home</a></li>
                <li class="active"><a href="/demandas">Demandas</a></li>
                <li class="active">Nova Demanda</li>
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
            <th class="text-center" colspan="1">CONTROLE DE CONTRATO</th>
        </tr>
    </thead>
</table>

<form action="{{ route('demandas.store') }}" method="POST">
    <?= csrf_field(); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="numero_processo">Número do PROCESSO</label>
                        <input type="text" class="form-control" name="numero_processo" placeholder="00/ano/local/vol">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="origem">ORIGEM</label>
                        <input type="text" class="form-control" name="origem" placeholder="Departamento">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tipo_licitacao">LICITAÇÃO</label>
                        <select class="form-control" name="tipo_licitacao">
                            <option>Escolha um tipo</option>
                            <option>ADESÃO A ARP</option>
                            <option>TIPO 2</option>
                            <option>TIPO 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nome">EMPENHO</label>
                        <select class="form-control" name="tipo_empenho">
                            <option>Escolha um tipo</option>
                            <option>GLOBAL</option>
                            <option>TIPO 2</option>
                            <option>TIPO 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="nome">CREDOR</label>
                <input type="text" class="form-control" name="credor" placeholder="Razão Social">
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">VALOR</label>
                        <input type="text" class="form-control" name="valor_global" placeholder="R$ 0,00">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">VIGÊNCIA DO CONTRATO</label>
                        <input type="text" class="form-control" name="vigencia_meses" placeholder="Em Meses">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="data">DATA INÍCIO</label>
                        <input type="date" class="form-control" name="vigencia_inicio" placeholder="Início">
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="data">DATA TERMINO</label>
                        <input type="date" class="form-control" name="vigencia_fim" placeholder="Término">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="adtive">1º ADITIVO</label>
                        <input type="text" class="form-control" name="aditivo_1" placeholder="1º aditivo">
                    </div>
                </div>
                <div class="col-md-6">  
                    <div class="form-group">
                        <label for="adtive">2º ADITIVO</label>
                        <input type="text" class="form-control" name="aditivo_2" placeholder="2º aditivo">
                    </div>
                </div>
            </div>
        </div>
        <!-- Campo para o Objeto -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="mensagem">OBJETO</label>
                <textarea class="form-control" name="objeto" rows="16" placeholder="Contratação - Forma - Quantitativo - Preço"></textarea>
            </div>
            <div class="form-group">
                <label for="adtive">FICAL(S) - GESTOR</label>
                <input type="text" class="form-control" name="fical_gestor" placeholder="Fiscal(s) Gestor(s)">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('demandas') }}" class="btn btn-blue">Cancelar</a>

</form>

@endsection

