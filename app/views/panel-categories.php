<div class="container-fluid">

    <div class="row my-2">
        <div class="col">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal_new_category">Nova Categoria</button>
        </div>
    </div>

    <div class="row g-3 my-3 justify-content-between">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <form>
                Montrar <select class="px-1 py-2">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select> por vez
            </form>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <form>
                <div class="input-group">
                    <label for="search-user" class="input-group-text btn btn-success" id="basic-addon1"><i class="fa-solid fa-search"></i></label>
                    <input type="search" id="search-user" class="form-control" placeholder="Pesquise aqui...">
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5 mb-3">

        <div class="col-12">
            <small>
                <table class="table table-hover table-sm ">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Produtos</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Categoria teste</td>
                            <td>10</td>
                            <td>
                                <div>
                                    <i class="fa-solid fa-image text-secondary fs-5"></i>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-2">
                                        <a href="#" class="text-primary fs-6">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a href="#" class="text-danger fs-6">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </small>
        </div>

    </div>
</div>