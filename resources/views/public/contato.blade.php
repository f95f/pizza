@extends('common.base-template')
@section('content')

<div class="container-fluid mx-0 px-0">

    @component('components.banner-pequeno', [
        'imagem' => 'banner-pequeno-img2',
        'texto' => 'Fale com a gente!'
    ])
    @endcomponent

    <div class="container pt-5">

        <section class="section wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1; animation-delay: 0.3s; color: var(--WHITE)">
        
            <div class="row">
                <div class="col mx-auto align-text-center">

                    <h4 class="white-text mx-auto w-responsive">
                        Dúvidas, críticas, sugestões ou reclamações? 
                    </h4>
                    <p class = "text-center">
                        Entre em contato como preferir. Atenderemos o quanto antes!
                    </p>
      
                </div>
            </div>

            @component('components.social-row', [
                'titulo' => 'Nossas redes sociais!'    
            ])
            @endcomponent
            
            <div class="row py-5">

                <div class="col-md-8 mb-md-0 mb-5">
                   
                    @include('forms.mensagem_cliente')

                </div>
                
                <div class="col-md-4 text-center">

                    <ul class="list-unstyled mb-0">
                        <li>
                            <i class="fas fa-map-marker-alt fa-2x mb-1"></i>
                            <p>Av. Salgado Filho, 8888 <br> Guarulhos, SP</p>
                        </li>

                        <li>
                            <i class="fas fa-phone mt-4 fa-2x mb-1"></i>
                            <p>(11) 91234-5678</p>
                        </li>

                        <li>
                            <i class="fab fa-whatsapp mt-4 fa-2x mb-1"></i>
                            <p>(11) 91234-5678</p>
                        </li>

                        <li>
                            <i class="fas fa-envelope mt-4 fa-2x mb-1"></i>
                            <p>contacto@veranapoli.com</p>
                        </li>
                    </ul>

                </div>
            </div>

        </section>

    </div>
<hr>
</div>