@extends('adminlte::page')

@section('title', 'Edição de Dados de Veículo')

@section('content_header')
<h1>Alteração de dados do Carro</h1>
@stop

@section('content')
<form action="{{ route('carros.update', $carro->placa)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados do carro a ser cadastrado
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="placa">Placa do Carro</label>
                    <input type="text" name="placa" id="placa" class="form-control" required value="{{ $carro->placa }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="cor">Cor do Carro</label>
                    <input type="text" name="cor" id="cor" class="form-control" value="{{ $carro->cor }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm col-sm-3">
                    <label for="marca">Marca do Carro</label>
                    <input type="text" name="marca" id="marca" class="form-control" required value="{{ $carro->marca }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="modelo">Modelo do Carro</label>
                    <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $carro->modelo }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-8">
                    <label for="num_renavan">Número de Renavan</label>
                    <input type="text" name="num_renavan" id="num_renavan" class="form-control" value="{{ $carro->num_renavan }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-8">
                    <label for="diaria">Diária do Carro</label>
                    <input type="number" name="diaria" id="diaria" class="form-control" value="{{ $carro->diaria }}">
                </div>
            </div>


        </div>
        <div class='panel-footer'>
            <a href="{{route('carros.index')}}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>

    </div>
</form>








@stop

@section('css')

@stop

@section('js')

@stop