@extends('adminlte::page')

@section('title', 'Aluguel Carros')

@section('content_header')
    <div>
        <h1 style="color:blue; text-align: center;"><strong>Larag-on-Wheels</strong> <i class="fas fa-car-crash"></i></h1>
    </div>
@stop

@section('content')
    <p style="text-align: center; color:red;"><strong>Bem-Vindo(a) a Larag-on-Wheels, uma aplicação de gestão de serviços de aluguel de veículos.</strong></p>
    <br>
    <div class="panel panel-primary" style="margin-right: 180px;">
        <ul>
            <li style="color:red;">
            Com o auxilio do menu lateral você poderá navegar pelas diferentes funções da aplicação, como:
            <ul>
                <li>Cadastro de usuários (Funcionários e Clientes);</li>
                <li>Cadastro de Veículos;</li>
                <li>Cadastro de Aluguéis;</li>
                <li>Gerenciamento de Incidentes (veículo danificado, cliente responsável, tipo de acidente, etc.)</li>
            </ul>
            </li>
        </ul>
    </div>
    <div class="modal fade" id="legal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle" style="text-align: center; color: red;">Galera do UNO&trade;</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="text-align: justify;">
                <p><i class="fab fa-github-square fa-2x"></i><a href="https://github.com/JeanLPierro"  target="_blank"> Jean Pierro</a></p>
                <p><i class="fab fa-github-square fa-2x"></i><a href="https://github.com/jesscahelen"  target="_blank"> Jessica Helen</a></p>
                <p><i class="fab fa-github-square fa-2x"></i><a href="https://github.com/marcelofsteixeira"  target="_blank"> Marcelo Teixeira</a></p>
                <p><i class="fab fa-github-square fa-2x"></i><a href="https://github.com/RodrigoPradoDaSilva"  target="_blank"> Rodrigo Prado</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Nice!</button>
                <div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    <div style="text-align: center;">
        <em>Feito com &hearts; pela <a data-toggle="modal" data-target="#legal">Galera do UNO</a>&trade;</em>
    </div>
@stop