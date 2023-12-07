<div class="container-fluid">

    <div class="row my-2">
        <div class="col">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#add-new-user-modal">
                Novo Usuário
            </button>
        </div>
    </div>

    <div class="row g-3 my-3 justify-content-between">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <form>
                Mostrar
                <select class="px-1 py-2">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                por vez
            </form>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <form>
                <div class="input-group">
                    <label for="search-user" class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></label>
                    <input type="search" id="search-user" class="form-control" placeholder="Pesquise aqui...">
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5 mb-2">

        <div class="col-12">
            <small>
                <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                            <th scope="col">CPF</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Contato</th>
                            <th scope="col">Email</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Nível</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody id="table-users">
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $user->cpf ?></td>
                                <td><?= $user->name ?></td>
                                <td><?= $user->phone ?></td>
                                <td><?= $user->email ?></td>
                                <td><?= $user->password ?></td>
                                <td><?= $user->profile ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col-2">
                                            <a href="#edit-user-modal" data-id="<?= $user->id ?>" data-bs-toggle="modal" class="link-edit-user">
                                                <i class="bi bi-pencil-square text-info fs-6"></i>
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="#remove-user-modal" data-id="<?= $user->id ?>" data-bs-toggle="modal" class="link-remove-user">
                                                <i class="bi bi-trash3-fill text-danger fs-6"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </small>
        </div>
    </div>

</div>

<!--modals-->

<!--modal to add new user in the database-->
<div class="modal fade" id="add-new-user-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable modal-fullscreen-sm-down">
        <div class="my-modal modal-content border border-primary">
            <div class="modal-header px=3 py-1" id="header">
                <h1 class="modal-title fs-5 text-light text-bold" id="exampleModalLabel">Cadastro de Usuário</h1>
                <button type="button" class="btn text-light fs-5" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-x text-bold" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="add-new-user-frm">
                    <div class="row g-2 my-2">
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="form-floating">
                                <input type="text" name="input_cpf" id="cpf" placeholder="cpf" required class="form-control">
                                <label for="cpf" class="form-label">CPF</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-6">
                            <div class="form-floating">
                                <input type="text" name="input_name" id="name" placeholder="name" required class="form-control">
                                <label for="name" class="form-label">Nome</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="form-floating">
                                <input type="text" name="input_phone" id="phone" placeholder="Contato" required class="form-control">
                                <label for="phone" class="form-label">Contato</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 my-2 justify-content-between align-items-center">
                        <div class="col-12 col-lg-8">
                            <div class="row g-2">
                                <div class="col-12 col-sm-4 col-lg-4">
                                    <div class="form-floating">
                                        <input type="email" name="input_email" id="email" placeholder="email" required class="form-control">
                                        <label for="email" class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 col-lg-3">
                                    <div class="form-floating">
                                        <input type="password" name="input_password" id="password" placeholder="password" required class="form-control">
                                        <label for="password" class="form-label">Senha</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 col-lg-5">
                                    <div class="form-floating">
                                        <select name="select_profile" id="profile" placeholder="Nível" required class="form-select">
                                            <option value="admin">Administrador</option>
                                            <option value="tesoureiro">Tesoureiro</option>
                                            <option value="operador">Operador</option>
                                        </select>
                                        <label for="profile" class="form-label">Nível</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <input type="submit" id="btnAddNewUser" class="btn btn-success text-light w-100" value="Gravar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--modal to edit a user in database-->
<div class="modal fade" id="edit-user-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="my-modal modal-content border border-primary">
            <div class="modal-header" id="header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="edit-user-frm">
                    <div class="row my-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="input_name" id="name" placeholder="Nome" required>
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

                    <div class="row my-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <select name="select_profile" id="profile" placeholder="Nível" required class="form-select">
                                    <option value="admin">Administrador</option>
                                    <option value="tesoureiro">Tesoureiro</option>
                                    <option value="operador">Operador</option>
                                </select>
                                <label for="profile" class="form-label">Nível</label>
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

<!--modal to remove a user in database-->
<div class="modal fade" id="remove-user-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="my-modal modal-content border border-primary">
            <div class="modal-header" id="header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Remover Registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" id="remove-user-frm">
                <div class="modal-body">
                    <p>Deseja Realmente Excluir este Registro?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" name="btn-submit" id="btnRemoveUser" class="btn btn-danger">Excluir</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    //get all forms
    const $frmAddNewUser = document.querySelector("#add-new-user-frm")
    const $frmEditUser = document.querySelector("#edit-user-frm")
    const $frmRemoveUser = document.querySelector("#remove-user-frm")
    const $linksRemoveUser = [...document.querySelectorAll(".link-remove-user")]
    const $linksEditUser = [...document.querySelectorAll(".link-edit-user")]
    const $tableUsers = document.querySelector("#table-users")

    let updatedUserId = 0

    //test user
    function fakeUser(number = "") {
        $frmAddNewUser.querySelector("#name").value = `teste${number}`
        $frmAddNewUser.querySelector("#cpf").value = "111.111.111-11"
        $frmAddNewUser.querySelector("#email").value = `teste${number}@gmail.com`
        $frmAddNewUser.querySelector("#phone").value = "(11) 11111-1111"
        $frmAddNewUser.querySelector("#password").value = "123"
        $frmAddNewUser.querySelector("#profile").value = "operador"
    }


    //function for to add a new user in the database
    function load_users() {

        axios.get("?ct=user&mt=index")
            .then(response => {
                if (response.status === 200) {
                    return response.data
                } else {
                    throw Error("Erro, Não foi possível se acessar o recurso!")
                }
            })
            .then(data => {
                console.log(data)
            })
            .catch(error => {
                console.log(error.message)
            })
    }

    function reload(){
        location.reload()
    }

    function updateIdUser(e) {
        updatedUserId = e.target.dataset.id
        console.log(updatedUserId)
    }
    
    function updateUserData(e) {
        //get inputs
        const cpfValue = $frmEditUser.querySelector("#cpf")
        const nameValue = $frmEditUser.querySelector("#name")
        const emailValue = $frmEditUser.querySelector("#email")
        const passwordValue = $frmEditUser.querySelector("#password")
        const profileValue = $frmEditUser.querySelector("#profile")
        
        updatedIdUser = e.target.dataset.id
        console.log(updatedIdUser);
    }

    function addNewUser(e) {
        e.preventDefault()

        const nameAdd = $frmAddNewUser.querySelector("#name").value
        const cpfAdd = $frmAddNewUser.querySelector("#cpf").value
        const emailAdd = $frmAddNewUser.querySelector("#email").value
        const phoneAdd = $frmAddNewUser.querySelector("#phone").value
        const passwordAdd = $frmAddNewUser.querySelector("#password").value
        const $profileElement = $frmAddNewUser.querySelector("#profile")
        const profileAdd = $profileElement.options[$profileElement.selectedIndex].value

        axios.post("?ct=user&mt=insert_user", {
                nameSend: nameAdd,
                cpfSend: cpfAdd,
                emailSend: emailAdd,
                phoneSend: phoneAdd,
                passwordSend: passwordAdd,
                profileSend: profileAdd
            })
            .then(response => {
                if (response.status === 200) {
                    return "OK, USER ADDED!"
                } else {
                    throw Error("Error!")
                }
            })
            .then(data => {
                console.log(data)
            })
            .catch(error => {
                console.log(error.message)
            })

        reload()
    }
    
    function updateUser(e){
        e.preventDefault()

        const nameAdd = $frmEditUser.querySelector("#name").value
        const cpfAdd = $frmEditUser.querySelector("#cpf").value
        const emailAdd = $frmEditUser.querySelector("#email").value
        const passwordAdd = $frmEditUser.querySelector("#password").value
        const $profileElement = $frmEditUser.querySelector("#profile")
        const profileAdd = $profileElement.options[$profileElement.selectedIndex].value

        const idAdd = updatedIdUser
        axios.post("?ct=user&mt=update_user", {
            idSend: idAdd,
            cpfSend: cpfAdd,
            nameSend: nameAdd,
            emailSend: emailAdd,
            cpfSend: cpfAdd,
            passwordSend:passwordAdd,
            profileSend: profileAdd
        })
        .then(response => {
            if (response.status === 200){
                return response.data//`OK, USER ${idAdd} UPDATED`
            } else {
                throw Error("Recurso não disponível!")
            }
        })
        .then(data => {
            console.log(data)
        })
        .catch(error => {
            console.log(error.message)
        })

        reload();
    }

    function removeUser(e) {
        e.preventDefault();

        const idAdd = updatedUserId
        axios.post("?ct=user&mt=remove_user", {
                idSend: idAdd
            })
            .then(response => {
                if (response.status === 200) {
                    return `USER ${idAdd} DELETED`
                } else {
                    throw Error("Recurso indisponível!")
                }
            })
            .then(data => {
                console.log(data)
            })
            .catch(error => {
                console.log(error.message)
            })

        reload()
    }

    //events
    $linksRemoveUser.forEach($link => {
        $link.addEventListener("click", updateIdUser)
    })

    $linksEditUser.forEach($link => {
        $link.addEventListener("click", updateUserData)
    })

    $frmAddNewUser.addEventListener("submit", addNewUser)
    $frmEditUser.addEventListener("submit", updateUser)
    $frmRemoveUser.addEventListener("submit", removeUser)

</script>