@extends('adminlte::page')

@section('title', 'Edição de Dados do Aluguel')

@section('content_header')
<h1>Alteração de dados do Aluguel</h1>
@stop

@section('content')
<form action="{{ route('alugueis.update', $aluguel->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados Aluguel a ser alterado
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="form-group col-sm-3">
                    <label for="carro_id">Placa do Carro</label>
                    <input type="text" name="carro_id" id="carro_id" class="form-control" required value="{{ $aluguel->carro_id }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-3">
                    <label for="cliente_id">CPF do Cliente</label>
                    <input type="text" name="cliente_id" id="cliente_id" class="form-control" value="{{ $aluguel->cliente_id }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm col-sm-3">
                    <label for="funcionario_id">CPF do Funcionário</label>
                    <input type="text" name="funcionario_id" id="funcionario_id" class="form-control" required value="{{ $aluguel->funcionario_id }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="preco">Valor do Aluguel</label>
                    <input type="number" name="preco" id="preco" class="form-control" value="{{ $aluguel->preco }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="data_aluguel">Data do Aluguel</label>
                    <input type="text" name="data_aluguel" id="data_aluguel" class="form-control" value="{{ $aluguel->data_aluguel }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="data_entrega_esperada">Data Esperada da Entrega</label>
                    <input type="text" name="data_entrega_esperada" id="data_entrega_esperada" class="form-control" value="{{ $aluguel->data_entrega_esperada }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="data_entrega">Data da Entrega</label>
                    <input type="text" name="data_entrega" id="data_entrega" class="form-control" value="{{ $aluguel->data_entrega }}">
                </div>
            </div>


        </div>
        <div class='panel-footer'>
            <a href="{{route('alugueis.index')}}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-success">Alterar</button>
        </div>

    </div>
</form>








@stop

@section('css')

@stop

@section('js')

@stop