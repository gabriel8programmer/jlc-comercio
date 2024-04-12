<header class="container-fluid">
    <div class="row py-3 px-5" id="header-dashboard">
        <div class="col-12 col-sm-8 col-md-6">
            <img src="./assets/img/logo-large.png" alt="logo da applicação" class="img-fluid">
        </div>
    </div>
    <div class="row px-5" id="navbar-dashboard">
        <div class="col">
            <nav class="navbar navbar-expand-lg">

                <!-- home -->
                <a class="navbar-brand text-light" href="?ct=main&mt=index">
                    <i class="bi bi-house-door-fill"></i>
                    Home
                </a>

                <!-- list button -->
                <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>

                <!-- container with all dashboards -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- register -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cadastro
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?ct=user&mt=index">Usuários</a></li>
                                <li><a class="dropdown-item" href="#">Fornecedores</a></li>
                                <li><a class="dropdown-item" href="#">Caixas</a></li>
                                <li><a class="dropdown-item" href="#">Formas de Pagamento</a></li>
                                <li><a class="dropdown-item" href="#">Clientes</a></li>
                            </ul>
                        </li>

                        <!-- products -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Produtos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cadastro de Produtos</a></li>
                                <li><a class="dropdown-item" href="#">Cadastro de Categorias</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Lista de Compras</a></li>
                                <li><a class="dropdown-item" href="#">Estoque Baixo</a></li>
                                <li><a class="dropdown-item" href="#">Alertas Vencimento</a></li>
                            </ul>
                        </li>

                        <!-- sales / cash -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Vendas / Caixa
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Vendas</a></li>
                                <li><a class="dropdown-item" href="#">Caixas</a></li>
                            </ul>
                        </li>

                        <!-- Reports -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Relatórios
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Relatório de Produtos</a></li>
                                <li><a class="dropdown-item" href="#">Relatório de Compras</a></li>
                                <li><a class="dropdown-item" href="#">Relatório de Vendas</a></li>
                                <li><a class="dropdown-item" href="#">Relatório de Produtos Vendidos</a></li>
                                <li><a class="dropdown-item" href="#">Relatório de Quebras</a></li>
                                <li><a class="dropdown-item" href="#">Relatório de Lucro</a></li>
                                <li><a class="dropdown-item" href="#">Relatório de Contas à Receber</a></li>
                                <li><a class="dropdown-item" href="#">Relatório de Contas à Receber Vencidas</a></li>
                                <li><a class="dropdown-item" href="#">Relatório de Produtos Produtos Vencendo</a></li>
                            </ul>
                        </li>

                        <!--panel treasure-->
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link text-light" target="_blank">
                                Painel Tesouraria 
                            </a>
                        </li> -->
                    </ul>

                    <!-- current user -->
                    <div class="nav-item dropdown" id="navbar-icon-user">
                        <a class="nav-link dropdown-toggle text-light d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div style="width: 40px; height: 40px;">
                                <img src="./assets/img/icon-user.png" alt="icone de usuário" class="img-fluid">
                            </div>
                            <?= ucfirst($login->name) ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li>
                                <a href="#" id="link-edit-profile" 
                                class="dropdown-item text-light" 
                                data-userLogin="<?= htmlspecialchars(json_encode($login)) ?>" data-toggle="modal">
                                    Editar Perfil
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider text-light">
                            </li>
                            <li><a class="dropdown-item text-light" href="?ct=main&mt=logout">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<script>
    document.querySelector("#link-edit-profile").addEventListener("click", e => {
        e.preventDefault();
        //get data json and transform in array
        const data_serials = e.target.getAttribute('data-userLogin');
        const data = JSON.parse(data_serials);

        //get id value
        const idValue = data.id;
        
        //show the modal
        showModal("edit-profile");
        //get the form
        const form = document.querySelector("#edit-profile form");

        //set values of the inputs
        form.querySelector("#profile_name").value = data.name;
        form.querySelector("#profile_cpf").value = data.cpf;
        form.querySelector("#profile_email").value = data.email;
        form.querySelector("#profile_password").value = data.password;

        form.addEventListener("submit", e => {
            e.preventDefault();

            const nameValue = e.target.querySelector("#profile_name").value;
            const cpfValue = e.target.querySelector("#profile_cpf").value;
            const emailValue = e.target.querySelector("#profile_email").value;
            const passwordValue = e.target.querySelector("#profile_password").value;

            //define data
            const data = {
                id: idValue,
                name: nameValue,
                cpf: cpfValue,
                email: emailValue,
                password: passwordValue,
            }

            //update and close the modal
            update("ct=main&mt=editProfile", data);

            hideModal("edit-profile");
            reload();

        });
    });

</script>