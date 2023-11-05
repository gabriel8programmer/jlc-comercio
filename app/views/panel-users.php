<div class="container-fluid">

    <div class="row my-2">
        <div class="col">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal_new_user">
                Novo Usuário
            </button>
            <div class="modal fade" id="modal_new_user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable modal-fullscreen-sm-down">
                    <div class="my-modal modal-content border border-primary">
                        <div class="modal-header px=3 py-1" id="header">
                            <h1 class="modal-title fs-5 text-light text-bold" id="exampleModalLabel">Cadastro de Usuário</h1>
                            <button type="button" class="btn text-light fs-5" data-bs-dismiss="modal" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-x text-bold" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="?ct=user&mt=add_new_user" method="post">
                                <div class="row g-2 my-2">
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="form-floating">
                                            <input type="text" name="input_cpf" id="cpf" placeholder="cpf" required class="form-control">
                                            <label for="cpf" class="form-label">CPF</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-6">
                                        <div class="form-floating">
                                            <input type="text" name="input_name" id="name" placeholder="name" required class="form-control">
                                            <label for="name" class="form-label">Nome</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="form-floating">
                                            <input type="text" name="input_phone" id="phone" placeholder="Contato" required class="form-control">
                                            <label for="phone" class="form-label">Contato</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-2 my-2 justify-content-between align-items-center">
                                    <div class="col-12 col-lg-8">
                                        <div class="row g-2">
                                            <div class="col-12 col-sm-4 col-lg-4">
                                                <div class="form-floating">
                                                    <input type="email" name="input_email" id="email" placeholder="email" required class="form-control">
                                                    <label for="email" class="form-label">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-lg-3">
                                                <div class="form-floating">
                                                    <input type="password" name="input_password" id="password" placeholder="password" required class="form-control">
                                                    <label for="password" class="form-label">Senha</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-lg-5">
                                                <div class="form-floating">
                                                    <select name="select_profile" id="profile" placeholder="Nível" required class="form-select">
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
        </div>
    </div>

    <div class="row g-3 my-3 justify-content-between">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <form>
                Montrar
                <select class="px-1 py-2">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                por vez
            </form>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <form>
                <div class="input-group">
                    <label for="search-user" class="input-group-text btn btn-success" id="basic-addon1"><i class="bi bi-search"></i></label>
                    <input type="search" id="search-user" class="form-control" placeholder="Pesquise aqui...">
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5 mb-3">

        <div class="col-12">
            <small>
                <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                            <th scope="col">CPF</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Contato</th>
                            <th scope="col">Email</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Nível</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $user->cpf ?></td>
                                <td><?= $user->name ?></td>
                                <td><?= $user->phone ?></td>
                                <td><?= $user->email ?></td>
                                <td><?= $user->password ?></td>
                                <td><?= $user->profile ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col-2">
                                            <a href="?ct=user&mt=edit_user&id=<?= $user->id ?>" class="text-primary fs-6">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                        </div>
                                        <div class="col-2" data-bs-toggle="modal" data-bs-target="#modal-remove-user">
                                            <i class=" bi bi-trash3-fill text-danger fs-6"></i>
                                            <!--modal for to remove a user -->
                                            <div class="modal fade" id="modal-remove-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="my-modal modal-content border border-primary">
                                                        <div class="modal-header" id="header">
                                                            <h5 class="modal-title">Excluir Registro</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Deseja Realmente Excluir este Registro?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="?ct=user&mt=remove_user&id=<?= $user->id ?>" method="get">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </small>
        </div>
    </div>
</div>