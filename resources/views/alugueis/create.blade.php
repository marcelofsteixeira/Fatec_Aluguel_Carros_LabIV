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
            
            <div class="row">
                <div class="form-group col-sm-5">
                    <label for="cliente-content"> Selecionar Carro </label>
                    <select id="cliente_nome" name="cliente_nome" class="form-control" onchange="recarregaValor()">
                        <option id="none" value="0000.00" carro_preco=" ">Selecione um Carro</option>
                    @foreach ($carros as $carro)
                        <option id="{{$carro->placa}}" value="{{$carro->diaria}}" carro_preco="{{$carro->diaria}}">Marca: {{$carro->marca}} | Modelo: {{$carro->modelo}} | Cor: {{$carro->cor}}</option>
                    @endforeach
                    </select>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-sm-5">
                    <label for="cliente-content"> selecionar cliente </label>
                    <select name="cliente_nome2" class="form-control">
                    @foreach ($clientes as $cliente)
                        <option id="cliente_id" value="{{$cliente->cpf}}">{{$cliente->nome}} </option>
                    @endforeach
                    </select>
                </div>
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
                    <input type="text" name="data_entrega_esperada" id="data_entrega_esperada" class="date form-control" onchange="inseriuData(event);">

                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4" id="diasAlug">
                </div>
            </div>
        
            <div class="row">
                <div class="form-group col-sm-4" id="precoAlug"> 
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
<!--script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('public/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/css/bootstrap-datepicker.css') }}" /-->
                    
<script type="text/javascript">

var id = $("#cliente_nome").find('option:selected').attr('id');
var aluguelValor = document.getElementById(id);
$('#preco').attr('value',aluguelValor.value);

$("#cliente_nome").change(function() {
  id = $(this).find('option:selected').attr('id');
  aluguelValor = document.getElementById(id);
  $('#preco').attr('value',aluguelValor.value);
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
        var carroPreco = document.getElementById('preco').getAttribute('value');
        console.log(carroPreco);
        document.getElementById('diasAlug').innerHTML = '<label>Dias de Aluguel: '+diferençaDatas+'</label>';
        document.getElementById('precoAlug').innerHTML = '<label>Preço do Aluguel: R$ '+diferençaDatas*carroPreco+',00</label>';
    }
}

</script>  
@stop