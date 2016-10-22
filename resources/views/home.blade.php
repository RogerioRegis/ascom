@extends('layouts.app')

@section('content')

                    <!-- begin PAGE TITLE AREA -->
                    <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title">
                                <h1>Painel de Instrumentos
                                    <small>Visão Geral do Conteúdo</small>
                                </h1>
                                <ol class="breadcrumb">
                                    <li class="active"><i class="fa fa-home"></i> Home</li>
                                    <li class="pull-right">
                                        <div class="btn btn-green btn-square date-picker">

                                            <i class="fa fa-calendar"></i>

                                            <script language="JavaScript">
                                                document.write("<font color='#fff' size='3' face='arial'>")
                                                var mydate = new Date()
                                                var year = mydate.getYear()
                                                if (year < 2000)
                                                    year += (year < 1900) ? 1900 : 0
                                                var day = mydate.getDay()
                                                var month = mydate.getMonth()
                                                var daym = mydate.getDate()
                                                if (daym < 10)
                                                    daym = "0" + daym
                                                var dayarray = new Array("Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado")
                                                var montharray = new Array(" de Janeiro de ", " de Fevereiro de ", " de Março de ", "de Abril de ", "de Maio de ", "de Junho de", "de Julho de ", "de Agosto de ", "de Setembro de ", " de Outubro de ", " de Novembro de ", " de Dezembro de ")
                                                document.write("   " + dayarray[day] + ", " + daym + " " + montharray[month] + year + " ")
                                                document.write("</b></i></font>")
                                            </script>

                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <!-- end PAGE TITLE AREA -->

                    <!-- begin DASHBOARD CIRCLE TILES -->
                    <div class="row">
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile">
                                <a href="/home">
                                    <div class="circle-tile-heading dark-blue">
                                        <i class="fa fa-users fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content dark-blue">
                                    <div class="circle-tile-description text-faded">
                                        Users
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        Usuários
                                        <span id="sparklineA"></span>
                                    </div>
                                    <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile">
                                <a href="#">
                                    <div class="circle-tile-heading green">
                                        <i class="fa fa-bullhorn fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content green">
                                    <div class="circle-tile-description text-faded">
                                        Revenue
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        Demandas
                                    </div>
                                    <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile">
                                <a href="#">
                                    <div class="circle-tile-heading orange">
                                        <i class="fa fa-bell fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content orange">
                                    <div class="circle-tile-description text-faded">
                                        Alerts
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        DeadLine
                                    </div>
                                    <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile">
                                <a href="#">
                                    <div class="circle-tile-heading blue">
                                        <i class="fa fa-microphone fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content blue">
                                    <div class="circle-tile-description text-faded">
                                        Tasks
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        Entrevistas
                                        <span id="sparklineB"></span>
                                    </div>
                                    <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile">
                                <a href="#">
                                    <div class="circle-tile-heading red">
                                        <i class="fa fa-file-pdf-o fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content red">
                                    <div class="circle-tile-description text-faded">
                                        Orders
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        Relatórios
                                        <span id="sparklineC"></span>
                                    </div>
                                    <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile">
                                <a href="#">
                                    <div class="circle-tile-heading purple">
                                        <i class="fa fa-comments fa-fw fa-3x"></i>
                                    </div>
                                </a>
                                <div class="circle-tile-content purple">
                                    <div class="circle-tile-description text-faded">
                                        Mentions
                                    </div>
                                    <div class="circle-tile-number text-faded">
                                        Mencionados
                                        <span id="sparklineD"></span>
                                    </div>
                                    <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end DASHBOARD CIRCLE TILES -->
    
@endsection
