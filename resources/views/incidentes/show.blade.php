@extends('adminlte::page')

@section('title', 'Dados do Veículo')

@section('content_header')
<h1>Detalhes do Incidente</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes dos dados do Incidente
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">
                <h3>Aluguel</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{ $incidente->aluguel_id }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Data</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{ $incidente->data }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Descrição</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$incidente->descricao}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Multa</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$incidente->multa}}
            </div>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{route('incidentes.index')}}" class="btn btn-default">Voltar</a>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop