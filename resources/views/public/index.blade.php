@extends('common.base-template')
@section('content')

@component('components.banner');
@endcomponent

<div class="container-fluid px-0 ">

    @component('components.faixa',[
        'fundo' => '--ORANGISH',
        'texto' => 'O que todo mundo ama!'
    ])
    @endcomponent
    
    <div class="container pl-4 py-5">

        <section class="row text-center wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1; animation-delay: 0.3s;">

            <p class="text-center w-100 my-5 mx-auto w-responsive lead text-shadow-2" style = "color: var(--CLEAR)">

                Trabalhamos com a tradição que remete ao nosso nome, junto à modernidade presente em nossa história, para entregar os seus sabores favoritos com a melhor qualidade e proporcionando sempre a melhor experiência!

            </p>

            <div class="row mt-5">

                @component('components.card-sobre', [
                    'icon' => 'hand-holding-heart',
                    'titulo' => 'O melhor do Artesanal',
                    'texto' => 'Selecionamos somente ingredientes naturais e sem aditivos ou conservantes.',
                    'pagina' => 'sobre',
                    'pagina_texto' => 'Saiba Mais'
                ])
                @endcomponent

                @component('components.card-sobre', [
                    'icon' => 'star',
                    'titulo' => 'Sabores Exclusivos',
                    'texto' => 'Dezenas de opções - de pizzas tradicionais à combinações que você só encontra aqui.',
                    'pagina' => 'cardapio',
                    'pagina_texto' => 'Cardápio'
                ])
                @endcomponent

                @component('components.card-sobre', [
                    'icon' => 'phone',
                    'titulo' => 'Peça como preferir',
                    'texto' => 'Cadastre-se e peça facilmente pelo site, ou utilize nossos canais de atendimento.',
                    'pagina' => 'pedir',
                    'pagina_texto' => 'Pedir!'
                ])
                @endcomponent

            </div>

        </section>
    </div>

    @component('components.faixa', [
        'fundo' => '--YELLOWISH',
        'texto' => 'Do tamanho da sua fome!'
        ])
        @endcomponent
        
    <div class="w-100 fundo-textura-parallax">

        <div class=" mask rgba-black-strong py-5">

            <div class="container mx-auto">
                <div class="row">

                    @component('components.pizza-tamanhos',[
                        'titulo' => 'Fatias',
                        'icone' => 'pizza_fatias',
                        'alt' => 'ícone - fatias de pizza',
                        'desc' => 'Quer experimentar um sabor novo? Peça quantas fatias desejar!'
                    ])
                    @endcomponent

                    @component('components.pizza-tamanhos',[
                        'titulo' => 'Mini-pizzas',
                        'icone' => 'mini_pizza',
                        'alt' => 'ícone - mini-pizza',
                        'desc' => 'Pizzas pequenas - sacie sua fome de forma rápida e barata!'
                    ])
                    @endcomponent
                    
                    @component('components.pizza-tamanhos',[
                        'titulo' => 'Grande',
                        'icone' => 'pizza_regular',
                        'alt' => 'ícone - pizza regular',
                        'desc' => 'O tamanho tradicional que você conhece, em diversos sabores!'
                    ])
                    @endcomponent

                </div>
                <div class="row">

                    @component('components.pizza-tamanhos',[
                        'titulo' => 'Meio a meio',
                        'icone' => 'pizza_meia',
                        'alt' => 'ícone - pizza meio a meio',
                        'desc' => 'Combine os sabores que quiser!'
                    ])
                    @endcomponent

                    @component('components.pizza-tamanhos',[
                        'titulo' => 'Bordas Recheadas',
                        'icone' => 'pizza_bordas',
                        'alt' => 'ícone - pizza com bordas recheadas',
                        'desc' => 'Adicione um sabor extra à sua pizza!'
                    ])
                    @endcomponent
                    @component('components.pizza-tamanhos',[
                        'titulo' => 'Bebidas',
                        'icone' => 'bebidas',
                        'alt' => 'ícone - bebidas',
                        'desc' => 'Contamos com diversas opções de refrigerantes e bebidas!'
                    ])
                    @endcomponent

                </div>
            </div>
        </div>
    </div>

    @component('components.faixa',[
        'fundo' => '--ORANGISH',
        'texto' => 'Explores os melhores sabores!'
    ])
    @endcomponent

    <div class="container">

        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <div class="controls-top mb-2">
                <a class="btn-floating waves-effect waves-light mt-5" style = "background-color: var(--ORANGISH)" href="#multi-item-example" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a class="btn-floating waves-effect waves-light mt-5" style = "background-color: var(--ORANGISH)" href="#multi-item-example" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>

            <ol class="carousel-indicators">
                <li data-target="#multi-item-example" data-slide-to="0"style = "background-color: var(--ORANGISH)" ></li>
                <li class="active" data-target="#multi-item-example" data-slide-to="1"style = "background-color: var(--ORANGISH)" ></li>
                <li data-target="#multi-item-example" data-slide-to="2"style = "background-color: var(--ORANGISH)" ></li>
                <li data-target="#multi-item-example" data-slide-to="3"style = "background-color: var(--ORANGISH)" ></li>
                <li data-target="#multi-item-example" data-slide-to="4"style = "background-color: var(--ORANGISH)" ></li>
            </ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item">

                    @component('components.card-promo', [
                        'tipo' => 'Tradicional',
                        'sabor' => 'Mussarela',
                        'imagem' => 'mussarela'
                    ])
                    @endcomponent

                    @component('components.card-promo', [
                        'tipo' => 'Tradicional',
                        'sabor' => 'Calabresa',
                        'imagem' => 'calabresa'
                    ])
                    @endcomponent

                    @component('components.card-promo', [
                        'tipo' => 'Tradicional',
                        'sabor' => 'Marguerita',
                        'imagem' => 'marguerita'
                    ])
                    @endcomponent

                </div>
                
                <div class="carousel-item active">

                    @component('components.card-promo', [
                        'tipo' => 'Doce',
                        'imagem' => 'ovomaltine',
                        'sabor' => 'Ovomaltine'
                    ])
                    @endcomponent

                    @component('components.card-promo', [
                        'tipo' => 'Tradicional',
                        'sabor' => 'Mexicana',
                        'imagem' => 'mexicana'
                    ])
                    @endcomponent

                    @component('components.card-promo', [
                        'tipo' => 'Tradicional',
                        'sabor' => 'Napolitana',
                        'imagem' => 'napolitana'
                    ])
                    @endcomponent

                </div>

                <div class="carousel-item">

                    @component('components.card-promo', [
                        'tipo' => 'Tradicional',
                        'sabor' => 'Portuguesa',
                        'imagem' => 'portuguesa'
                    ])
                    @endcomponent

                    @component('components.card-promo', [
                        'tipo' => 'Doce',
                        'sabor' => 'Limão',
                        'imagem' => 'limão'
                    ])
                    @endcomponent

                    @component('components.card-promo', [
                        'tipo' => 'Doce',
                        'sabor' => 'Banana com Canela',
                        'imagem' => 'banana'
                    ])
                    @endcomponent

                </div>

                <div class="carousel-item">

                    @component('components.card-promo', [
                        'tipo' => 'Tradicional',
                        'sabor' => 'Country',
                        'imagem' => 'country'
                    ])
                    @endcomponent

                    @component('components.card-promo', [
                        'tipo' => 'Internacional',
                        'sabor' => 'Mac & Cheese',
                        'imagem' => 'mac_n_cheese'
                    ])
                    @endcomponent

                    @component('components.card-promo', [
                        'tipo' => 'Internacional',
                        'sabor' => 'Tuscan Roma',
                        'imagem' => 'tuscan_roma'
                    ])
                    @endcomponent

                </div>

                <div class="carousel-item">

                    @component('components.card-promo', [
                        'tipo' => 'Internacional',
                        'sabor' => 'Texan Taco',
                        'imagem' => 'texan_taco'
                    ])
                    @endcomponent
                    
                    @component('components.card-promo', [
                        'tipo' => 'Internacional',
                        'sabor' => 'Buffalo Chicken',
                        'imagem' => 'buffalo_chicken'
                    ])
                    @endcomponent

                    @component('components.card-promo', [
                        'tipo' => 'Tradicional',
                        'sabor' => 'Palmito',
                        'imagem' => 'palmito'
                    ])
                    @endcomponent

                </div>
            </div>
        </div>
        
        <div class="row my-4">
            <div class="col mx-auto text-center">

                <h4>
                    <a class = "font-weight-bold" href = "cardapio">Confira o cardápio completo!</a>
                </h4>

            </div>    
        </div>

    </div>

    <hr>
</div>