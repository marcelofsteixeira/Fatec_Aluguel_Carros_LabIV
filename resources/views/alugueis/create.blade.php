@extends('adminlte::page')

@section('title', 'Cadastro de Aluguel')

@section('content_header')
<h1>Cadastramento de Aluguéis</h1>
@stop

@section('content')
<form action="{{ route('alugueis.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados do aluguel
        </div>

        <div class="panel-body">
            

            <div class="form-group">
                <label for="cliente-content"> Selecionar Carro </label>
                <select name="cliente_nome" class="form-control" onchange="recarregaValor()">
                @foreach ($carros as $carro)
                    <option id="carro_id" value="{{$carro->placa}}" carro_preco="{{$carro->diaria}}" >{{$carro->marca}} {{$carro->modelo}} {{$carro->cor}} (R$ {{$carro->diaria}})</option>
                @endforeach
                </select>
            </div>



            <div class="form-group">
                <label for="cliente-content"> selecionar cliente </label>
                <select name="cliente_nome" class="form-control">
                @foreach ($clientes as $cliente)
                    <option id="cliente_id" value="{{$cliente->cpf}}">{{$cliente->nome}} </option>
                @endforeach
                </select>
            </div>

            <div class="row">
                <div class="form-group col-sm-3">
                    <label for="marca">CPF do Funcionário</label>
                    <input type="text" name="funcionario_id" id="funcionario_id" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="preco">Valor do Aluguel</label>
                    <input type="number" name="preco" id="preco" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="data_aluguel">Data do Aluguel</label>
                    <input type="text" name="data_aluguel" id="data_aluguel" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="data_esperada">Data Esperada da Entrega</label>

                    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
                    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
                    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.css') }}" />
                    
                    <input class="date form-control" name="data_entrega_esperada" id="data_entrega_esperada" type="text" onchange="inseriuData(event);">
                   
                    <script type="text/javascript">

                    $('.date').datepicker({  
                        format: 'dd-mm-yyyy'
                    }); 
                    function recarregaValor(){
                        document.getElementById('diasAlug').innerHTML = '';
                        document.getElementById('precoAlug').innerHTML = '';
                        document.getElementById('data_entrega_esperada').value=null;
                    }
                    function inseriuData(dataPicker){
                        var dataEscolhida = dataPicker.target.value;
                        if (dataEscolhida){
                            var arrayDataEscolhida = dataEscolhida.split("-");
                            var dataEscolhidaDate = new Date(arrayDataEscolhida[2],arrayDataEscolhida[1] - 1, arrayDataEscolhida[0]);
                            var hoje = new Date();
                            hoje.setHours(0);
                            hoje.setMinutes(0);
                            hoje.setSeconds(0);
                            hoje.setMilliseconds(0);
                            var diferençaDatas = (dataEscolhidaDate.getTime() - hoje.getTime()) / (1000 * 3600 * 24);
                            var carroPreco = document.getElementById('carro_id').getAttribute('carro_preco');
                            document.getElementById('diasAlug').innerHTML = '<label>Dias de Aluguel:'+diferençaDatas+'</label>';
                            document.getElementById('precoAlug').innerHTML = '<label>Preço do Aluguel:R$ '+diferençaDatas*carroPreco+',00</label>';
                        }
                    }

                    </script>  

                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2" id="diasAlug">
                </div>
            </div>
        
            <div class="row">
                <div class="form-group col-sm-2" id="precoAlug"> 
                </div>
            </div>
        

        <div class="panel-footer">
            <a href="{{ route('alugueis.index') }}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>
        
    </div>
</form>
@stop

@section('css')
@stop

@section('js')
@stop