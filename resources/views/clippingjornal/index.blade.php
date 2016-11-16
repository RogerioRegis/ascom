@extends('layouts.app')

@section('title') Clipping Jornal @stop

@section('content')

<!-- begin PAGE TITLE AREA -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Clipping <small>Jornal Imprensso</small></h1>
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

<div class="row">
    <div class="col-lg-12">
        <div class="circle-tile">
            <a href="{{ url('/clippingjornal/create') }}">
                <div class="circle-tile-heading green">
                    <i class="fa fa-newspaper-o fa-fw fa-3x"></i>
                </div>
            </a>
            <div class="circle-tile-content green">
                <div class="circle-tile-number text-faded">
                    Jornal Impresso
                </div>
                <a href="{{ url('/clippingjornal') }}" class="circle-tile-footer">Mais Informações <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- begin ADVANCED TABLES ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="portlet portlet-default">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>Clipping Web e Blog</h4>
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
                                <th>EDITORIA</th>
                                <th class="text-center">CLASSIFICAÇÃO</th>
                                <th></th>
                            </tr>
                        </thead>


                        <tbody>

                            @foreach($clippingjornal as $clipping)

                            <tr class="odd gradeX">
                                <td style="text-transform:uppercase"><a href="{{ route('clippingjornal.show', $clipping->id) }}">{{$clipping->veiculo}}</a></td>
                                <td>{{$clipping->data}}</td>
                                <td>{{$clipping->editoria}}</td>
                                <td class="text-center"><i class="fa fa-thumbs-{{$clipping->critica}} fa-2x text-blue"></i></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="clippingjornal/{{ $clipping->id }}/edit" class="btn btn-default btn-xs btn-block"><i class="fa fa-edit"> </i> Editar</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ route('clippingjornal.show', $clipping->id) }}" class="btn btn-success btn-xs btn-block"><i class="fa fa-eye">  </i> Vizualizar</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a data-toggle="modal" data-target=".bs-example-modal-sm" class="btn btn-danger btn-xs btn-block"> <i class="fa fa-trash"></i> Excrluir</a>
                                        </div>
                                    </div>
                                        <!--<a href="clippingjornal/{{ $clipping->id }}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit"> </i> Editar</a>
                                        <a href="{{ route('clippingjornal.show', $clipping->id) }}" class="btn btn-success btn-xs"><i class="fa fa-eye">  </i> Vizualizar</a>
                                        <a data-toggle="modal" data-target=".bs-example-modal-sm" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Excrluir</a>
                                        <a href="{{ url('clippingjornal', $clipping->id) }}" data-method="DELETE" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Excrluir</a>-->
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

<a class="btn btn-green" href="{{ route('clippingjornal.create') }}">Novo Clipping + <span class="fa fa-newspaper-o"></span></a>

@endsection