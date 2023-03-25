@extends('common.base-template')
@section('content')

@component('components.banner');
@endcomponent

<div class="container-flex">
    @component('components.faixa',[
        'fundo' => '--ORANGISH',
        'texto' => 'O que todo mundo ama!'
    ])
    @endcomponent
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, libero quo cumque ea tempora quia enim mollitia quidem pariatur maiores vero voluptatibus optio! Assumenda quae ad accusantium quos ipsa nesciunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic omnis blanditiis consectetur commodi asperiores! Nemo maiores debitis saepe facilis, doloribus qui cupiditate recusandae odit omnis repellendus dolore doloremque consequuntur consequatur! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, placeat numquam aliquid doloremque tempora quidem saepe molestiae eligendi blanditiis aspernatur vero dolor mollitia dignissimos error, quisquam neque ut quod. Accusamus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias quaerat minus voluptates aperiam natus eos quos ducimus pariatur laboriosam iusto, ipsa quo? Amet dolore minima suscipit iste molestiae adipisci. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores mollitia qui in nobis maxime illum esse aliquid, eius officia facere dolor? Doloribus, aliquid! Similique, voluptatem id. Molestias vel sapiente tempore.</p>

</div>
  
<hr>

<div class = "container-fluid fundo-textura-parallax">

    @component('components.faixa', [
        'fundo' => '--YELLOWISH',
        'texto' => 'Do tamanho da sua fome!'
    ])
    @endcomponent
    
    <div class="row fluid py-5 mask pattern-8">

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

    </div>
 
        
</div>
        

<hr>

<h2>Lorem ipsum dolor sit amet!</h2>
    <p>Tradicionais</p>
    <p>Especiais</p>
    <p>Internacionais</p>
    <p>Bebidas</p>
<hr>