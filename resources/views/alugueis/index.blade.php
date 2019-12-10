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
                        <td>{{ $aluguel->cliente->nome }} (CPF: {{ $aluguel->cliente->cpf }})</td>
                        <td>{{ $aluguel->funcionario->nome }} (CPF: {{ $aluguel->funcionario->cpf }})</td>
                        <td>{{ $aluguel->carro->marca }} {{ $aluguel->carro->modelo }} {{ $aluguel->carro->cor }} ({{ $aluguel->carro->placa }})</td>
                        <td>{{ $aluguel->data_entrega_esperada }}</td>
                        <td>
                            <!-- botão visualização -->
                            <a href="{{ route('alugueis.show', $aluguel->id) }}" class="btn btn-primary btn-xs" title="Visualizar Informações">
                                <i class="fas fa-fx fa-eye"></i>
                            </a>

                            <!-- botão alteração -->
                            <a href="{{ route('alugueis.edit', $aluguel->id) }}" class="btn btn-warning btn-xs" title="Editar Informações">
                                <i class="fas fa-fx fa-pencil-alt"></i>
                            </a>

                            <!-- botão exclusão -->
                            <form action="{{ route('alugueis.destroy', $aluguel->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-danger" title="Remover Aluguel" >
                                    <i class="fas fa-fx fa-trash-alt"></i>
                                </button>
                            </form>

                            <!-- botão incidentes -->
                            @if(date('Y', strtotime($aluguel->data_entrega)) < 1900)
                            <button data-toggle="modal" data-target="#incidenteModal" class="btn btn-danger btn-xs" title="Inserir Incidente">
                                <i class="fas fa-car-crash"></i>
                            </button>
                            @endif

                            <!-- botão encerrar aluguel -->
                            @if(date('Y', strtotime($aluguel->data_entrega)) < 1900)
                            <form onsubmit="return confirm('Encerrar Aluguel?');" style="display: inline-block;">
                            <button type="button" onclick="alert('Encerrando aluguel do carro {{ $aluguel->carro->modelo }} {{ $aluguel->carro->cor }} do cliente {{ $aluguel->cliente->nome }}'); window.location='{{ route("encAlu",array($aluguel->id)) }}';" class="btn btn-info btn-xs" title="Finalizar Aluguel">
                                <i class="fas fa-car-side"></i>
                            </button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    <@endforeach>
                </tbody>
            </table>
        </div>
        <!-- Modal Incidentes -->
        <div class="modal fade" id="incidenteModal" tabindex="-1" role="dialog" aria-labelledby="incidenteModalTitle" aria-hidden="true">
        <form action="{{ route('incidentes.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" style="color:red; text-align: center;">Indisponibilizar Carro</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="aluguel_id">ID do aluguel</label>
                    <input type="text" name="aluguel_id" value="{{ $aluguel->id }}" id="aluguel_id" class="form-control" readonly>
                    <br>
                    <label for="data">Data do Incidente</label>
                    <input type="date" name="data" id="data" class="form-control">
                    <br>
                    <label for="descricao">Descrição do Acidente</label>
                    <input type="text" name="descricao" id="descricao" class="form-control">
                    <br>
                    <label for="multa">Valor da Multa</label>
                    <input type="number" name="multa" id="multa" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-danger">Registrar Incidente</button>
        </form>
                </div>
                </div>
            </div>
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