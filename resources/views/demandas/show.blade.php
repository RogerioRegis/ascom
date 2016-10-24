@extends('layouts.default')

@section('title') Vizualização do Controle @stop

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Auditoria
                <small>Secretaria Municipal de Saúde</small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i>  <a href="/">Início</a>
                </li>
                <li class="active">Vizualização de Controle</li>
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE ROW -->

<!--Tabela de Contrato-->
<table class="table table-bordered">
    <thead>
        <tr class="active">
            <th colspan="4" class="text-center">
                <h4><strong>CONTROLE DE CONTRATO<strong></h4>
                            </th>
                            </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td class="text-center active"><strong>NUMERO</strong></td>
                                    <td class="text-center active"><strong>ORIGEM</strong></td>
                                    <td class="text-center active"><strong>OBJETO</strong><br>
                                </tr>
                                <tr>
                                    <td class="text-center"><strong class="text-primary">{{$contrato->numero_processo}}</strong></td>
                                    <td class="text-center">{{$contrato->origem}}</td>
                                    <td rowspan="9">{{$contrato->objeto}}</td>
                                </tr>

                                <tr class="text-center">
                                    <td colspan="2" class="active"><strong>MODALIDADE</strong></td>
                                </tr>

                                <tr class="text-center">
                                    <td class="active"><strong>LICITAÇÃO</strong></td>
                                    <td class="active"><strong>EMPENHO</strong></td>
                                </tr>

                                <tr class="text-center">
                                    <td>{{$contrato->aditivo_1}}</td>
                                    <td>{{$contrato->aditivo_2}}</td>
                                </tr>

                                <tr>
                                    <td colspan="2" class="active">
                                        <strong>CREDOR: </strong>{{$contrato->aditivo_1}}</td>
                                </tr>

                                <tr>
                                    <td><strong>VALOR: </strong></td>
                                    <td><strong>VIGÊNCIA: </strong>{{$contrato->aditivo_1}}</td> Meses 
                                </tr>
                                <tr>
                                    <td>{{$contrato->aditivo_1}}</td>
                                    <td class="text-center">{{$contrato->aditivo_1}} a {{$contrato->aditivo_1}}</td>
                                </tr>
                                <tr>
                                    <td class="text-center active"><strong>1º ADITIVO</strong></td>
                                    <td class="text-center active"><strong>2º ADITIVO</strong></td>
                                </tr>
                                <tr>
                                    <td>{{$contrato->aditivo_1}}</td>
                                    <td>{{$contrato->aditivo_2}}</td>
                                </tr>
                                <tr>
                                    <td colspan="1" class="active"><strong>FISCAL(S) GFESTOR</strong></td>
                                    <td colspan="2">{{$contrato->aditivo_1}}</td>
                                </tr>

                            </tbody>
                            </table>


                            <!--Tabela de Dados-->

                            <table class="table table-bordered">
                                <thead>
                                    <tr class="active"><th colspan="10" class="text-center">DADOS DO PROCESSO</th></tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td colspan="3" class="active">EMPENHO</td>
                                        <td colspan="3" class="active">NOTA</td>
                                        <td colspan="1" class="active">SALDO</td>
                                        <td class="active">SAIDA</td>
                                        <td class="active" rowspan="2"><br>OBSERVAÇÃO</td>
                                    </tr>
                                    <tr>
                                        <td class="active text-center">DATA</td>
                                        <td class="active text-center">Nº</td>
                                        <td class="active text-center">VALOR</td>
                                        <td class="active text-center">DATA</td>
                                        <td class="active text-center">Nº</td>
                                        <td class="active text-center">VALOR</td>
                                        <td class="active text-center">EMPENHO</td>
                                        <td class="active text-center">NOTA FISCAL</td>
                                    </tr>

                                    @unless($contrato->dado->isEmpty())

                                    @foreach($contrato->dado as $dado)

                                    <tr class=" text-center">
                                        <td>{{$dado->data_empenho}}</td>
                                        <td>{{$dado->numero_empenho}}</td>
                                        <td>{{$dado->valor_empenho}}</td>

                                        <td>{{$dado->data_nf}}</td>
                                        <td>{{$dado->numero_nf}}</td>
                                        <td>{{$dado->valor_nf}}</td>

                                        <td>{{$dado->saldo}}</td>
                                        <td>{{$dado->data_saida}}</td>
                                        <td>{{$dado->obs}}</td>
                                    </tr> 

                                    @endforeach

                                    @endunless

                                </tbody>
                            </table>
                            <br>

                            <a href="{{ url('contratos') }}" class="btn btn-info"><i class="fa fa-reply"></i> Voltar</a>

                            <!--<a href="{{ url('dados/create') }}" class="btn btn-blue">Adicionar Dados ao PROCESSO <strong>+</strong> <i class="fa fa-database"></i></a>-->

                            <button class="btn btn-blue" data-toggle="modal" data-target="#dadosModal" data-whatever="@getbootstrap"><i class="fa fa-plus-circle"></i> Adicionar Dados ao PROCESSO</button>

                            <a href="{{ url('#') }}" class="btn btn-default">Gerar <i class="fa fa-file-pdf-o"></i> PDF</a>


                            <div class="modal fade bs-example-modal-lg" id="dadosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="exampleModalLabel">ADICIONAR DADOS AO PROCESSO</h4>
                                        </div>
                                        <div class="modal-body">

                                            @inject('dados', 'App\Dado')

                                            <!--{!! Form::model(['route' => 'dados.store']) !!}-->
                                            {!! Form::open(['route' => 'dados.store']) !!}

                                            <div class="row">
                                                <!-- Primeira coluna -->
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        {!! Form::label('data_empenho', 'DATA DO EMPENHO') !!}
                                                        {!! Form::date('data_empenho', null, ['class' => 'form-control', 'placeholder' => 'Data do Empenho']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('data_nf', 'DATA DA NOTA FISCAL') !!}
                                                        {!! Form::date('data_nf', null, ['class' => 'form-control', 'placeholder' => 'Data da NF']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('saldo', 'SALDO DO EMPENHO') !!}
                                                        {!! Form::text('saldo', null, ['class' => 'form-control', 'placeholder' => 'Saldo do Empenho']) !!}   
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('valor_empenho', 'VALOR DO EMPENHO') !!}
                                                        {!! Form::text('valor_empenho', null, ['class' => 'form-control', 'placeholder' => 'Valor do Empenho']) !!}
                                                    </div>
                                                </div>
                                                <!-- Fim Primeira coluna -->
                                                <!-- Segunda coluna -->
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        {!! Form::label('numero_empenho', 'NUMERO DO EMPENHO') !!}
                                                        {!! Form::text('numero_empenho', null, ['class' => 'form-control', 'placeholder' => 'Numero do Empenho']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('numero_nf', 'NÚMERO DA NOTA FISCAL') !!}
                                                        {!! Form::text('numero_nf', null, ['class' => 'form-control', 'placeholder' => 'Numero da NF']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('data_saida', 'SAÍDA DA NOTA FISCAL') !!}
                                                        {!! Form::date('data_saida', null, ['class' => 'form-control', 'placeholder' => 'Data de Saída']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('valor_nf', 'VALOR DA NOTA FISCAL') !!}
                                                        {!! Form::text('valor_nf', null, ['class' => 'form-control', 'placeholder' => 'Valor da NF']) !!}
                                                    </div>
                                                </div>
                                                <!-- Segunda coluna -->
                                                <!-- Terceira coluna -->
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        {!! Form::label('obs', 'OBSERVAÇÃO') !!}
                                                        {!! Form::text('obs', null, ['class' => 'form-control', 'placeholder' => 'Obs:']) !!}
                                                    </div>
                                                </div>
                                                <!-- Fim Terceira coluna -->

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        {!! Form::label('{{$contrato->id}}', 'Será adicionado no: ') !!}
                                                        {!! Form::text('{{$contrato->id}}', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>

                                            </div>


                                            {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                                            {!! Form::close() !!}


                                        </div> 
                                    </div>
                                </div>
                            </div>



                            @endsection
