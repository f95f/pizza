@extends('common.base-template')
@section('content')

<div class="container-fluid mx-0 px-0">

    @component('public-components.banner-pequeno', [
        'imagem' => 'banner-pequeno-img1',
        'texto' => 'Junte-se a nós!'
    ])
    @endcomponent

    <div class="container pt-5">

        <section class="section wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1; animation-delay: 0.3s; color: var(--WHITE)">
        
            <div class="row mb-4">
                <h4 class = "mb-4 ">Interessado em fazer parte desta família?</h4>
                <p class = "text-justify">
                    Trabalhar na Vera Napoli oferece uma oportunidade única de fazer parte de uma equipe dedicada a proporcionar uma experiência autêntica de pizza italiana com um toque moderno. Com um foco em usar apenas os ingredientes mais frescos e finos, nossos funcionários podem se orgulhar de saber que estão contribuindo para a criação de pizzas saudáveis e de alta qualidade que satisfazem o paladar dos clientes. Além disso, o compromisso da marca com a criatividade e inovação oferece aos funcionários a chance de aprender e desenvolver novas habilidades culinárias. Oferecemos uma experiência gratificante e recompensadora para aqueles que são apaixonados por pizza, atendimento ao cliente e um ambiente de trabalho acolhedor.
                </p>
            </div>

            @component('public-components.institucional')
            @endcomponent
            
            <div class="row mb-4">
                <p>
                    Se identificou com a nossa cultura? Então não hesite em entrar em contato!
                </p>

            </div>

            <hr>

        </section>
        
        @include('forms.trabalhe_conosco')

        <hr>

    </div>
</div>
