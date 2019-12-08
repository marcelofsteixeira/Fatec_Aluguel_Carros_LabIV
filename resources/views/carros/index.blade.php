@extends('adminlte::page')

@section('title', 'Carros Disponiveis')

@section('content_header')
    <h1 style="color:blue">Carros Disponiveis</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            Lista de carros
            <div class="pull-right">
                <a href="{{ route('carros.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a tela</a>
                <a href="{{ route('carros.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir novo registro</a>
            </div>
        </div>

        <div class="panel-body">
            <table id="table-carros" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Placa</th>
                        <th>Cor</th>
                        <th>Açoes</th>
                    </tr>
                </thead>

                <tbody>
                    <@foreach($carros as $carro)>
                    <tr>
                        <td>{{ $carro->marca }}</td>
                        <td>{{ $carro->modelo }}</td>
                        <td>{{ $carro->placa }}</td>
                        <td>{{ $carro->cor }}</td>
                        <td>
                            <!-- botão visualização -->
                            <a href="{{ route('carros.show', $carro->placa) }}" class="btn btn-primary btn-xs">
                                <i class="fas fa-fx fa-eye"></i>
                            </a>

                            <!-- botão alteração -->
                            <a href="{{ route('carros.edit', $carro->placa) }}" class="btn btn-warning btn-xs">
                                <i class="fas fa-fx fa-pencil-alt"></i>
                            </a>

                            <!-- <a href="{{ route('disponibilizar', $carro->placa) }}" class="btn btn-warning btn-xs">
                                <i class="fas fa-adjust"></i>
                            </a> -->
                            
                            <!-- <form action="{{ route('disponibilizar', $carro->placa, ['isDisponivel' => false]) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja indisponibilizar este registro?');" style="display: inline-block;">
                                <!-- <input type="hidden" name="_method" value="UPDATE"> -->
                                <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-danger">
                                    <i class="fas fa-adjust"></i>
                                </button>
                            </form> -->

                            <!-- botão exclusão -->
                            <form action="{{ route('carros.destroy', $carro->placa) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
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
    $('#table-carros').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        },
   });
});
</script>
@stop