<?php

$users = [];

$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];
$users[] = [11111111111, "usuário 1", 111111111, "usuario1@gmail.com", 123, "admin"];

?>


<div class="container-fluid">

    <!--button and search bar-->
    <div class="row m-3 justify-content-between">
        <div class="col-12 col-sm-6 col-md-3">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal_new_user">Novo Cadastro</button>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <form action="#" method="get">
                <div class="input-group mb-3">
                    <label for="search" class="input-group-text btn btn-success"><i class="fa-solid fa-search"></i></label>
                    <input type="search" name="input_search" id="search" class="form-control border border-success">
                </div>
            </form>
        </div>
    </div>

    <!--limit registers-->
    <div class="row m-3">
        <div class="col">
            <div>
                Mostra
                <select name="select_limit" id="limit" class="p-1">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
                por vez
            </div>
        </div>
    </div>

    <!--table users-->
    <div class="row mx-2 mt-5 justify-content-center">
        <div class="col-11">

            <table class="table table-hover">
                <!--heads-->
                <thead>
                    <tr>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Nível</th>
                        <th>Opções</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <?php foreach ($user as $i) : ?>
                                <td><?= $i ?></td>
                            <?php endforeach; ?>
                            <td>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <a href="#">
                                            <i class="fa-solid fa-search text-primary"></i>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a href="#">
                                            <i class="fa-solid fa-edit text-success"></i>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a href="#">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-11">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>