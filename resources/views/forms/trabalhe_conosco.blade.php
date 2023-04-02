<section class="section wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1; animation-delay: 0.3s; color: var(--WHITE)">

    <div class="row">
        <div class="col mx-auto py-5 align-text-center">

            <h4 class="white-text mx-auto w-responsive">
                Nos conte sobre você! 
            </h4>

        </div>
    </div>

    <div class="col-md-8 mx-auto mb-5">

        <form class = "formEscuro" id="formCandidado" name="formCandidato" action="#" method="POST">

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