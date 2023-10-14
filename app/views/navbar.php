<nav class="navbar navbar-expand-lg" id="navbar-dashboard">
    <div class="container-fluid px-5">
        <!-- home -->
        <a class="navbar-brand text-light" href="./dashboard.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill me-2" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
            </svg>
            Home
        </a>

        <!-- list button -->
        <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list text-light" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
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
                        <li><a class="dropdown-item" href="./users.php">Usuários</a></li>
                        <li><a class="dropdown-item" href="./clients.php">Clientes</a></li>
                    </ul>
                </li>

                <!-- suppliers -->
                <li class="nav-item">
                    <a class="nav-link text-light" aria-disabled="true" href="#">Fornecedores</a>
                </li>

                <!-- cash -->
                <li class="nav-item text-light">
                    <a class="nav-link text-light" aria-disabled="true" href="#">Caixa</a>
                </li>

                <!-- payment methods -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Forma PGTOS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">forma 1</a></li>
                        <li><a class="dropdown-item" href="#">forma 2</a></li>
                    </ul>
                </li>

                <!-- products -->
                <li class="nav-item">
                    <a class="nav-link text-light" aria-disabled="true" href="products.php">Produtos</a>
                </li>

                <!-- sales / cash -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Vendas / Caixa
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">forma 1</a></li>
                        <li><a class="dropdown-item" href="#">forma 2</a></li>
                    </ul>
                </li>

                <!-- Reports -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Relatórios
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Relatório 1</a></li>
                        <li><a class="dropdown-item" href="#">Relatório 2</a></li>
                    </ul>
                </li>
            </ul>

            <!-- current user -->
            <div class="nav-item dropdown" id="navbar-icon-user">
                <a class="nav-link dropdown-toggle text-light d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div style="width: 40px; height: 40px;">
                        <img src="./assets/images/icon-user.png" alt="icone de usuário" class="img-fluid">
                    </div>
                    Administrador
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Administrador</a></li>
                    <li><a class="dropdown-item" href="#">Tesoreiro</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>