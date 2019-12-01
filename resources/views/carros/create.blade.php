@extends('adminlte::page')

@section('title', 'Cadastro de Veículo')

@section('content_header')
<h1>Cadastramento de Veículos</h1>
@stop

@section('content')
<form action="{{ route('carros.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados do carro a ser cadastrado
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="placa">Placa do Carro</label>
                    <input type="text" name="placa" id="placa" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="cor">Cor do Carro</label>
                    <input type="text" name="cor" id="cor" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-5">
                    <label for="marca">Marca do Carro</label>
                    <input type="text" name="marca" id="marca" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-5">
                    <label for="modelo">Modelo do Carro</label>
                    <input type="text" name="modelo" id="modelo" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="num_renavan">Número de Renavan</label>
                    <input type="number" name="num_renavan" id="num_renavan" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="diaria">Diária do Carro</label>
                    <input type="number" name="diaria" id="diaria" class="form-control">
                </div>
            </div>
        </div>

        <div class="panel-footer">
            <a href="{{ route('carros.index') }}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>
    </div>
</form>
@stop

@section('css')
@stop

@section('js')
@stop