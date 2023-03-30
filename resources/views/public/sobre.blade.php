@extends('common.base-template')
@section('content')

<div class="container-fluid mx-0 px-0">

    <div id = "banner-contato">

        <div class="mask rgba-orange-light">

            <div class="row justify-content-center align-items-center mb-5 pb-4 mx-0 px-0 " style="padding-top:150px">

                <h2 class="font-weight-bold text-center h1 my-5 sombra" style = "color: var(--CLEAR)">Bem-vindo à Vera Napoli</h2>

            </div>
        </div>

    </div>

    <div class="container">

        <section class="section wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1; animation-delay: 0.3s; color: var(--WHITE)">
        
            <div class="row">
                <h4>Nossa História</h4>
                <p>
                    Somos uma pizzaria tradicional, mas moderna e apaixonada combina o melhor dos dois mundos - o sabor clássico da autêntica pizza italiana e a criatividade e inovação da fabricação de pizza moderna. Essa marca se orgulha de seu compromisso em usar apenas os ingredientes mais frescos e finos, provenientes de fazendas e produtores locais. Cada pizza é criada com cuidado e atenção aos detalhes, refletindo uma paixão pela tradição e um amor pelo sabor. Com uma atmosfera acolhedora e convidativa e uma equipe simpática, esta pizzaria oferece uma experiência que combina a nostalgia do charme do velho mundo com a empolgação das técnicas culinárias modernas.
                </p>
            </div>

            <div class="row">

                <img src="" alt=""> 
            
            </div>
            
            @component('components.social-row')
            @endcomponent
            


            @component('components.institucional')
            @endcomponent
            
            <hr>
                <div class="row">
                    <p class = "text-center">
                        Tem interesse em fazer parte da nossa história?
                        <a href="trabalhe-conosco">trabalhe conosco</a>!
                    </p>
                </div>
            <hr>
        </section>
    </div>
</div>
