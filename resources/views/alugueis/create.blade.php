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
                    <select id="carro_select" class="form-control" onchange="recarregaValor()">
                        <option id="none" value="0000.00" carro_preco=" ">Selecione um Carro</option>
                    @foreach ($carros as $carro)
                        <option id="{{$carro->placa}}" value="{{$carro->diaria}}" carro_preco="{{$carro->diaria}}">{{$carro->marca}} {{$carro->modelo}} {{$carro->cor}} (R$ {{$carro->diaria}})</option>
                    @endforeach
                    </select>
                    <input type="text" name="carro_id" id="form_carro_id" class="form-control" style="display: none;" required readonly >
                </div>
            </div>


            <div class="row">
                <div class="form-group col-sm-5">
                    <label for="cliente-content"> Selecionar cliente </label>
                    <select id="cliente_select" name="cliente_nome" class="form-control">
                        <option id="none" value=" ">Selecione Cliente</option>
                    @foreach ($clientes as $cliente)
                        <option id="{{$cliente->cpf}}" value="{{$cliente->cpf}}">{{$cliente->nome}} (CPF {{$cliente->cpf}}) </option>
                    @endforeach
                    </select>
                    <input type="text" name="cliente_id" id="form_cliente_id" class="form-control" style="display: none;" required readonly >
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-5">
                    <label for="marca">Selecione Funcionário</label>
                    <select id="funcionario_select" name="funcionario_nome" class="form-control">
                        <option id="none" value=" ">Selecione Cliente</option>
                    @foreach ($funcionarios as $funcionario)
                        <option id="funcionario_id" value="{{$funcionario->cpf}}">{{$funcionario->nome}} (CPF {{$funcionario->cpf}}) </option>
                    @endforeach
                    </select>
                    <input type="text" name="funcionario_id" id="form_funcionario_id" class="form-control" style="display: none;" required readonly >
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-5">
                    <label for="preco">Valor da Diaria</label>
                    <input type="number" id="preco_diaria" class="form-control" readonly>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-5">
                    <label for="data_aluguel">Data do Aluguel</label>
                    <input type="text"  id="data_aluguel" class="form-control" readonly>
                    <input type="text" name="data_aluguel" id="form_data_aluguel" class="form-control" style="display: none;" required readonly >
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-5">
                    <label for="data_esperada">Data de Entrega</label>                    
                    <input type="text" id="data_entrega_esperada" class="date form-control" onchange="inseriuData(event);">
                    <input type="text" name="data_entrega_esperada" id="form_data_entrega_esperada" class="form-control" required readonly  style="display: none;">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4" id="diasAlug">
                </div>
            </div>
        
            <div class="row">
                <div class="form-group col-sm-4" id="precoAlug"> 
                </div>
                <input type="text" name="preco" id="form_preco" class="form-control" style="display: none;" required readonly  >
            </div>
        

        <div class="panel-footer">
            <a href="{{ route('alugueis.index') }}" class="btn btn-default">Voltar</a>
            <button type="submit" id="botaoGravar" class="btn btn-success">Gravar</button>
        </div>
        
    </div>
</form>
@stop

@section('css')
@stop

@section('js')
<!script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.css') }}" />
                    
<script type="text/javascript">

//funcoes de travamento e liberacao do botao 'Gravar'
var botaoCriar = document.getElementById("botaoGravar");

function travaBotaoCriar() {
    botaoCriar.disabled = true;
}

function liberaBotaoCriar() {
    botaoCriar.disabled = false;
}

//funcoes de tratamento de datas
function insereDataAtual(date){
    var month = ('0' + date.getMonth()+2).slice(-2);
    var year = date.getFullYear();
    var day = ('0' + date.getDate()).slice(-2);
    var dataFormatada = day+'-'+month + '-' + year;
    document.getElementById('data_aluguel').value = dataFormatada;
}

function formataDataMysql(date){
    var month = ('0' + date.getMonth()+2).slice(-2);
    var year = date.getFullYear();
    var day = ('0' + date.getDate()).slice(-2);
    var hours = ('0' + date.getSeconds()).slice(-2);
    var minutes = ('0' + date.getMinutes()).slice(-2);
    var seconds = ('0' + date.getHours()).slice(-2);
    var milSeconds = date.getMilliseconds();
    var dataFormatadaLaravel = year+'-'+month+'-'+day+' '+hours+':'+minutes+':'+seconds;
    return dataFormatadaLaravel;
}

function zerarHorario(date){
    date.setHours(00);
    date.setMinutes(00);
    date.setSeconds(00);
    date.setMilliseconds(00);
    return date;
}

//funcoes de tratamento do formulario (limpeza e preenchimento)
function recarregaValor(){
    document.getElementById('diasAlug').innerHTML = '';
    document.getElementById('precoAlug').innerHTML = '';
    document.getElementById('data_entrega_esperada').value=null;
    aluguelValor = $("#carro_select").find('option:selected').attr('value');
    $('#preco_diaria').attr('value',aluguelValor);
    document.getElementById('form_carro_id').value = "";
    travaBotaoCriar();
}
function inseriuData(dataPicker){
    var dataEscolhida = dataPicker.target.value;
    if (dataEscolhida&&(aluguelValor!=0)){
        var arrayDataEscolhida = dataEscolhida.split("-");
        var dataEscolhidaDate = new Date(arrayDataEscolhida[2],arrayDataEscolhida[1] - 1, arrayDataEscolhida[0]);
        var diferençaDatas = (dataEscolhidaDate.getTime() - hojeHorarioZerado.getTime()) / (1000 * 3600 * 24);
        var carroPreco = document.getElementById('preco_diaria').getAttribute('value');
        var aluguelPreco = diferençaDatas*carroPreco;
        document.getElementById('diasAlug').innerHTML = '<label>Dias de Aluguel: '+diferençaDatas+'</label>';
        document.getElementById('precoAlug').innerHTML = '<label>Preço do Aluguel: R$ '+aluguelPreco+',00</label>';
        document.getElementById('form_carro_id').value = $("#carro_select").find('option:selected').attr('id');
        document.getElementById('form_funcionario_id').value = $("#funcionario_select").find('option:selected').attr('value');
        document.getElementById('form_cliente_id').value = $("#cliente_select").find('option:selected').attr('value');
        document.getElementById('form_preco').value = aluguelPreco;
        document.getElementById('form_data_aluguel').value = formataDataMysql(hoje);
        document.getElementById('form_data_entrega_esperada').value = formataDataMysql(dataEscolhidaDate);
        liberaBotaoCriar();
    }
}


//Script de carregamento da pagina
var hoje = new Date();
insereDataAtual(hoje);

var amanha = hoje;
amanha.setDate(hoje.getDate()+1);

var hojeHorarioZerado = zerarHorario(hoje);

$('#data_entrega_esperada').datepicker({  
    startDate: amanha,
    format: 'dd-mm-yyyy'
}); 

var aluguelValor = $("#carro_select").find('option:selected').attr('value');

$('#preco_diaria').attr('value','0.000');

travaBotaoCriar();
</script>  
@stop
