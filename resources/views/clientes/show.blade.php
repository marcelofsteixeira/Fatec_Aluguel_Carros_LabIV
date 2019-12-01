@extends('adminlte::page')

@section('title', 'Dados do Cliente')

@section('content_header')
<h1>Detalhes do Cliente</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes dos dados do Cliente
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">
                <h3>CPF do Cliente</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{ $cliente->cpf }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Nome do Cliente</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{ $cliente->nome }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>RG do Cliente</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$cliente->rg}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Endereço do Cliente</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$cliente->endereco}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>CEP do Cliente</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$cliente->cep}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Telefone Celular</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$cliente->cel}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Telefone Fixo</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$cliente->tel}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Email do Cliente</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$cliente->email}}
            </div>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{route('clientes.index')}}" class="btn btn-default">Voltar</a>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop