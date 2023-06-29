@extends('common.base-template-internal')
@section('content')

<x-app-layout>

    <div class="container-fluid">
        <div class="container">

            <div class="row my-5">
                <h2>Pedidos</h2>
                <div class="col menu-card">
                    
                    <a href="pedido.create">Novo Pedido</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="pedido.search">Ver Pedidos</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="pedido.edit">Editar Pedido</a>

                </div>
            </div>
            <hr>
            <div class="row my-5">
                <h2>Pizzas</h2>
                <div class="col menu-card">
                    
                    <a href="pedido.edit">Novo Sabor</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="pedido.edit">Consultar Sabor</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="pedido.edit">Editar Sabor</a>

                </div>
            </div>
            <hr>
            <div class="row my-5">
                <h2>Ingredientes</h2>
                <div class="col menu-card">
                    
                    <a href="pedido.edit">Novo Ingrediente</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="pedido.edit">Consultar Ingrediente</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="pedido.edit">Editar Ingrediente</a>

                </div>
            </div>
            <hr>
            <div class="row my-5">
                <h2>Funcionários</h2>
                <div class="col menu-card">
                    
                    <a href="pedido.edit">Novo Funcionário</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="pedido.edit">Consultar Funcionário</a>

                </div>
                <div class="col menu-card">
                    
                    <a href="pedido.edit">Editar Funcionário</a>

                </div>
            </div>
        </div>

    </div>

</x-app-layout>
