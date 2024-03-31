<div class="container-fluid">

    <div class="row my-2">
        <div class="col">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal-add-new">
                Novo Usuário
            </button>
        </div>
    </div>

    <div class="row mx-1">
        <div class="col-12">
            <small>
                <table id="table-users" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">CPF</th>
                            <th scope="col">Nome</th>
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
                                <td><?= $user->email ?></td>
                                <td><?= $user->password ?></td>
                                <td><?= $user->profile ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col-2">
                                            <!-- Link para abrir o modal-->
                                            <a href="#" class="modal-edit" data-toggle="modal" data-bs-target="#modal-edit" data-userData="<?= htmlspecialchars(json_encode($user)) ?>">
                                                <i class="bi bi-pencil-square text-info fs-6"></i>
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <!-- Link para abrir o modal-->
                                            <a href="#" class="modal-delete" data-toggle="modal" data-bs-target="#modal-delete" data-id="<?= $user->id ?>">
                                                <i class="bi bi-trash3-fill text-danger fs-6"></i> </a>
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

<!-- try modals -->
<script>
    window.addEventListener("load", () =>{
        //load dataTable in table users
        loadDataTables("table-users");
    });

    //button add new
    document.querySelector("#modal-add-new form").addEventListener("submit", (e) => {
        e.preventDefault();
        //get input values
        const nameValue = e.target.querySelector("#user_name").value;
        const cpfValue = e.target.querySelector("#user_cpf").value;
        const emailValue = e.target.querySelector("#user_email").value;
        const passwordValue = e.target.querySelector("#user_password").value;
        const profileValue = e.target.querySelector("#user_profile").value;

        //create a user data
        const data = {
            name: nameValue,
            cpf: cpfValue,
            email: emailValue,
            password: passwordValue,
            profile: profileValue
        }

        //insert new user
        const endpoint = "ct=user&mt=insert";
        insert(endpoint, data);
        //hide modal
        hideModal("modal-add-new");
        //reload window
        reload();
    });

    //edit links
    document.querySelectorAll(".modal-edit").forEach(element => {
        element.addEventListener("click", (e) => {
            e.preventDefault();
            const data_serials = e.target.getAttribute('data-userData');
            const data = JSON.parse(data_serials);
            showModal("modal-edit");

            //get values
            const idValue = data.id;

            //get the form
            const form = document.querySelector("#modal-edit form");

            //attribute in all inputs the respective values
            form.querySelector("#user_edit_name").value = data.name;
            form.querySelector("#user_edit_cpf").value = data.cpf;
            form.querySelector("#user_edit_email").value = data.email;
            form.querySelector("#user_edit_password").value = data.password;
            form.querySelector("#user_edit_profile").value = data.profile;

            //update with form
            document.querySelector("#modal-edit form").addEventListener("submit", (e) => {
                e.preventDefault();

                const nameValue = e.target.querySelector("#user_edit_name").value;
                const cpfValue = e.target.querySelector("#user_edit_cpf").value;
                const emailValue = e.target.querySelector("#user_edit_email").value;
                const passwordValue = e.target.querySelector("#user_edit_password").value;
                const profileValue = e.target.querySelector("#user_edit_profile").value;

                //create a user data
                const data = {
                    id: idValue,
                    name: nameValue,
                    cpf: cpfValue,
                    email: emailValue,
                    password: passwordValue,
                    profile: profileValue
                }

                //update the user
                const endpoint = "ct=user&mt=update";
                update(endpoint, data);
                //hide modal
                hideModal("modal-edit");
                //reload window
                reload();

            });
        });
    });

    //delete links
    document.querySelectorAll(".modal-delete").forEach(element => {
        element.addEventListener("click", (e) => {
            e.preventDefault();
            const data_id = e.target.getAttribute('data-id');
            showModal("modal-delete");
            remove(data_id);

            //delete with form
            document.querySelector("#modal-delete form").addEventListener("submit", (e) => {
                e.preventDefault();

                //get data
                const data = {
                    id: data_id
                }

                //delete a user
                const endpoint = "ct=user&mt=delete";
                remove(endpoint, data);
                //hide modal
                hideModal("modal-delete");
                //reload window
                reload();
            });
        });
    });
</script>