@extends('layouts.app')

@section('title') Celendario @stop

@section('content')

               <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Calendário <small>Agenda de Eventos e Entrevistas</small></h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="/"> Home </a></li> <li class="active"> Celendario </li>
                                    @include('section.datahora')
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->


                <div class="row">

                    <div class="col-lg-8">
                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4>Calendar</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-8 -->

                    <div class="col-lg-4">
                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4>Draggable Events</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="portlet-body">
                                <div id='external-events'>
                                    <div class='external-event'>Lunch</div>
                                    <div class='external-event'>Meeting</div>
                                    <div class='external-event'>Break</div>
                                    <div class='external-event'>Client</div>
                                    <div class='external-event'>Interview</div>
                                    <p>
                                        <input type='checkbox' id='drop-remove' />
                                        <label for='drop-remove'>Remove After Drop</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->

                </div>
                <!-- /.row -->


    
@endsection
