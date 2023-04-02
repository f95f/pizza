@extends('common.base-template')
@section('content')

<div class="container-fluid mx-0 px-0">

    @component('components.banner-pequeno', [
        'imagem' => 'banner-pequeno-img1',
        'texto' => 'Bem-vindo à Vera Napoli!'
    ])
    @endcomponent

    <div class="container pt-5">

        <section class="section wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1; animation-delay: 0.3s; color: var(--WHITE)">
        
            <div class="row mb-4">
                <h4 class = "mb-4 ">Nossa História</h4>
                <p class = "text-justify">
                    Somos uma pizzaria tradicional, mas moderna e apaixonada combina o melhor dos dois mundos - o sabor clássico da autêntica pizza italiana e a criatividade e inovação da fabricação de pizzas modernas. Nós nos orgulhamos de nosso compromisso em usar apenas os ingredientes mais frescos e finos, provenientes de fazendas e produtores locais. Cada pizza é criada com cuidado e atenção aos detalhes, refletindo uma paixão pela tradição e um amor pelo sabor. 
                </p>
            </div>
            
            @component('components.social-row', [
                'titulo' => 'Acompanhe o nosso dia a dia!'    
            ])
            @endcomponent

            @component('components.institucional')
            @endcomponent
            
            <hr>

            <div class="row py-2">

                <p class = "text-center mx-auto my-0">
                    Tem interesse em fazer parte da nossa história?
                    <a href="trabalhe-conosco">trabalhe conosco</a>!
                </p>

            </div>

            <hr>

        </section>

    </div>
</div>
