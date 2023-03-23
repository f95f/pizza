@extends("common.base-template")

<div class="containter my-5">

    <div class="row my-5">

        <div class="col-md-4 mx-auto my-5">

            <form method = "post" class="text-center border border-light p-5" action="{{ url('save') }}">
                @csrf
                
                <p class="h4 mb-4">Cadastre-se!</p>

                <div class="form-row mb-4">
                    <div class="col">
                        <input type="text" id="txtNome" name = "txtNome" class="form-control" placeholder="Nome">
                    </div>

                    <div class="col">
                        <input type="text" id="txtSNome" name = "txtSNome" class="form-control" placeholder="Sobrenome">
                    </div>
                </div>

                <input type="email" id="txtEmail" name ="txtEmail" class="form-control mb-4" placeholder="E-mail">
                <input type="password" id="txtSenha" name ="txtSenha" class="form-control mb-4" placeholder="Senha">
                <input type="text" id="txtFone" name ="txtFone" class="form-control" placeholder="Telefone">

                <button class="btn btn-info my-4 btn-block" type="submit">Enviar</button>
                <p>Já possui cadastro?
                    <a href="login"><strong>Entrar</strong></a>
                </p>
            </form>
      
        </div>

    </div>

</div>