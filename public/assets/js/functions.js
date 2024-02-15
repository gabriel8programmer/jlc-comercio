
const user = {
    all: () => {
    },
    insert: (e) => {
        e.preventDefault();
    
        //get input values
        //name
        const nameValue = e.target.querySelector("#addUserName").value;
        //cpf
        const cpfValue = e.target.querySelector("#addUserCpf").value;
        //email
        const emailValue = e.target.querySelector("#addUserEmail").value;
        //password
        const passwordValue = e.target.querySelector("#addUserPassword").value;
        //profile
        const profileValue = e.target.querySelector("#addUserProfile").value;
    
        //execute fetch for database
        fetch("?ct=user&mt=insert", {
            method: "POST",
            headers: {
                "Content-Type": "application/json; charset=utf-8"
            },
            body: JSON.stringify({
                name: nameValue,
                cpf: cpfValue,
                email: emailValue,
                password: passwordValue,
                profile: profileValue
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
            // Faça algo com os dados recebidos, se necessário
        })
        .catch(error => {
            // Aqui você pode tratar erros
            console.error('Erro durante a requisição:', error);
        });
    },
    update: (e) => {
    },
    delete: (e) => {
    }
}

export { user }