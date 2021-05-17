const msg = document.querySelector("#mensagem");
const xhr = new XMLHttpRequest();
const tableCadas = document.querySelector("#tbempre");
const urlCadas = "http://localhost/gulaonline/src/controll/routes/";
const urlAli = "http://localhost/gulaonline/src/controll/routes/route.tbalimentos.php";

function carregarAliEmpre() {
    fetch(urlCadas + "route.tbcadastro.php?id_ca=" + localStorage.getItem("linksite"))
        .then(function (resp) {
            if (!resp.ok)
                throw new Error("Erro ao executar requisição: " + resp.status);
            return resp.json();
        })
        .then(function (data) {
            data.forEach((val) => {
                let row = document.createElement("tr");
                //   row.innerHTML = `<tr><td style="padding:13px"><button onclick='verEmpre(this)'>${val.linksite}</button></td></tr>`;
                row.innerHTML = `<tr><td style="padding:13px"><a href='./comum/tbalimentos_comum/alimentos_empre.html'>${val.linksite}</a></td></tr>`;
                if (val.linksite != null) {
                    tableCadas.appendChild(row);
                }
            });
        })
        .catch(function (error) {
            console.error(error.message);
        });
}
