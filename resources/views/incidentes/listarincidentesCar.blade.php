@extends('adminlte::page')

@section('title', 'Dados do Veículo')

@section('content_header')
<h1>Lista de Incidentes</h1>
@stop

@section('content')
<div class="panel panel-default">
        <div class="panel-heading clearfix">
            Lista de incidentes do carro {{ $aluguel->carro->marca }} {{ $aluguel->carro->modelo }} {{ $aluguel->carro->cor }} pelo cliente: {{ $aluguel->cliente->nome }} (CPF:{{ $aluguel->cliente->cpf }})
            <div class="pull-right">
                <a href="{{ route('incidentes.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a tela</a>
                <a href="{{ route('incidentes.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir novo registro</a>
            </div>
        </div>

        <div class="panel-body">
            <table id="table-incidentes" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Descrição</th>
                        <th>Multa</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <@foreach($incidentes as $incidente)>
                    <tr>
                        <td>{{ $incidente->data }}</td>
                        <td>{{ $incidente->descricao }}</td>
                        <td>R${{ $incidente->multa }}</td>
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
                                <button type="submit" class="btn btn-xs btn-danger"><i class="fas fa-fx fa-trash-alt"></i></button>
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
@stop