@extends('layouts.app')

@section('title') Relatórios @stop

@section('content')

                    <!-- begin PAGE TITLE AREA -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title">
                                <h1>Relatórios <small>de Demandas</small></h1>
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

@endsection