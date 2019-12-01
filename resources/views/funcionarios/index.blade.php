@extends('adminlte::page')

@section('title', 'Funcionarios Cadastrados')

@section('content_header')
    <h1 style="color:blue">Funcionarios Cadastrados</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            Lista de funcionarios
            <div class="pull-right">
                <a href="{{ route('funcionarios.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a tela</a>
                <a href="{{ route('funcionarios.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir novo registro</a>
            </div>
        </div>

        <div class="panel-body">
            <table id="table-funcionarios" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>RG</th>
                        <th>Endereço</th>
                        <th>CEP</th>
                        <th>Celular</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Cargo</th>

                    </tr>
                </thead>

                <tbody>
                    <@foreach($funcionarios as $funcionario)>
                    <tr>
                        <td>{{ $funcionario->cpf }}</td>
                        <td>{{ $funcionario->nome }}</td>
                        <td>{{ $funcionario->rg }}</td>
                        <td>{{ $funcionario->endereco }}</td>
                        <td>{{ $funcionario->cep }}</td>
                        <td>{{ $funcionario->cel }}</td>
                        <td>{{ $funcionario->tel }}</td>
                        <td>{{ $funcionario->email }}</td>
                        <td>{{ $funcionario->cargo }}</td>


                        <td>
                            <!-- botão visualização -->
                            <a href="{{ route('funcionarios.show', $funcionario->cpf) }}" class="btn btn-primary btn-xs">
                                <i class="fas fa-fx fa-eye"></i>
                            </a>

                            <!-- botão alteração -->
                            <a href="{{ route('funcionarios.edit', $funcionario->cpf) }}" class="btn btn-warning btn-xs">
                                <i class="fas fa-fx fa-pencil-alt"></i>
                            </a>

                            <!-- botão exclusão -->
                            <form action="{{ route('funcionarios.destroy', $funcionario->cpf) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-danger">
                                    <i class="fas fa-fx fa-trash-alt"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    <@endforeach>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#table-funcionarios').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        },
   });
});
</script>
@stop