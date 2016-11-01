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


                    @include('section.dashclipping')


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
                                <th>LINK</th>
                                <th>SUPERINTENDÊNCIA</th>
                                <th></th>
                            </tr>
                        </thead>


                        <tbody>

                            @foreach($clippingweb as $clipping)

                            <tr class="odd gradeX">
                                <td style="text-transform:uppercase"><a href="{{ route('clippingweb.show', $clipping->id) }}">{{$clipping->veiculo}}</a></td>
                                <td>{{$clipping->data}}</td>
                                <td>{{$clipping->link}}</td>
                                <td class="center"><button class="btn btn-xs btn-{{$clipping->status}}">Status da Critica</button></td>
                                <td class="center">
                                    <a href="clippingweb/{{ $clipping->id }}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit"> </i> Editar</a>
                                    <a href="{{ route('clippingweb.show', $clipping->id) }}" class="btn btn-success btn-xs"><i class="fa fa-eye">  </i> Vizualizar</a>
                                    <a data-toggle="modal" data-target=".bs-example-modal-sm" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Excrluir
                                    <!--<a href="{{ url('clippingweb', $clipping->id) }}" data-method="DELETE" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Excrluir-->
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
