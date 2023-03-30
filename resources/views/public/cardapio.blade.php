@extends('common.base-template')
@section('content')

<div class="container-fluid mx-0 mb-3 px-0">
    
    @component('components.banner-pequeno', [
        'imagem' => 'banner-pequeno-img2',
        'texto' => 'Explore nossas receitas!'
    ])
    @endcomponent

    <div class="row py-5 px-0 mx-0 justify-content-center align-items-center" style = "background-color: var(--YELLOWISH)">

        <div class="col-md-6">

            <form class="form-inline my-0">
                <input class="form-control form-control-sm w-100 px-3 py-4" type="text" name = "txtPesquisar" id = "txtPesquisar" placeholder="Pesquisar Sabores"
                aria-label="Search" >
                <!i class="fas fa-search" aria-hidden="true" style = "color: var(--YELLOWISH)"></--i>

                <div class=" row justify-content-center align-items-center">

                </div>
            </form>

            <div class="btn-group btn-group-toggle mt-3 align-text-center" data-toggle="buttons">
                
                    <label class="btn mx-2 active "rounded="true" >
                        <input type="checkbox" checked autocomplete="off"> Tradicionais
                    </label>
                    <label class="btn mx-2 ">
                        <input type="checkbox" autocomplete="off"rounded="true" > Doces
                    </label>
                    <label class="btn mx-2 ">
                        <input type="checkbox" autocomplete="off"rounded="true" > Internacionais
                    </label>
                    
             </div>
        </div>
    </div>

</div>
    
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
    <hr>
</div>
