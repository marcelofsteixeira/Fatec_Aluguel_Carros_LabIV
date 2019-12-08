@extends('adminlte::page')

@section('title', 'Incidentes')

@section('content_header')
    <h1 style="color:blue">Incidentes</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            Lista de incidentes
            <div class="pull-right">
                <a href="{{ route('incidentes.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a tela</a>
                <a href="{{ route('incidentes.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir novo registro</a>
            </div>
        </div>

        <div class="panel-body">
            <table id="table-incidentes" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Aluguel</th>
                        <th>Data</th>
                        <th>Descrição</th>
                        <th>multa</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <@foreach($incidentes as $incidente)>
                    <tr>
                        <td>{{ $incidente->aluguel_id }}</td>
                        <td>{{ $incidente->data }}</td>
                        <td>{{ $incidente->descricao }}</td>
                        <td>{{ $incidente->multa }}</td>
                        <td>
                            <!-- botão visualização -->
                            <a href="{{ route('incidentes.show', $incidente->id) }}" class="btn btn-primary btn-xs">
                                <i class="fas fa-fx fa-eye"></i>
                            </a>

                            <!-- botão alteração -->
                            <a href="{{ route('incidentes.edit', $incidente->id) }}" class="btn btn-warning btn-xs">
                                <i class="fas fa-fx fa-pencil-alt"></i>
                            </a>

                            <!-- botão exclusão -->
                            <form action="{{ route('incidentes.destroy', $incidente->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
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
    $('#table-incidentes').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        },
   });
});
</script>
@stop