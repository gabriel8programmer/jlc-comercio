<section class="overflow-hidden">
    <!--container-->
    <div class="container-fluid bg-primary vh-100" id="login">

        <!--range-->
        <div class="row" id="range"></div>

        <!--container login-->
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-sm-6 col-md-5 col-lg-4 col-xl-3 col-xxl-2">
                <!--logo-small app-->
                <div class="mb-3 d-flex justify-content-center">
                    <div id="logo-app">
                        <img src="./assets/images/logo-small.png" alt="logo da aplicação" class="img-fluid">
                    </div>
                </div>

                <form action="?ct=main&mt=login_submit" method="post" class="p-3 rounded-4" id="form-login" novalidate>

                    <!--title-->
                    <div class="text-center">
                        <label class="h1 text-bold text-light">LOGIN</label>
                    </div>

                    <!--user icon -->
                    <div class="d-flex justify-content-center">
                        <div id="icon-user">
                            <img src="./assets/images/icon-user.png" alt="icone do usuário" class="img-fluid">
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
                        <input type="submit" value="Entrar" class="btn btn-transparent border-0 outline-0 text-light"
                            name="inputSubmit">
                        <input type="button" value="Cancelar" class="btn btn-transparent border-0 outline-0 text-light"
                            name="inputCancel">
                    </div>
                </form>       
                     
                <!--show errors-->
                <?php if(!empty($validation_errors)): ?>
                    <div class="alert alert-danger p-2 my-2 text-center">
                        <?php foreach($validation_errors as $error): ?>
                            <div><?= $error ?></div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>