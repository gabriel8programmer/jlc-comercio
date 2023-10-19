<main class="container border border-5 border-sedondary">
    <!--header-->
    <header class="row bg-primary py-4 px-3 align-items-center justify-content-between">
        <div class="col-12 col-sm-12 col-md-8 d-flex align-items-center">
            <div style="width: 90px;" class="mx-2">
                <img src="./assets/images/logo-small.png" alt="logo da applicação" class="img-fluid">
            </div>
            <span class="col h1 text-light mt-2"><strong>PDV VENDA</strong></span>
        </div>

        <div class="col-12 col-sm-12 col-md-4 my-2">
            <input type="search" id="search" placeholder="Buscar venda - (Alt+P)" class="form-control">
        </div>
    </header>

    <!--section buttons-->
    <nav class="row g-3 mt-1">
        <div class="col-12 col-md-4">
            <button class="w-100 p-3 btn btn-light">Produto - (Alt+Z)</button>
        </div>
        <div class="col-12 col-md-4">
            <button class="w-100 p-3 btn btn-secondary">Cliente - (Alt+C)</button>
        </div>
        <div class="col-12 col-md-4">
            <button class="w-100 p-3 btn btn-secondary">Pagamento - (Alt+B)</button>
        </div>
    </nav>

    <!--section advanced search-->
    <section class="row justify-content-between align-items-center my-3">
        <div class="col-12 mb-2">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-4">
                    <span class="text-primary">Pesquisa avançada - (Alt+A)</span>
                </div>
                <div class="col-12 col-md-4 my-2">
                    <span>Ativar leitor de código de barras</span>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Desativado</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <input type="text" id="advanced_search" class="form-control">
        </div>
    </section>

    <!--section description of the product-->
    <section class="row my-3">
        <div class="col my-2">
            <div class="row align-items-end">
                <div class="col-12 col-md-4">
                    <img src="https://fakeimg.pl/350x200/dadada/000" class="w-100 img-fluid">
                </div>
                <div class="col">
                    <div>Valor de Lista</div>
                    <div class="h2"><strong>0,0000</strong></div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row g-2 justify-content-between">
                <div class="col-12 col-md-3">
                    <div class="p-2 border border-secondary"><strong>1,0000</strong></div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="p-2 border border-secondary"><strong>0,00</strong></div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="p-2 border border-secondary"><strong>0,0000</strong></div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="p-2 border border-secondary"><strong>0,00000</strong></div>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->
    <footer class="row mt-2">
        <div class="col-12 bg-success">
            <p class="h-100 text-light fs-5 d-flex align-items-center ps-2">(1) Produto Favoritos (Alt+V)</p>
        </div>
        <div class="col-12 p-4" style="background-color: #ccc;">
            <div class="row g-2">
                <div class="col-12 col-md-6">
                    <button class="p-3 btn btn-secondary w-100">Cancelar Venda - (Alt+Q)</button>
                </div>
                <div class="col-12 col-md-6">
                    <button class="p-3 btn btn-success w-100">Finalizar - (Alt+S)</button>
                </div>
            </div>
        </div>
    </footer>

</main>