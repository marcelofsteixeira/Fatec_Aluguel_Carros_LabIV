@extends('adminlte::page')

@section('title', 'Dados do Funcionario')

@section('content_header')
<h1>Detalhes do Funcionario</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes dos dados do Funcionario
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">
                <h3>CPF do Funcionario</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{ $funcionario->cpf }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Nome do Funcionario</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{ $funcionario->nome }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>RG do Funcionario</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$funcionario->rg}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Endereço do Funcionario</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$funcionario->endereco}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>CEP do Funcionario</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$funcionario->cep}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Telefone Celular</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$funcionario->cel}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Telefone Fixo</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$funcionario->tel}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Email do Funcionario</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$funcionario->email}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Cargo do Funcionario</h3>
            </div>
            <div class="col-sm-10" style="color:blue;">
                {{$funcionario->cargo}}
            </div>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{route('funcionarios.index')}}" class="btn btn-default">Voltar</a>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop