@extends('layouts.app')

@section('title') Vizualização da Demanda @stop

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Demanda
                <small>Secretaria Municipal de Saúde</small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i>  <a href="/">Início</a>
                </li>
                <li class="active">Vizualização de Demanda</li>
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
                <h4><strong>DETALHES DA DEMANDA<strong></h4>
                            </th>
                            </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td class="text-center active"><strong>VEÍCULO</strong></td>
                                    <td class="text-center active"><strong>DATA</strong></td>
                                    <td class="text-center active"><strong>DEADLINE</strong><br>
                                </tr>
                                <tr>
                                    <td class="text-center" style="text-transform:uppercase"><strong class="text-primary">{{$demanda->veiculo}}</strong></td>
                                    <td class="text-center">{{$demanda->data}}</td>
                                    <td class="text-center">{{$demanda->deadline}}</td>
                                </tr>
                               
                                <tr>
                                    <td colspan="3" class="active"><strong>OBS: </strong>{{$demanda->obs}}</td>
                                </tr>

                            </tbody>
                            </table>

                            <br>

                            <a href="{{ url('/demandas') }}" class="btn btn-info"><i class="fa fa-reply"></i> Voltar</a>

                            <a href="{{ url('/demandas/create') }}" class="btn btn-blue" data-whatever="@getbootstrap"><i class="fa fa-plus-circle"></i> Adicionar Nova DEMANDA</a>

                            <a href="{{ url('#') }}" class="btn btn-default">Gerar <i class="fa fa-file-pdf-o"></i> PDF</a>


                            @endsection
