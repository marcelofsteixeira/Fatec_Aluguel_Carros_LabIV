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
@stop