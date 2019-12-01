@extends('adminlte::page')

@section('title', 'Carros Alugados')

@section('content_header')
    <h1 style="color:blue">Carros Alugados</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            Lista de Aluguéis
            <div class="pull-right">
                <a href="{{ route('alugueis.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a tela</a>
                <a href="{{ route('alugueis.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir novo registro</a>
            </div>
        </div>

        <div class="panel-body">
            <table id="table-alugueis" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Funcionário</th>
                        <th>Carro</th>
                        <th>Data Esperada de Entrega</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <@foreach($alugueis as $aluguel)>
                    <tr>
                        <td>{{ $aluguel->cliente_id }}</td>
                        <td>{{ $aluguel->funcionario_id }}</td>
                        <td>{{ $aluguel->carro_id }}</td>
                        <td>{{ $aluguel->data_entrega_esperada }}</td>
                        <td>
                            <!-- botão visualização -->
                            <a href="{{ route('alugueis.show', $aluguel->id) }}" class="btn btn-primary btn-xs">
                                <i class="fas fa-fx fa-eye"></i>
                            </a>

                            <!-- botão alteração -->
                            <a href="{{ route('alugueis.edit', $aluguel->id) }}" class="btn btn-warning btn-xs">
                                <i class="fas fa-fx fa-pencil-alt"></i>
                            </a>

                            <!-- botão exclusão -->
                            <form action="{{ route('alugueis.destroy', $aluguel->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
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
    $('#table-alugueis').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        },
   });
});
</script>
@stop