@extends('common.base-template')
@section('content')

<div class="container-fluid mx-0 px-0">

    @component('components.banner-pequeno', [
        'imagem' => 'banner-pequeno-img1',
        'texto' => 'Junte-se a nós!'
    ])
    @endcomponent

    <div class="container pt-5">

        <section class="section wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1; animation-delay: 0.3s; color: var(--WHITE)">
        
            <div class="row mb-4">
                <h4 class = "mb-4 ">Interessade em fazer parte desta família?</h4>
                <p class = "text-justify">
                    Trabalhar na Vera Napoli oferece uma oportunidade única de fazer parte de uma equipe dedicada a proporcionar uma experiência autêntica de pizza italiana com um toque moderno. Com um foco em usar apenas os ingredientes mais frescos e finos, os funcionários podem se orgulhar de saber que estão contribuindo para a criação de pizzas saudáveis e de alta qualidade que satisfazem o paladar dos clientes. A atmosfera acolhedora e convidativa da pizzaria e a equipe amigável criam um ambiente de trabalho acolhedor e agradável. Além disso, o compromisso da marca com a criatividade e inovação oferece aos funcionários a chance de aprender e desenvolver novas habilidades culinárias. Em geral, trabalhar nesta marca de pizza oferece uma experiência gratificante e recompensadora para aqueles que são apaixonados por pizza, atendimento ao cliente e um ambiente de trabalho acolhedor e acolhedor.
                </p>
            </div>

            @component('components.institucional')
            @endcomponent
            
            <div class="row mb-4">
                <p>
                    Se identificou com a nossa cultura? Então não hesite em entrar em contato!
                </p>

            </div>

            <hr>

        </section>
        
        <section class="section wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1; animation-delay: 0.3s; color: var(--WHITE)">

            <div class="row">
                <div class="col mx-auto py-5 align-text-center">

                    <h4 class="white-text mx-auto w-responsive">
                        Nos conte sobre você! 
                    </h4>

                </div>
            </div>

            <div class="col-md-8 mx-auto mb-5">

                <form id="formCandidado" name="formCandidato" action="#" method="POST">

                    <div class="row">

                        <div class="col">
                            <div class="md-form mb-0">

                                <input type="text" id="txtNome" name="txtNome" class="form-control">
                                <label for="txtNome" class="">Nome</label>

                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="md-form mb-0">

                                <input type="text" id="txtSnome" name="txtSnome" class="form-control">
                                <label for="txtSnome" class="">Sobrenome</label>

                            </div>
                        </div>

                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">

                                <input type="text" id="txtEmail" name="txtEmail" class="form-control">
                                <label for="txtEmail" class="">Email</label>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">

                                <input type="text" id="txtInteresse" name="txtInteresse" class="form-control">
                                <label for="txtInteresse" class="">Área de interesse</label>

                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">

                                <textarea type="text" id="txtMensagem" name="txtMensagem" rows="5" class="form-control md-textarea"></textarea>
                                <label for="txtMensagem">Fale um pouco do seu interesse em trabalhar aqui.</label>

                            </div>

                        </div>
                    </div>
                    
                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-destaque m-0" onclick="document.getElementById('contact-form').submit();">Enviar!</a>
                </div>

                <div class="status"></div>

            </div>

        </section>
         <hr>

    </div>
</div>
