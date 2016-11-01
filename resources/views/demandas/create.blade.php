@extends('layouts.app')

@section('title') Nova Demandas @stop

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Nova Demanda
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i>  <a href="/home">Home</a></li>
                <li class="active"><a href="/demandas">Demandas</a></li>
                <li class="active">Nova Demanda</li>
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
            <th class="text-center" colspan="1">FORMULÁRIO DE DEMANDA</th>
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
                        <label for="veiculo"><i class="fa fa-bullhorn"></i> VEÍCULO</label>
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
                        <label for="deadline"><i class="fa fa-clock-o"></i> DEAD LINE</label>
                        <input type="time" class="form-control" name="deadline" placeholder="Hora Limite">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status"><i class="fa fa-bell-o"></i> STATUS</label>
                        <select class="form-control" name="status">
                            <option value="orange"><strong class="text-red">EM ABERTO</strong></option>
                            <option value="green"><strong class="text-success">EXECULTADO</strong></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Campo para o Objeto -->
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="obs"><i class="fa fa-file-text-o"></i> ASSUNTO</label>
                <textarea class="form-control" name="obs" rows="5" placeholder="Obs:"></textarea>
            </div>
        </div>
        
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('demandas') }}" class="btn btn-blue">Cancelar</a>

</form>

@endsection

