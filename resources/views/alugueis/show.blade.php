@extends('adminlte::page')

@section('title', 'Dados do Aluguel')

@section('content_header')
<h1>Detalhes do Aluguel</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes do Aluguel do Veículo
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">
                <h3>Id do Aluguel</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{ $aluguel->id }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>CPF do Cliente</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{ $aluguel->cliente_id }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>CPF do Funcionário</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$aluguel->funcionario_id}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Valor do Aluguel</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$aluguel->preco}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Data do Aluguel</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$aluguel->data_aluguel}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Data Esperada da Entrega</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$aluguel->data_entrega_esperada}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Data da Entrega</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$aluguel->data_entrega}}
            </div>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{route('alugueis.index')}}" class="btn btn-default">Voltar</a>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop