<!--modal to add new user in the database-->
<div class="modal fade" id="modal-add-new" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable modal-fullscreen-sm-down">
        <div class="my-modal modal-content border border-primary">
            <div class="modal-header px=3 py-1" id="header">
                <h1 class="modal-title fs-5 text-light text-bold" id="exampleModalLabel">Cadastro de Usuário</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="row g-2 my-2">
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="form-floating">
                                <input type=button"text" name="input_cpf" id="user_cpf" placeholder="cpf" class="form-control" required>
                                <label for="cpf" class="form-label">CPF</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-9">
                            <div class="form-floating">
                                <input type="text" name="input_name" id="user_name" placeholder="name" class="form-control" required>
                                <label for="name" class="form-label">Nome</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 my-2 justify-content-between align-items-center">
                        <div class="col-12 col-lg-8">
                            <div class="row g-2">
                                <div class="col-12 col-sm-4 col-lg-4">
                                    <div class="form-floating">
                                        <input type="email" name="input_email" id="user_email" placeholder="email" class="form-control" required>
                                        <label for="email" class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 col-lg-3">
                                    <div class="form-floating">
                                        <input type="password" name="input_password" id="user_password" placeholder="password" class="form-control" required>
                                        <label for="password" class="form-label">Senha</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 col-lg-5">
                                    <div class="form-floating">
                                        <select name="select_profile" id="user_profile" placeholder="Nível" class="form-select" required>
                                            <option value="" selected disabled>Selecione</option>
                                            <option value="admin">Administrador</option>
                                            <option value="tesoureiro">Tesoureiro</option>
                                            <option value="operador">Operador</option>
                                        </select>
                                        <label for="profile" class="form-label">Nível</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <input type="submit" class="btn btn-success text-light w-100" value="Gravar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--validations-->
<script>
    window.addEventListener("load", ()=> {
        getCpfMask("user_cpf");
    });
</script>