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
                                <a class="dropdown-item text-light" href data-bs-toggle="modal" data-bs-target="#modal-edit-profile">Editar Perfil</a>
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

<!--modal what to edit profile of a user-->
<div class="modal fade" id="modal-edit-profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="my-modal modal-content border border-primary">
            <div class="modal-header" id="header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Perfil</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="edit-profile-frm" action="?ct=main&mt=edit_profile&id=<?= $login->id ?>">
                    <div class="row my-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="input_name" id="name" placeholder="Nome" required value="<?= $login->name ?>">
                                <label for="name">Nome</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="input_cpf" id="cpf" placeholder="CPF" required>
                                <label for="cpf">CPF</label>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="input_email" id="email" placeholder="Email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" name="input_password" id="password" placeholder="Senha" required>
                                <label for="password">Senha</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>