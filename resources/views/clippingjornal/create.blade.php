@extends('layouts.app')

@section('title') Novo Clipping Jornal @stop

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1><i class="fa fa-newspaper-o"></i> Novo Clipping Jornal Impresso
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i>  <a href="/home">Home</a></li>
                <li class="active"><a href="/clipping">Clipping</a></li>
                <li class="active">Novo Clipping Jornal Impresso</li>
                @include('section.datahora')
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE ROW -->

@include('section.erro')

<table class="table table-bordered">
    <thead>
        <tr class="active">
            <th class="text-center" colspan="1">Clipping de Notícias</th>
        </tr>
    </thead>
</table>

<form action="{{ route('demandas.store') }}" method="POST"> 
{{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="veiculo"><i class="fa fa-newspaper-o"></i> VEÍCULO</label>
                        <input type="text" class="form-control" style="text-transform:uppercase" name="veiculo">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="data"><i class="fa fa-calendar"></i> DATA</label>
                        <input type="date" class="form-control" name="data" placeholder="dd/mm/aaaa">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="editorial"><i class="fa fa-edit"></i> EDITORIAL</label>
                        <input type="text" class="form-control" name="editorial" placeholder="Editorial">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status"><i class="fa fa-thumbs-o-up"></i> CLASSIFICAÇÃO</label>
                        <select class="form-control" name="status">
                            <option value="up"><strong class="text-red">POSITIVO</strong></option>
                            <option value="dawn"><strong class="text-success">NEGATIVO</strong></option>
                            <option value="o-up"><strong class="text-success">NEUTRA</strong></option>
                        </select>
                    </div>
                </div>
            </div>


        </div>
        <!-- Campo para o Objeto -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="sinopse"><i class="fa fa-file-text-o"></i> TEXTO</label>
                <textarea class="form-control" name="sinopse" rows="5" placeholder="Sinópse:"></textarea>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('/clippingjornal') }}" class="btn btn-blue">Cancelar</a>

</form>

@endsection

