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
                <h4><strong>CONTROLE DE CONTRATO<strong></h4>
                            </th>
                            </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td class="text-center active"><strong>VEÍCULO</strong></td>
                                    <td class="text-center active"><strong>DATA</strong></td>
                                    <td class="text-center active"><strong>LINK</strong><br>
                                </tr>
                                <tr>
                                    <td class="text-center" style="text-transform:uppercase"><strong class="text-primary">{{$clippingweb->veiculo}}</strong></td>
                                    <td class="text-center">{{$clippingweb->data}}</td>
                                    <td class="text-center">{{$clippingweb->link}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center active"><strong>CLASSIFICAÇÃO:</strong> <i class="fa fa-thumbs-{{$clippingweb->critica}} fa-2x text-blue"></i></td>
                                    <td class="text-center active"><strong>SUPERINTENDENCIA:</strong> {{$clippingweb->superintendencia}}</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="active"><strong>SINÓPSE: </strong>{{$clippingweb->texto}}</td>
                                </tr>

                            </tbody>
                            </table>

                            <br>

                            <a href="{{ url('/clippingweb') }}" class="btn btn-info"><i class="fa fa-reply"></i> Voltar</a>

                            <a href="{{ url('/clippingweb/create') }}" class="btn btn-blue" data-whatever="@getbootstrap"><i class="fa fa-plus-circle"></i> NOVO CLIPPING</a>

                            <a href="{{ $clippingweb->id }}/edit" class="btn btn-default"><i class="fa fa-edit"> </i> Editar</a>

                            @endsection
