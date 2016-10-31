@extends('layouts.app')

@section('title') Clipping Web @stop

@section('content')

                    <!-- begin PAGE TITLE AREA -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title">
                                <h1>Clipping <small>da Internet</small></h1>
                                <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="/"> Home </a></li>
                                    <li class="active"><a href="/clipping">Clipping</a></li>
                                    <li class="active"> Clipping Web </li>
                                    @include('section.datahora')
                                </ol>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <!-- end PAGE TITLE AREA -->

                   
                    <!-- begin DASHBOARD CIRCLE TILES -->
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="circle-tile">
                                <a href="{{ url('/clipping/create') }}">
                                    <div class="circle-tile-heading dark-blue">
                                        <i class="fa fa-television fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content dark-blue">
                                    <div class="circle-tile-number text-faded">
                                        Rádio e TV
                                        <span id="sparklineA"></span>
                                    </div>
                                    <a href="{{ url('/perfil') }}" class="circle-tile-footer">Mais Informações <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="circle-tile">
                                <a href="{{ url('/clipping') }}">
                                    <div class="circle-tile-heading green">
                                        <i class="fa fa-newspaper-o fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content green">
                                    <div class="circle-tile-number text-faded">
                                        Jornal Impresso
                                    </div>
                                    <a href="{{ url('/demandas') }}" class="circle-tile-footer">Mais Informações <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="circle-tile">
                                <a href="{{ url('/clipping/create') }}">
                                    <div class="circle-tile-heading orange">
                                        <i class="fa fa-at fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content orange">
                                    <div class="circle-tile-number text-faded">
                                        Web e Blogs
                                    </div>
                                    <a href="{{ url('/deadlines') }}" class="circle-tile-footer">Mais Informações <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end DASHBOARD CIRCLE TILES -->



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
                                <th>LINK</th>
                                <th>SUPERINTENDÊNCIA</th>
                                <th></th>
                            </tr>
                        </thead>


                        <tbody>

                            @foreach($clippingweb as $clipping)

                            <tr class="odd gradeX">
                                <td style="text-transform:uppercase"><a href="{{ route('demandas.show', $demanda->id) }}">{{$clipping->veiculo}}</a></td>
                                <td>{{$clipping->data}}</td>
                                <td>{{$clipping->link}}</td>
                                <td class="center"><button class="btn btn-xs btn-{{$demanda->status}}">Status da Demanda</button></td>
                                <td class="center">
                                    <a href="demandas/{{ $clipping->id }}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit"> </i> Editar</a>
                                    <a href="{{ route('clipping.show', $demanda->id) }}" class="btn btn-success btn-xs"><i class="fa fa-eye">  </i> Vizualizar</a>
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

<a class="btn btn-green" href="{{ route('clippingweb.create') }}">Novo Clipping + <span class="fa fa-paperclip"></span></a>



@endsection
