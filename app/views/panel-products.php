<div class="container-fluid">

    <div class="row my-2">
        <div class="col">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal_new_product">Novo Produto</button>
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
                            <th scope="col">Código</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Valor Venda</th>
                            <th scope="col">Qtd/Estoque</th>
                            <th scope="col">Fornecedor</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0000000000</td>
                            <td>produto teste teste</td>
                            <td>R$ 50,00</td>
                            <td>10</td>
                            <td>fornecedor teste</td>
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