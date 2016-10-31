@extends('layouts.app')

@section('title') Demandas @stop

@section('content')

                    <!-- begin PAGE TITLE AREA -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title">
                                <h1>Demandas <small>da Imprensa</small></h1>
                                <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="/"> Home </a></li> <li class="active"> Demandas </li>
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
        <div class="portlet portlet-default">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>Dados das Demandas</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table id="example-table" class="table table-striped table-bordered table-hover table-green">

                        <thead>
                            <tr>
                                <th>VEÍCULO</th>
                                <th>DATA</th>
                                <th>DEAD LINE</th>
                                <th>STATUS</th>
                                <th></th>
                            </tr>
                        </thead>


                        <tbody>

                            @foreach($demandas as $demanda)

                            <tr class="odd gradeX">
                                <td style="text-transform:uppercase"><a href="{{ route('demandas.show', $demanda->id) }}">{{$demanda->veiculo}}</a></td>
                                <td>{{$demanda->data}}</td>
                                <td>{{$demanda->deadline}}</td>
                                <td class="center"><button class="btn btn-xs btn-{{$demanda->status}}">Status da Demanda</button></td>
                                <td class="center">
                                    <a href="demandas/{{ $demanda->id }}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit"> </i> Editar</a>
                                    <a href="{{ route('demandas.show', $demanda->id) }}" class="btn btn-success btn-xs"><i class="fa fa-eye">  </i> Vizualizar</a>
                                    <a data-toggle="modal" data-target=".bs-example-modal-sm" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Excrluir
                                    <!--<a href="{{ url('demandas', $demanda->id) }}" data-method="DELETE" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Excrluir-->
                                    </a>
                                </td>
                            </tr>

                            @endforeach

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

<a class="btn btn-green" href="{{ route('demandas.create') }}">Nova Demanda + <span class="fa fa-bullhorn"></span></a>

    
@endsection
