@extends('common.base-template-internal')
@section('content')

<x-app-layout>

    <div class="container-fluid">
        <div class="container">
            @if(session('status'))
            <p>{{session('status')}}</p>
            @endif
            <div class="row my-5">
                <h2>Pedidos</h2>
                <div class="col menu-card">
                    
                    <a href="/pedidos/novo">Novo Pedido</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="/pedidos">Ver Pedidos</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="/pedidos/alterar">Editar Pedido</a>

                </div>
            </div>
            <hr>
            <div class="row my-5">
                <h2>Pizzas</h2>
                <div class="col menu-card">
                    
                    <a href="/pizzas/novo">Novo Sabor</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="/pizzas">Consultar Sabor</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="/pizzas/alterar">Editar Sabor</a>

                </div>
            </div>
            <hr>
            <div class="row my-5">
                <h2>Ingredientes</h2>
                <div class="col menu-card">
                    
                    <a href="/ingredientes/novo">Novo Ingrediente</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="/ingredientes">Consultar Ingrediente</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="/ingredientes/alterar">Editar Ingrediente</a>

                </div>
            </div>
            <hr>
            <div class="row my-5">
                <h2>Funcionários</h2>
                <div class="col menu-card">
                    
                    <a href="/funcionarios/novo">Novo Funcionário</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="/funcionarios">Consultar Funcionário</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="/funcionarios/alterar">Editar Funcionário</a>

                </div>
            </div>
        </div>

    </div>

</x-app-layout>
