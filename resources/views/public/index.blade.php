@extends('common.base-template')
@section('content')

<!--div class="view jarallax" data-jarallax="{&quot;speed&quot;: 0.2}" style="background-image: url('../../media/back_img_2H.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center; z-index: 0;" data-jarallax-original-styles="background-image: url('../../media/back_img_2H.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;"-->
<div class = "parallax-bg">
    <div class="container h-100 d-flex justify-content-center align-items-center glass">
        <div>
            
            <div class="row pt-5 mt-3">
                <div class="col-md-12 wow fadeIn mb-3" style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1;">
                    <div class="text-center">
                        <h1 class="display-4 font-weight-bold mb-5 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; animation-iteration-count: 1;">Our New Pizza is Ready</h1>
            
                        <h5 class="mb-5 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeInUp; animation-iteration-count: 1; animation-delay: 0.2s;">It comes with a lot of new flavours, easy to eat
                        and taste. Order it out now!</h5>
                        <div class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeInUp; animation-iteration-count: 1; animation-delay: 0.4s;">
                            <a class="btn waves-effect waves-light btn-destaque" href = "pedir"><i class="fas fa-concierge-bell"></i> Peça Agora!</a>
                            <a class="btn waves-effect waves-light btn-neutro" href="cardapio"><i class="fas fa-book left"></i> Cardápio</a>
                        </div>
            
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url('../../media/back_img_2H.jpg'); position: fixed; top: 0px; left: 0px; width: 1349px; height: 704px; overflow: hidden; pointer-events: none; margin-top: -4.5px; transform: translate3d(0px, -26.3px, 0px);"></div></div-->



</div>
<div class="container">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, libero quo cumque ea tempora quia enim mollitia quidem pariatur maiores vero voluptatibus optio! Assumenda quae ad accusantium quos ipsa nesciunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic omnis blanditiis consectetur commodi asperiores! Nemo maiores debitis saepe facilis, doloribus qui cupiditate recusandae odit omnis repellendus dolore doloremque consequuntur consequatur! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, placeat numquam aliquid doloremque tempora quidem saepe molestiae eligendi blanditiis aspernatur vero dolor mollitia dignissimos error, quisquam neque ut quod. Accusamus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias quaerat minus voluptates aperiam natus eos quos ducimus pariatur laboriosam iusto, ipsa quo? Amet dolore minima suscipit iste molestiae adipisci. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores mollitia qui in nobis maxime illum esse aliquid, eius officia facere dolor? Doloribus, aliquid! Similique, voluptatem id. Molestias vel sapiente tempore.</p>

</div>

<hr>

<div class = "container-fluid fundo-textura-parallax">

    <div class="row" style = "background-color: var(--YELLOWISH)">
        
        <div class = "col mx-auto py-4">
            <h2 class = "text-center">Do tamanho da sua fome!</h2>
        </div>

    </div>
    <div class="row px-5 py-3 mask pattern-8">

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
        
    </div>

    <div class="row px-5 py-3 mask pattern-8">
    
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