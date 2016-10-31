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
                                    <div class="circle-tile-description text-faded">
                                        Clipping
                                    </div>
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
                                <a href="{{ url('/demandas') }}">
                                    <div class="circle-tile-heading green">
                                        <i class="fa fa-newspaper-o fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content green">
                                    <div class="circle-tile-description text-faded">
                                        Jornal
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        Impresso
                                    </div>
                                    <a href="{{ url('/demandas') }}" class="circle-tile-footer">Mais Informações <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="circle-tile">
                                <a href="{{ url('/deadlines') }}">
                                    <div class="circle-tile-heading orange">
                                        <i class="fa fa-at fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content orange">
                                    <div class="circle-tile-description text-faded">
                                        Web
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        e Blogs
                                    </div>
                                    <a href="{{ url('/deadlines') }}" class="circle-tile-footer">Mais Informações <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end DASHBOARD CIRCLE TILES -->



@endsection
