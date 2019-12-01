@extends('adminlte::page')

@section('title', 'Edição de Dados de Funcionario')

@section('content_header')
<h1>Alteração de dados do Funcionario</h1>
@stop

@section('content')
<form action="{{ route('funcionarios.update', $funcionario->cpf)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados do funcionario a ser cadastrado
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="cpf">CPF do Funcionario</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="nome">Nome do Funcionario</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-5">
                    <label for="rg">RG do Funcionario</label>
                    <input type="text" name="rg" id="rg" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-5">
                    <label for="endereco">Endereço do Funcionario</label>
                    <input type="text" name="endereco" id="endereco" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="cep">CEP do Funcionario</label>
                    <input type="text" name="cep" id="cep" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="cel">Telefone Celular</label>
                    <input type="text" name="cel" id="cel" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="tel">Telefone Fixo</label>
                    <input type="text" name="tel" id="tel" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="email">Email do Funcionario</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="cargo">Email do Funcionario</label>
                    <input type="text" name="cargo" id="cargo" class="form-control">
                </div>
            </div>
        </div>


        </div>
        <div class='panel-footer'>
            <a href="{{route('funcionarios.index')}}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-success">Alterar</button>
        </div>

    </div>
</form>


@stop

@section('css')

@stop

@section('js')

@stop