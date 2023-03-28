@extends('common.base-template')
@section('content')

<div class="container-fluid mx-0 px-0 fundo-escuro">

    <div id = "banner-contato">

        <div class="mask rgba-orange-light">

            <div class="row justify-content-center align-items-center mb-5 pb-4 mx-0 px-0 " style="padding-top:150px">

                <h2 class="font-weight-bold text-center h1 my-5 sombra" style = "color: var(--CLEAR)">Fale com a gente!</h2>

            </div>
        </div>

    </div>

    <div class="container">

        <section class="section pb-5 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1; animation-delay: 0.3s; color: var(--WHITE)">

            <div class="row">

                <h4 class="text-center white-text mb-5 mx-auto w-responsive">
                    Dúvidas, críticas, sugestões ou reclamações? <br> Entre em contato como preferir. Atenderemos o quanto antes!
                </h4>

            </div>

            <div class="row">

                <div class="col-md-8 mb-md-0 mb-5">
                    <form id="formContato" name="formContato" action="#" method="POST">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="md-form mb-0">

                                    <input type="text" id="txtNome" name="txtNome" class="form-control">
                                    <label for="txtNome" class="">Nome</label>

                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="md-form mb-0">

                                    <input type="text" id="txtEmail" name="txtEmail" class="form-control">
                                    <label for="txtEmail" class="">Email</label>

                                </div>
                            </div>

                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">

                                    <input type="text" id="txtAssunto" name="txtAssunto" class="form-control">
                                    <label for="txtAssunto" class="">Assunto</label>

                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">

                                    <textarea type="text" id="txtMensagem" name="txtMensagem" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="txtMensagem">Mensagem</label>

                                </div>

                            </div>
                        </div>
                        
                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn btn-destaque m-0" onclick="document.getElementById('contact-form').submit();">Enviar!</a>
                    </div>

                    <div class="status"></div>

                </div>
                
                <div class="col-md-4 text-center">

                    <ul class="list-unstyled mb-0">
                        <li>
                            <i class="fas fa-map-marker-alt fa-2x mb-1"></i>
                            <p>Av. Salgado Filho, 8888 - Guarulhos, SP</p>
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
</div>