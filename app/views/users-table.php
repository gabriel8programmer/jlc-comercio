<div class="container-fluid">

    <div class="row my-2">
        <div class="col">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal-add-new-user">
                Novo Usuário
            </button>
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
                                            <a href="#modal-edit-user" class="text-primary fs-6" data-bs-toggle="modal">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="#modal-remove-user" class="text-primary fs-6" data-bs-toggle="modal">
                                                <i class="bi bi-trash3-fill text-danger fs-6"></i>
                                            </a>
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