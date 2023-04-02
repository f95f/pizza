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

                <textarea type="text" id="txtMensagem" name="txtMensagem" rows="5" class="form-control md-textarea"></textarea>
                <label for="txtMensagem">Mensagem</label>

            </div>

        </div>
    </div>

</form>

<div class="text-center text-md-left">
    <a class="btn btn-destaque m-0" onclick="document.getElementById('contact-form').submit();">Enviar!</a>
</div>

<div class="status"></div>