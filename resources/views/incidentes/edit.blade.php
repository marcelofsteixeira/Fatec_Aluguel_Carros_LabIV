@extends('adminlte::page')

@section('title', 'Edição de Dados de Veículo')

@section('content_header')
<h1>Alteração de dados do Incidente</h1>
@stop

@section('content')
<form action="{{ route('incidentes.update', $incidente->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados do incidente a ser cadastrado
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="aluguel_id">ID do aluguel</label>
                    <input type="number" name="aluguel_id" id="aluguel_id" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="data">Data do incidente</label>
                    <input type="date" name="data" id="data" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-5">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" id="descricao" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-5">
                    <label for="multa">Multa</label>
                    <input type="number" name="multa" id="multa" class="form-control">
                </div>
            </div>
        </div>

        </div>
        <div class='panel-footer'>
            <a href="{{route('incidentes.index')}}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-success">Alterar</button>
        </div>

    </div>
</form>








@stop

@section('css')

@stop

@section('js')

@stop