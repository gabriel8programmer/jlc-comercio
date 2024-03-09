<div class="container-fluid">

    <div class="row my-2">
        <div class="col">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal-add-new">
                Novo Usuário
            </button>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12">
            <small>
                <table id="table-users" class="table table-responsive table-hover">
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

<!--datatable initialization-->
<script>
    $(document).ready(function() {
        // datatable
        $('#table-users').DataTable({
            pageLength: 10,
            pagingType: "full_numbers",
            language: {
                decimal: "",
                emptyTable: "Sem dados disponíveis na tabela.",
                info: "Mostrando _START_ até _END_ de _TOTAL_ registos",
                infoEmpty: "Mostrando 0 até 0 de 0 registos",
                infoFiltered: "(Filtrando _MAX_ total de registos)",
                infoPostFix: "",
                thousands: ",",
                lengthMenu: "Mostrando _MENU_ registos por página.",
                loadingRecords: "Carregando...",
                processing: "Processando...",
                search: "Filtrar:",
                zeroRecords: "Nenhum registro encontrado.",
                paginate: {
                    first: "Primeira",
                    last: "Última",
                    next: "Seguinte",
                    previous: "Anterior"
                },
                aria: {
                    sortAscending: ": ative para classificar a coluna em ordem crescente.",
                    sortDescending: ": ative para classificar a coluna em ordem decrescente."
                }
            }
        });
    });
</script>

<!-- try modals -->
<script>
    const showModal = (modal) => {
        $(`#${modal}`).modal('show');
    }

    const hideModal = (modal) => {
        $(`#${modal}`).modal('hide');
    }

    const reload = ()=> {
        //relaod the page
        location.reload();
    }

    const insert = (data) => {

        //get all data
        const {
            name,
            cpf,
            email,
            password,
            profile
        } = data;

        //execute fetch for database
        fetch("?ct=user&mt=insert", {
            method: "POST",
            headers: {
                "Content-Type": "application/json; charset=utf-8"
            },
            body: JSON.stringify({
                name,
                cpf,
                email,
                password,
                profile
            })
        })
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error("Erro na requisição!");
            }
        })
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('Erro durante a requisição:', error);
        });
    }

    const update = (data) => {

        //get all data
        const {
            id,
            name,
            cpf,
            email,
            password,
            profile
        } = data;

        //execute fetch for database
        fetch("?ct=user&mt=update", {
            method: "PUT",
            headers: {
                "Content-Type": "application/json; charset=utf-8"
            },
            body: JSON.stringify({
                id,
                name,
                cpf,
                email,
                password,
                profile
            })
        })
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error("Erro na requisição!");
            }
        })
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('Erro durante a requisição:', error);
        });
    }

    const remove = (data) => {

        //get data
        const {
            id
        } = data;

        //fetch api
        fetch("?ct=user&mt=delete", {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json; charset=utf-8"
            },
            body: JSON.stringify({
                id
            })
        })
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error("Erro na requisição!");
            }
        })
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('Erro durante a requisição:', error);
        });
    }

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
        insert(data);

        //hide modal
        hideModal("modal-add-new");
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
                update(data);

                //hide modal
                // hideModal("modal-edit");

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
                remove(data);

                //hide modal
                hideModal("modal-delete");
            });
        });
    });
</script>