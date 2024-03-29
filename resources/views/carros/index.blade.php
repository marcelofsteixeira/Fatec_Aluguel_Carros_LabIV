@extends('adminlte::page')

@section('title', 'Carros')

@section('content_header')
    <h1 style="color:blue">Carros</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            Lista de carros disponiveis
            <div class="pull-right">
                <a href="{{ route('carros.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a tela</a>
                <a href="{{ route('carros.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir novo carro</a>
                <a href="/alugueis/create" class="btn btn-primary"><i class="fas fa-fx fa-car-side"></i> Incluir novo aluguel</a>
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
                    <@foreach($carrosDisp as $carroDisp)>
                    <tr>
                        <td>{{ $carroDisp->marca }}</td>
                        <td>{{ $carroDisp->modelo }}</td>
                        <td>{{ $carroDisp->placa }}</td>
                        <td>{{ $carroDisp->cor }}</td>
                        <td>
                            <!-- botão visualização -->
                            <a href="{{ route('carros.show', $carroDisp->placa) }}" class="btn btn-primary btn-xs">
                                <i class="fas fa-fx fa-eye"></i>
                            </a>

                            <!-- botão alteração -->
                            <a href="{{ route('carros.edit', $carroDisp->placa) }}" class="btn btn-warning btn-xs">
                                <i class="fas fa-fx fa-pencil-alt"></i>
                            </a>

                            <!-- botão exclusão -->
                            <form action="{{ route('carros.destroy', $carroDisp->placa) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-danger">
                                    <i class="fas fa-fx fa-trash-alt"></i>
                                </button>
                            </form>
                            
                            <button type="button" onclick="window.location='{{ route("listarIncCar",array($carroDisp->placa)) }}';" class="btn btn-light btn-xs" title="Listar Incidentes do Carro">
                            <i class="fas fa-truck-pickup"></i>
                            </button>

                            <button type="button" onclick="confirm('Indisponibilizar carro {{ $carroDisp->marca }} {{ $carroDisp->modelo }} {{ $carroDisp->cor }}?'); window.location='{{ route("dispCar",array($carroDisp->placa)) }}';" class="btn btn-warning btn-xs" title="Indisponibilizar Carro">
                                <i class="fas fa-car-crash"></i>
                            </button>
                        
                        </td>
                    </tr>
                    <@endforeach>
                </tbody>
            </table>
        </div>
    </div>



    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            Lista de carros indisponiveis
        </div>

        <div class="panel-body">
            <table id="table-indisponiveis" class="table table-bordered table-hover table-striped">
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
                    <@foreach($carrosIndisp as $carroIndisp)>
                    <tr>
                        <td>{{ $carroIndisp->marca }}</td>
                        <td>{{ $carroIndisp->modelo }}</td>
                        <td>{{ $carroIndisp->placa }}</td>
                        <td>{{ $carroIndisp->cor }}</td>
                        <td>
                            <!-- botão visualização -->
                            <a href="{{ route('carros.show', $carroIndisp->placa) }}" class="btn btn-primary btn-xs">
                                <i class="fas fa-fx fa-eye"></i>
                            </a>

                            <!-- botão alteração -->
                            <a href="{{ route('carros.edit', $carroIndisp->placa) }}" class="btn btn-warning btn-xs">
                                <i class="fas fa-fx fa-pencil-alt"></i>
                            </a>

                            <!-- botão exclusão -->
                            <form action="{{ route('carros.destroy', $carroIndisp->placa) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-danger">
                                    <i class="fas fa-fx fa-trash-alt"></i>
                                </button>
                            </form>

                            <button type="button" onclick="window.location='{{ route("listarIncCar",array($carroIndisp->placa)) }}';" class="btn btn-light btn-xs" title="Listar Incidentes do Carro">
                            <i class="fas fa-truck-pickup"></i>
                            </button>

                            <button type="button" onclick="confirm('Disponibilizar carro {{ $carroIndisp->marca }} {{ $carroIndisp->modelo }} {{ $carroIndisp->cor }}?'); window.location='{{ route("dispCar",array($carroIndisp->placa)) }}';" class="btn btn-success btn-xs" title="Disponibilizar Carro">
                                <i class="fas fa-car-alt"></i>
                            </button>
                        </td>
                    </tr>
                    <@endforeach>
                </tbody>
            </table>
        </div>
    </div>




    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            Lista de carros alugados
        </div>

        <div class="panel-body">
            <table id="table-alugados" class="table table-bordered table-hover table-striped">
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
                    <@foreach($carrosAlugados as $carroAlugado)>
                    <tr>
                        <td>{{ $carroAlugado->marca }}</td>
                        <td>{{ $carroAlugado->modelo }}</td>
                        <td>{{ $carroAlugado->placa }}</td>
                        <td>{{ $carroAlugado->cor }}</td>
                        <td>
                            <!-- botão visualização -->
                            <a href="{{ route('carros.show', $carroAlugado->placa) }}" class="btn btn-primary btn-xs">
                                <i class="fas fa-fx fa-eye"></i>
                            </a>

                            <!-- botão alteração -->
                            <a href="{{ route('carros.edit', $carroAlugado->placa) }}" class="btn btn-warning btn-xs">
                                <i class="fas fa-fx fa-pencil-alt"></i>
                            </a>

                            <!-- botão exclusão -->
                            <form action="{{ route('carros.destroy', $carroAlugado->placa) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-danger">
                                    <i class="fas fa-fx fa-trash-alt"></i>
                                </button>
                            </form>

                            <button type="button" onclick="window.location='{{ route("listarIncCar",array($carroAlugado->placa)) }}';" class="btn btn-light btn-xs" title="Listar Incidentes do Carro">
                            <i class="fas fa-truck-pickup"></i>
                            </button>

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
   $('#table-indisponiveis').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        },
   });
   $('#table-alugados').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        },
   });
});
</script>
@stop