const msg = document.querySelector("#mensagem");
const xhr = new XMLHttpRequest();
const tableAli = document.querySelector("#tbali");
const urlAli = "http://localhost/gulaonline/src/controll/routes/route.tbalimentos.php";

function carregaAlimentos() {
    fetch(urlAliE + "?linksite=" + localStorage.getItem("linksite") + "&idti_lo=" + localStorage.getItem("idti_lo") + "&id_ca=" + localStorage.getItem("id_ca"))
        .then(function (resp) {
            if (!resp.ok)
                throw new Error("Erro ao executar requisição: " + resp.status);
            return resp.json();
        })
        .then(function (data) {
            data.forEach((val) => {
                let row = document.createElement("tr");
                if (localStorage.getItem("linksite" == null)) {
                    row.innerHTML += `<td>${val.nomeali}</td>`;
                    row.innerHTML += `<td>${val.descricao}</td>`;
                    row.innerHTML += `<td>${val.qtd}</td>`;
                    row.innerHTML += `<td>${val.preco}</td>`;
                    if (val.img == null) {
                        val.img = "../../outros/assets/error.png";
                    }
                    row.innerHTML += `<td><img src="${val.img}" width="50"></td>`;
                    //row.innerHTML += `<td style="padding:3px"><button onclick='addPedido(this)'><i class="fa fa-shopping-cart" aria-hidden="true"></i></button></td></tr>`;
                    row.innerHTML += `<td style="padding:3px"><input type="checkbox" id="" name=""></td></tr>`;
                    tableAli.appendChild(row);
                }
            });
        })
        .catch(function (error) {
            console.error(error.message);
        });
}

function previewFile() {
    let file = document.querySelector("#img").files[0];
    var reader = new FileReader();
    reader.onloadend = function () {
        dataFile = reader.result;
    }
    if (file) {
        reader.readAsDataURL(file);
    } else {
        console.log("erro");
    }
}
