<div class="modal fade" id="modal_new_client" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5 text-light text-bold" id="exampleModalLabel">Cadastro de Cliente</h1>
                <button type="button" class="btn text-light fs-5" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-x text-bold" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="row my-2 g-2">
                        <div class="col-3">
                            <div class="form-floating">
                                <input type="text" name="input_cpf-cnpj" id="cpf-cnpj" placeholder="cpf-cnpj" required class="form-control">
                                <label for="cpf-cnpj" class="form-label">CPF/CNPJ</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" name="input_name" id="name" placeholder="name" required class="form-control">
                                <label for="name" class="form-label">Nome</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-floating">
                                <input type="text" name="input_phone" id="phone" placeholder="phone" required class="form-control">
                                <label for="phone" class="form-label">Telefone</label>
                            </div>
                        </div>
                    </div>

                    <div class="row my-2 g-2">
                        <div class="col-5">
                            <div class="form-floating">
                                <input type="email" name="input_email" id="email" placeholder="email" required class="form-control">
                                <label for="email" class="form-label">Email</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="text" name="input_cep" id="cep" placeholder="cep" required class="form-control">
                                <label for="cep" class="form-label">Cep</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-floating">
                                <input type="text" name="input_public_place" id="public_place" placeholder="public_place" required class="form-control">
                                <label for="public_place" class="form-label">Logradouro</label>
                            </div>
                        </div>
                    </div>

                    <div class="row my-2 g-2">
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="text" name="input_number" id="number" placeholder="number" required class="form-control">
                                <label for="number" class="form-label">Numero</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-floating">
                                <input type="text" name="input_complement" id="complement" placeholder="complement" required class="form-control">
                                <label for="complement" class="form-label">Complemento</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="text" name="input_state" id="state" placeholder="state" required class="form-control">
                                <label for="state" class="form-label">Estado</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-floating">
                                <input type="text" name="input_city" id="city" placeholder="city" required class="form-control">
                                <label for="city" class="form-label">Cidade</label>
                            </div>
                        </div>
                    </div>

                    <div class="row my-2 g-2 justify-content-end">
                        <div class="col-3">
                            <input type="submit" class="btn btn-success text-light w-100" value="Gravar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>