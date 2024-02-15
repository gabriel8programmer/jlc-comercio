
<div class="bg-primary w-100 vh-100">
    <div class="container-fluid py-5" id="login">

        <div class="row justify-content-center">
            <div id="logo-app">
                <img class="img-fluid" src="./assets/img/logo-small.png" alt="logo da applicação em tamalho pequeno">
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-11 col-sm-10 col-md-6">

                <div class="p-2 rounded-3 mx-auto" id="login-container">
                    <form action="?ct=main&mt=login_submit" method="post" class="p-3 rounded-4">
                        <!--title-->
                        <div class="text-center">
                            <label class="h1 text-bold text-light">LOGIN</label>
                        </div>

                        <!--user icon -->
                        <div class="d-flex justify-content-center">
                            <div id="icon-user">
                                <img src="./assets/img/icon-user.png" alt="icone do usuário" class="img-fluid">
                            </div>
                        </div>

                        <!--inputs-->

                        <!--user-->
                        <div class="mb-3 text-center form-floating">
                            <input type="text" name="input_user" placeholder="Usuário" class="form-control px-2" required>
                            <label class="form-label">Usuário</label>
                        </div>

                        <!--password-->
                        <div class="mb-3 form-floating">
                            <input type="password" name="input_password" placeholder="Senha" class="form-control px-2" required>
                            <label class="form-label">Senha</label>
                        </div>

                        <!--submit and cancel-->
                        <div class="mb-3 text-center" id="buttons">
                            <input type="submit" value="Entrar" class="btn btn-transparent border-0 outline-0 text-light" name="inputSubmit">
                            <input type="button" value="Cancelar" class="btn btn-transparent border-0 outline-0 text-light" name="inputCancel">
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>