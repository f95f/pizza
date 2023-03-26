@extends('common.base-template')
@section('content')

@component('components.banner');
@endcomponent

<div class="container-fluid">

    @component('components.faixa',[
        'fundo' => '--ORANGISH',
        'texto' => 'O que todo mundo ama!'
    ])
    @endcomponent
    <div class="container py-5">

        <section class="row text-center wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1; animation-delay: 0.3s;">

            <p class="text-left my-5 mx-auto w-responsive lead" style = "color: var(--CLEAR)">
                Trabalhamos com a tradição que remete ao nosso nome, junto à modernidade presente em nossa história, para entregar os seus sabores favoritos com a melhor qualidade e proporcionando sempre a melhor experiência!
            </p>

            <div class="row mt-5">

                @component('components.card-sobre', [
                    'icon' => 'hand-holding-heart',
                    'titulo' => 'O melhor do Artesanal',
                    'texto' => 'Trabalhamos com ingredientes naturais e sem aditivos ou conservantes.',
                    'pagina' => 'sobre',
                    'pagina_texto' => 'Saiba Mais'
                ])
                @endcomponent

                @component('components.card-sobre', [
                    'icon' => 'certificate',
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
</div>
  
<hr>

<div class = "container-fluid fundo-textura-parallax">

    @component('components.faixa', [
        'fundo' => '--YELLOWISH',
        'texto' => 'Do tamanho da sua fome!'
    ])
    @endcomponent
    
    <div class="row fluid py-5">

        @component('components.pizza-tamanhos',[
            'titulo' => 'Fatias',
            'icone' => 'pizza_fatia',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ])
        @endcomponent

        @component('components.pizza-tamanhos',[
            'titulo' => 'Mini-pizzas',
            'icone' => 'pizza_mini',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ])
        @endcomponent
        
        @component('components.pizza-tamanhos',[
            'titulo' => 'Tradicionais',
            'icone' => 'pizza_trad',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ])
        @endcomponent

        @component('components.pizza-tamanhos',[
            'titulo' => 'Família',
            'icone' => 'pizza_familia',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ])
        @endcomponent

        @component('components.pizza-tamanhos',[
            'titulo' => 'Tradicionais',
            'icone' => 'pizza_trad',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ])
        @endcomponent

        @component('components.pizza-tamanhos',[
            'titulo' => 'Família',
            'icone' => 'pizza_familia',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ])
        @endcomponent

        @component('components.pizza-tamanhos',[
            'titulo' => 'Família',
            'icone' => 'pizza_familia',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ])
        @endcomponent
    </div>
 
        
</div>
        
<div class="container-fluid">

    @component('components.faixa',[
        'fundo' => '--GREENISH',
        'texto' => 'Explores os melhores sabores!'
    ])
    @endcomponent

    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

          <!--Controls-->
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

                @component('components.card-promo', [
                    'tipo' => 'Doce',
                    'imagem' => 'ovomaltine',
                    'sabor' => 'Ovomaltine'
                ])
                @endcomponent
            </div>
            
            <div class="carousel-item active">

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
            </div>

            <div class="carousel-item">
                @component('components.card-promo', [
                    'tipo' => 'Doce',
                    'sabor' => 'Banana com Canela',
                    'imagem' => 'banana'
                ])
                @endcomponent

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
                    'sabor' => 'Bacon, Lettuce & Tomatoes',
                    'imagem' => 'blt'
                ])
                @endcomponent

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
                    'tipo' => 'Internacional',
                    'sabor' => 'Tuscan Roma',
                    'imagem' => 'tuscan_roma'
                ])
                @endcomponent

            </div>
        </div>
    </div>
</div>