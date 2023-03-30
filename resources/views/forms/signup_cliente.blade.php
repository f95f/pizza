        <div class="col-md-6 mx-auto py-5">

            <form method = "post" class="text-center p-5" action="{{ url('save') }}">
                @csrf
                
                <h4>Cadastre-se!</h4>

                <div class="form-row mb-4 mt-5">
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

                <button class="btn btn-destaque w-100 my-4 btn-block" type="submit">Enviar</button>
                <p class = "white-text">Já possui cadastro?
                    <a href="login"><strong>Entrar</strong></a>
                </p>
            </form>
      
        </div>

    </div>

</div>