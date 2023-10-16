<div class="modal fade" id="modal_new_product" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5 text-light text-bold" id="exampleModalLabel">Registro de Produtos</h1>
                <button type="button" class="btn text-light fs-5" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-x text-bold" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="row g-2 my-2">
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="text" name="input_code" id="code" placeholder="code" required class="form-control">
                                <label for="code" class="form-label">Código</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-floating">
                                <input type="text" name="input_name" id="name" placeholder="name" required class="form-control">
                                <label for="name" class="form-label">Nome</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="text" name="input_packaging" id="packaging" placeholder="packaging" required class="form-control">
                                <label for="packaging" class="form-label">Embalagem</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-floating">
                                <select class="form-select" name="input_categories" id="categories" placeholder="categories" required aria-label="Default select example">
                                    <option value="" selected disabled></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="categories" class="form-label">Categorias</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 my-2">
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="text" name="input_supplier" id="supplier" placeholder="supplier" required class="form-control">
                                <label for="supplier" class="form-label">Fornecedor</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="text" name="input_purchase_price" id="purchase_price" placeholder="purchase_price" required class="form-control">
                                <label for="purchase_price" class="form-label"><small>Valor da Compra</small></label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="text" name="input_resale_price" id="resale_price" placeholder="resale_price" required class="form-control">
                                <label for="resale_price" class="form-label"><small>Valor de Revenda</small></label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="text" name="input_profit" id="profit" placeholder="profit" required class="form-control">
                                <label for="profit" class="form-label">Lucro</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <input type="image" name="input_product_photo" id="product_photo" class="btn btn-success" value="Foto do Produto" src="#">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>