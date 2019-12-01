@extends('adminlte::page')

@section('title', 'Dados do Veículo')

@section('content_header')
<h1>Detalhes do Carro</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes dos dados do Carro
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">
                <h3>Marca do Carro</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{ $carro->marca }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Modelo do Carro</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{ $carro->modelo }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Placa do Carro</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$carro->placa}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Cor do Carro</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$carro->cor}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Diaria do Carro</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$carro->diaria}}
            </div>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{route('carros.index')}}" class="btn btn-default">Voltar</a>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop