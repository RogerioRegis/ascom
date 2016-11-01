@extends('layouts.app')

@section('title') Home @stop

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
                @include('section.datahora')
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE AREA -->

@include('section.dashboard')

@endsection
