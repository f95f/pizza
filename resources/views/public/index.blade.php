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
        
<div class="container-fluid">

    @component('components.faixa',[
        'fundo' => '--GREENISH',
        'texto' => 'Explores os melhores sabores!'
    ])
    @endcomponent

    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

          <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example" data-slide="prev">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example" data-slide="next">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
        <!--Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li class="primary-color" data-target="#multi-item-example" data-slide-to="0"></li>
            <li class="primary-color active" data-target="#multi-item-example" data-slide-to="1"></li>
            <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
        </ol>
        <!--Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item">

            @component('components.card-promo')
            @endcomponent

            @component('components.card-promo')
            @endcomponent

            @component('components.card-promo')
            @endcomponent
            
        </div>
        <!--First slide-->

        <!--Second slide-->
        <div class="carousel-item active">

            <div class="col-md-4">

            <!--Card-->
            <div class="card card-cascade narrower card-ecommerce">

                <!--Card image-->
                <div class="view view-cascade overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(30).jpg" class="card-img-top" alt="">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body card-body-cascade text-center no-padding">
                <!--Category & Title-->
                <a href="" class="text-muted">
                    <h5>Accessories</h5>
                </a>
                <h4 class="card-title">
                    <strong>
                    <a href="">Summer hat</a>
                    </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit. Nam
                    incidunt eius est voluptatibus.
                </p>

                <!--Card footer-->
                <div class="card-footer">
                    <span class="float-left">39$</span>
                    <span class="float-right">
                    <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                    </span>
                </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            </div>

            <div class="col-md-4 clearfix d-none d-sm-block">

            <!--Card-->
            <div class="card card-cascade narrower card-ecommerce">

                <!--Card image-->
                <div class="view view-cascade overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(37).jpg" class="card-img-top" alt="">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body card-body-cascade text-center no-padding">
                <!--Category & Title-->
                <a href="" class="text-muted">
                    <h5>Shoes</h5>
                </a>
                <h4 class="card-title">
                    <strong>
                    <a href="">Black heels</a>
                    </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                    adipisci velit, sed quia
                    non.
                </p>

                <!--Card footer-->
                <div class="card-footer">
                    <span class="float-left">79$</span>
                    <span class="float-right">
                    <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                    </span>
                </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            </div>

            <div class="col-md-4 clearfix d-none d-sm-block">

            <!--Card-->
            <div class="card card-cascade narrower card-ecommerce">

                <!--Card image-->
                <div class="view view-cascade overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(31).jpg" class="card-img-top" alt="">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body card-body-cascade text-center no-padding">
                <!--Category & Title-->
                <a href="" class="text-muted">
                    <h5>Outerwear</h5>
                </a>
                <h4 class="card-title">
                    <strong>
                    <a href="">Black jacket</a>
                    </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                    saepe eveniet ut et voluptates.
                </p>

                <!--Card footer-->
                <div class="card-footer">
                    <span class="float-left">149$</span>
                    <span class="float-right">
                    <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                    </span>
                </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            </div>

        </div>
        <!--Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

            <div class="col-md-4">

            <!--Card-->
            <div class="card card-cascade narrower card-ecommerce">

                <!--Card image-->
                <div class="view view-cascade overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" class="card-img-top" alt="">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body card-body-cascade text-center no-padding">
                <!--Category & Title-->
                <a href="" class="text-muted">
                    <h5>Accessories</h5>
                </a>
                <h4 class="card-title">
                    <strong>
                    <a href="">Leather bag</a>
                    </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                    adipisci velit, sed quia
                    non.
                </p>

                <!--Card footer-->
                <div class="card-footer">
                    <span class="float-left">29$</span>
                    <span class="float-right">
                    <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                    </span>
                </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            </div>

            <div class="col-md-4 clearfix d-none d-sm-block">

            <!--Card-->
            <div class="card card-cascade narrower card-ecommerce">

                <!--Card image-->
                <div class="view view-cascade overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg" class="card-img-top" alt="">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body card-body-cascade text-center no-padding">
                <!--Category & Title-->
                <a href="" class="text-muted">
                    <h5>Accessories</h5>
                </a>
                <h4 class="card-title">
                    <strong>
                    <a href="">Leather belt</a>
                    </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                    saepe eveniet ut et voluptates.
                </p>

                <!--Card footer-->
                <div class="card-footer">
                    <span class="float-left">89$</span>
                    <span class="float-right">
                    <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                    </span>
                </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            </div>

            <div class="col-md-4 clearfix d-none d-sm-block">

            <!--Card-->
            <div class="card card-cascade narrower card-ecommerce">

                <!--Card image-->
                <div class="view view-cascade overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(57).jpg" class="card-img-top" alt="">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body card-body-cascade text-center no-padding">
                <!--Category & Title-->
                <a href="" class="text-muted">
                    <h5>Shoes</h5>
                </a>
                <h4 class="card-title">
                    <strong>
                    <a href="">Sneakers</a>
                    </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit. Nam
                    incidunt eius est voluptatibus.
                </p>

                <!--Card footer-->
                <div class="card-footer">
                    <span class="float-left">129$</span>
                    <span class="float-right">
                    <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                        <i class="fas fa-heart"></i>
                    </a>
                    </span>
                </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            </div>

        </div>
        <!--Third slide-->

        </div>
        <!--Slides-->

    </div>
</div>