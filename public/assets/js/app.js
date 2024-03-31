
function loadDataTables(table) {
    // datatable
    $(`#${table}`).DataTable({
        pageLength: 10,
        pagingType: "full_numbers",
        language: {
            decimal: "",
            emptyTable: "Sem dados disponíveis na tabela.",
            info: "Mostrando _START_ até _END_ de _TOTAL_ registos",
            infoEmpty: "Mostrando 0 até 0 de 0 registros",
            infoFiltered: "(Filtrando _MAX_ total de registos)",
            infoPostFix: "",
            thousands: ",",
            lengthMenu: "Mostrando _MENU_ registros por página.",
            loadingRecords: "Carregando...",
            processing: "Processando...",
            search: "Filtrar:",
            zeroRecords: "Nenhum registro encontrado.",
            paginate: {
                first: "Primeira",
                last: "Última",
                next: "&raquo;",
                previous: "&laquo;"
            },
            aria: {
                sortAscending: ": ative para classificar a coluna em ordem crescente.",
                sortDescending: ": ative para classificar a coluna em ordem decrescente."
            }
        }
    });
}

const showModal = (modal) => {
    $(`#${modal}`).modal('show');
}

const hideModal = (modal) => {
    $(`#${modal}`).modal('hide');
}

const reload = () => {
    //relaod the page
    location.reload();
}

const insert = (endpoint, data) => {
    //execute fetch for database
    fetch(`?${endpoint}`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json; charset=utf-8"
        },
        body: JSON.stringify(data)
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

const update = (endpoint, data) => {
    //execute fetch for database
    fetch(`?${endpoint}`, {
        method: "PUT",
        headers: {
            "Content-Type": "application/json; charset=utf-8"
        },
        body: JSON.stringify(data)
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

const remove = (endpoint, data) => {
    //fetch api
    fetch(`?${endpoint}`, {
        method: "DELETE",
        headers: {
            "Content-Type": "application/json; charset=utf-8"
        },
        body: JSON.stringify(data)
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

function getCpfMask(id) {
    console.log(id);
    //cpf
    document.querySelector(`#${id}`).addEventListener('input', function (e) {
        let cpf = e.target.value.replace(/\D/g, ''); // Remove caracteres não numéricos
        if (cpf.length > 3) {
            cpf = cpf.substring(0, 3) + '.' + cpf.substring(3);
        }
        if (cpf.length > 7) {
            cpf = cpf.substring(0, 7) + '.' + cpf.substring(7);
        }
        if (cpf.length > 11) {
            cpf = cpf.substring(0, 11) + '-' + cpf.substring(11);
        }
        if (cpf.length > 14) {
            cpf = cpf.slice(0, -1);
        }
        e.target.value = cpf;
    });
}

function validateEmail(email) {
    // Regular expression for validating email addresses
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Test the email against the regular expression
    return regex.test(email);
}