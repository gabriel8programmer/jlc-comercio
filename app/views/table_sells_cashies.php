<div class="container-fluid">

    <div class="row my-2">
        <div class="col">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal_new_user">Novo Usuário</button>
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
                            <th scope="col">Status</th>
                            <th scope="col">Data Abertura</th>
                            <th scope="col">Vendido</th>
                            <th scope="col">Quebra</th>
                            <th scope="col">Caixa</th>
                            <th scope="col">Operador</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <i class="fa-solid fa-square text-success"></i>    
                            Aberto</td>
                            <td>22/10/2023</td>
                            <td>R$ 0,00</td>
                            <td>R$ 0,00</td>
                            <td>Caixa 5</td>
                            <td>Operador2</td>
                            <td>
                                <div class="row">
                                    <div class="col-2">
                                        <a href="#" class="text-primary fs-6">
                                        <i class="fa-regular fa-clipboard text-success"></i>                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a href="#" class="text-danger fs-6">
                                        <i class="fa-regular fa-clipboard text-info"></i>                                        </a>
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