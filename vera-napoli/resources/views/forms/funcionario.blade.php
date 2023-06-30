<div class="containter">

    <div class="row">

        <div class="col-md-10 mx-auto my-5">
    
            <form method = "post" class="text-center border border-light p-5" action="{{ url('funcionario') }}">
                @csrf

                <p class="h4 mb-4">Cadastre</p>

                <div class="form-row mb-4">

                    <div class="col">
                        
                        <input type="text" id="nome" name="pessoa[nome]" class="form-control" placeholder="Nome">

                    </div>

                    <div class="col">
                        
                        <input type="text" id="snome" name="pessoa[snome]" class="form-control" placeholder="Sobrenome">

                    </div>

                </div>

                <div class="form-row mb-4">

                    <div class="col">
                            
                        <input type="date" id="nasc" name="pessoa[nasc]" class="form-control" placeholder="sla kk">

                    </div>
                
                    <div class="col">
 
                        <div class="form-check form-check-inline mr-5">
                            <input type="radio" value = "feminino" class="form-check-input" id="feminino" name="pessoa[genero]">
                            <label class="form-check-label" for="feminino">Feminino</label>
                        </div>

                        <div class="form-check form-check-inline mr-5">
                            <input type="radio" value = "masculino" class="form-check-input" id="masculino" name="pessoa[genero]">
                            <label class="form-check-label" for="masculino">Masculino</label>
                        </div>

                    </div>

                </div>

                <div class="form-row mb-4">

                    <div class="col">
                        
                        <input type="text" id="telefone" name="contato[telefone]" class="form-control" placeholder="Telefone">

                    </div>

                    <div class="col">
                        
                        <input type="text" id="email" name="contato[email]" class="form-control" placeholder="Email">

                    </div>

                </div>

                <button class="btn btn-info my-4 btn-block" type="submit">Cadastrar</button>

                <hr>

            </form>
            
        </div>
    </div>
</div>