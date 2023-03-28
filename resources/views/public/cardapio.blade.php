@extends('common.base-template')
@section('content')

<div class="container-fluid mx-0 px-0 fundo-escuro">
    
    <div id = "banner-contato">

        <div class="mask rgba-orange-light">

            <div class="row justify-content-center align-items-center pb-4 mx-0 px-0 " style="padding-top:150px">

                <h2 class="font-weight-bold text-center h1 my-5 sombra" style = "color: var(--CLEAR)">Explore nossas receitas!</h2>

            </div>
        </div>
    </div>

    <div class="row py-5 px-0 mx-0 justify-content-center align-items-center" style = "background-color: var(--YELLOWISH)">

        <div class="col-md-6">

            <form class="form-inline my-0">
                <input class="form-control form-control-sm w-100 px-3 py-4" type="text" name = "txtPesquisar" id = "txtPesquisar" placeholder="Pesquisar Sabores"
                aria-label="Search" >
                <!i class="fas fa-search" aria-hidden="true" style = "color: var(--YELLOWISH)"></--i>
            </form>

        </div>
    </div>
</div>
    
    <hr>
    <div class="container">

        <div class="row justify-content-center align-items-center ">

            @component('components.item-cardapio', [
                'tipo' => 'Tradicional',
                'sabor' => 'Mussarela',
                'imagem' => 'mussarela',
                'texto' => 'Descrição',
                'valor' => 42.50
            ])
            @endcomponent

            @component('components.item-cardapio', [
                'tipo' => 'Tradicional',
                'sabor' => 'Calabresa',
                'imagem' => 'calabresa',
                'texto' => 'Descrição',
                'valor' => 42.50
            ])
            @endcomponent

            @component('components.item-cardapio', [
                'tipo' => 'Tradicional',
                'sabor' => 'Marguerita',
                'imagem' => 'marguerita',
                'texto' => 'Descrição',
                'valor' => 42.50
            ])
            @endcomponent

        </div>

        <div class="row">

            @component('components.item-cardapio', [
                'tipo' => 'Doce',
                'imagem' => 'ovomaltine',
                'sabor' => 'Ovomaltine',
                'texto' => 'Descrição',
                'valor' => 42.50
            ])
            @endcomponent

            @component('components.item-cardapio', [
                'tipo' => 'Tradicional',
                'sabor' => 'Mexicana',
                'imagem' => 'mexicana',
                'texto' => 'Descrição',
                'valor' => 42.50
            ])
            @endcomponent

            @component('components.item-cardapio', [
                'tipo' => 'Tradicional',
                'sabor' => 'Napolitana',
                'imagem' => 'napolitana',
                'texto' => 'Descrição',
                'valor' => 42.50 
            ])
            @endcomponent

        </div>

        <div class="row">

            @component('components.item-cardapio', [
                'tipo' => 'Tradicional',
                'sabor' => 'Portuguesa',
                'imagem' => 'portuguesa',
                'texto' => 'Descrição',
                'valor' => 42.50 
            ])
            @endcomponent

            @component('components.item-cardapio', [
                'tipo' => 'Doce',
                'sabor' => 'Limão',
                'imagem' => 'limão',
                'texto' => 'Descrição',
                'valor' => 42.50 
            ])
            @endcomponent

            @component('components.item-cardapio', [
                'tipo' => 'Doce',
                'sabor' => 'Banana com Canela',
                'imagem' => 'banana',
                'texto' => 'Descrição',
                'valor' => 42.50 
            ])
            @endcomponent

        </div>

        <div class="row">

            @component('components.item-cardapio', [
                'tipo' => 'Tradicional',
                'sabor' => 'Country',
                'imagem' => 'country',
                'texto' => 'Descrição',
                'valor' => 42.50 
            ])
            @endcomponent

            @component('components.item-cardapio', [
                'tipo' => 'Internacional',
                'sabor' => 'Mac & Cheese',
                'imagem' => 'mac_n_cheese',
                'texto' => 'Descrição',
                'valor' => 42.50 
            ])
            @endcomponent

            @component('components.item-cardapio', [
                'tipo' => 'Internacional',
                'sabor' => 'Tuscan Roma',
                'imagem' => 'tuscan_roma',
                'texto' => 'Descrição',
                'valor' => 42.50 
            ])
            @endcomponent

            <div class="row">

                @component('components.item-cardapio', [
                    'tipo' => 'Internacional',
                    'sabor' => 'Texan Taco',
                    'imagem' => 'texan_taco',
                    'texto' => 'Descrição',
                    'valor' => 42.50 
                ])
                @endcomponent
                
                @component('components.item-cardapio', [
                    'tipo' => 'Internacional',
                    'sabor' => 'Buffalo Chicken',
                    'imagem' => 'buffalo_chicken',
                    'texto' => 'Descrição',
                    'valor' => 42.50 
                ])
                @endcomponent

                @component('components.item-cardapio', [
                    'tipo' => 'Internacional',
                    'sabor' => 'Tuscan Roma',
                    'imagem' => 'tuscan_roma',
                    'texto' => 'Descrição',
                    'valor' => 42.50 
                ])
                @endcomponent

            </div>
        </div>
    </div>

        <p>
            Colorcar cards com imagem, nome e valor.
            Ao clicar, exibir descrição, botão pedir e, opcionalmente, ingredientes.
            O botão pedir deve redirecionar para a página Pedir

        </p>
