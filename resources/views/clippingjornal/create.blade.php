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

<form action="{{ route('clippingjornal.store') }}" method="POST"> 
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="veiculo"><i class="fa fa-newspaper-o"></i> VEÍCULO </label>
                        <input type="text" class="form-control" style="text-transform:uppercase" name="veiculo">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="data"><i class="fa fa-calendar"></i> DATA </label>
                        <input type="date" class="form-control" name="data" placeholder="dd/mm/aaaa">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="editoria"><i class="fa fa-edit"></i> EDITORIA </label>
                        <input type="text" class="form-control" name="editoria" placeholder="Editoria">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="critica"><i class="fa fa-thumbs-o-up"></i> CLASSIFICAÇÃO </label>
                        <select class="form-control" name="critica">
                            <option value="up"> POSITIVO </option>
                            <option value="dawn text-red"> NEGATIVO </option>
                            <option value="o-up"> NEUTRA </option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
        <!-- Campo para o Objeto -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="texto"><i class="fa fa-file-text-o"></i> ASSUNTO </label>
                <textarea class="form-control" name="texto" rows="5" placeholder="Sinópse:"></textarea>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('/clippingjornal') }}" class="btn btn-blue">Cancelar</a>

</form>

@endsection

