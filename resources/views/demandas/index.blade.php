@extends('layouts.app')

@section('content')

                    <!-- begin PAGE TITLE AREA -->
                    <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title">
                                <h1>Demandas
                                    <small>da Imprensa</small>
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



    
@endsection
