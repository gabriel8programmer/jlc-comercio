<!--modal to edit a user in database-->
<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="my-modal modal-content border border-primary">
            <div class="modal-header" id="header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="row my-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="user_edit_name" placeholder="Nome" required>
                                <label for="name">Nome</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="cpf" id="user_edit_cpf" placeholder="CPF" required>
                                <label for="cpf">CPF</label>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="user_edit_email" placeholder="Email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password" id="user_edit_password" placeholder="Senha" required>
                                <label for="password">Senha</label>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <select name="select_profile" id="user_edit_profile" placeholder="Nível" class="form-select" required>
                                    <option value="admin">Administrador</option>
                                    <option value="tesoureiro">Tesoureiro</option>
                                    <option value="operador">Operador</option>
                                </select>
                                <label for="profile" class="form-label">Nível</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--validations-->
<script>
    window.addEventListener("load", ()=> {
        getCpfMask("user_edit_cpf");
    });
</script>