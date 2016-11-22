@extends('layouts.app')

@section('title') Relatórios @stop

@section('content')

 <!-- begin PAGE TITLE AREA -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>RELATÓRIO <small>da ASCOM - SMSA</small></h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/"> Home </a></li> <li class="active"> Relatórios </li>
                @include('section.datahora')
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE AREA -->

<!-- begin ADVANCED TABLES ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="portlet portlet-blue">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>Lista de Relatórios</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table id="example-table" class="table table-striped table-bordered table-hover table-blue">

                        <thead>
                            <tr>
                                <th>MÊS</th>
                                <th>RELATÓRIO</th>
                                <th class="text-center">VISUALIZAR</th>
                                <th class="text-center">BAIXAR</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="odd gradeX">
                                <td>Novembro</td>
                                <td>Relatório Geral</td>
                                <td><a href="crear_reporte_porpais/1" target="_blank" class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Vizualizar</a></td>
                                <td><a href="crear_reporte_porpais/2" target="_blank" class="btn btn-green"><i class="fa fa-download"></i> Download</a></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.portlet-body -->
        </div>
        <!-- /.portlet -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<a class="btn btn-blue" href="{{ route('relatorios.create') }}">NOVO RELATÓRIO + <span class="fa fa-file-pdf-o"></span></a>

@endsection