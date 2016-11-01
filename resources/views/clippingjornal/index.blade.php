@extends('layouts.app')

@section('title') Clipping @stop

@section('content')

                    <!-- begin PAGE TITLE AREA -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title">
                                <h1>Clipping <small>da Imprensa</small></h1>
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
                   
                    @include('section.dashclipping')

@endsection
