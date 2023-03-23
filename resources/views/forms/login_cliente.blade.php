@extends("common.base-template")

<div class="containter">
    
    <div class="row mt-5">

        <div class="col-md-3 mt-5 mx-auto">

            <form class="text-center border border-light p-5" action="#!">

                <p class="h4 mb-4">Entrar</p>

                <input type="email" id="txtEmail" name ="txtEmail" class="form-control mb-4" placeholder="E-mail">
                <input type="password" id="txtSenha" name ="txtSenha" class="form-control" placeholder="Senha">

                <div class="d-flex justify-content-around">
                    <!--div>
                        < Remember me>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                        </div>
                    </div-->
                    <!--div>
                        < Forgot password >
                        <a href="">Forgot password?</a>
                    </div-->
                </div>

                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Entrar</button>

                <!-- Register -->
                <p>Não?
                    <a href="signUp"><strong>Cadastre-se!</strong></a>
                </p>

            </form>
            <!-- Default form login -->

        </div>
    </div>

</div>