const msg = document.querySelector("#mensagem");
const xhr = new XMLHttpRequest();
const tableAli = document.querySelector("#tbali");
const urlAli = "http://localhost/gulaonline/src/controll/routes/";
var dataFile;//

function carregaAlimentos() {
    fetch(urlAli + "route.tbalimentos.php?idali=0")
        .then(function (resp) {
            if (!resp.ok)
                throw new Error("Erro ao executar requisição: " + resp.status);
            return resp.json();
        })
        .then(function (data) {
            data.forEach((val) => {
                let row = document.createElement("tr");
                row.innerHTML = `<tr><td>${val.idali}</td>`;
                row.innerHTML += `<td>${val.id_ca}</td>`;
                row.innerHTML += `<td>${val.nomeali}</td>`;
                row.innerHTML += `<td>${val.descricao}</td>`;
                row.innerHTML += `<td>${val.qtd}</td>`;
                row.innerHTML += `<td>${val.preco}</td>`;
                if (val.img == null) {//
                    val.img = "../assets/error.png";//
                }//
                row.innerHTML += `<td><img src="${val.img}" width="100"></td>`;//
                row.innerHTML += `<td style="padding:3px"><button onclick='editEcoponto(this)'><i class="fa fa-pencil" aria-hidden="true"></i></button><button onclick='delEcoponto(this)'><i class="fa fa-trash-o" aria-hidden="true"></i></button></td></tr>`;
                tableAli.appendChild(row);
            });
        })
        .catch(function (error) {
            console.error(error.message);
        });
}

//
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
//
function addAlimento() {
    let url = "http://localhost/gulaonline/src/controll/routes/route.tbalimentos.php";
    let id_ca = document.querySelector("#id_ca");
    let nome = document.querySelector("#nomeali");
    let descricao = document.querySelector("#descricao");
    let qtd = document.querySelector("#qtd");
    let preco = document.querySelector("#preco");

    if (id_ca.value != "" && nome.value != "" && descricao.value != "" && qtd.value != "" && preco.value != "") {
        let dados = new FormData();
        dados.append("id_ca", id_ca.value);
        dados.append("nomeali", nomeali.value);
        dados.append("descricao", descricao.value);
        dados.append("qtd", qtd.value);
        dados.append("preco", preco.value);
        dados.append("img", dataFile);
        xhr.addEventListener("readystatechange", function () {
            if (this.readyState === this.DONE) {
                console.log(this.responseText);
                let resp = JSON.parse(this.responseText);

                if (resp.hasOwnProperty("erro")) {
                    msg.innerHTML = resp.erro;
                } else {
                    msg.innerHTML = "Alimento adicionado Com Sucesso.";
                }
                setTimeout(() => { window.location.reload(); }, 3000);
            }
        });
        xhr.open("POST", url);
        xhr.send(dados);
    } else {
        msg.innerHTML = "Favor preencher todos os campos!";
        setTimeout(() => { msg.innerHTML = "Mensagens do sistema"; }, 3000);
    }
}

function editEcoponto(e) {
    e.parentNode.parentNode.cells[1].setAttribute("contentEditable", "true");
    e.parentNode.parentNode.cells[2].setAttribute("contentEditable", "true");
    e.parentNode.parentNode.cells[3].setAttribute("contentEditable", "true");
    e.parentNode.parentNode.cells[4].setAttribute("contentEditable", "true");
    e.parentNode.parentNode.cells[5].setAttribute("contentEditable", "true");
    e.parentNode.parentNode.cells[8].innerHTML = "<button onclick='putEcoponto(this)'>Enviar</button>";
}

function putEcoponto(e) {
    let url = "https://projetorrw.000webhostapp.com/src/controll/routes/route.ecopontos.php";
    let id = e.parentNode.parentNode.cells[0].innerHTML;
    let cooperativas_id = e.parentNode.parentNode.cells[1].innerHTML;
    let nome = e.parentNode.parentNode.cells[2].innerHTML;
    let descricao = e.parentNode.parentNode.cells[3].innerHTML;
    let lat = e.parentNode.parentNode.cells[4].innerHTML;
    let longi = e.parentNode.parentNode.cells[5].innerHTML;

    let dados = new FormData();
    dados.append("id", id);
    dados.append("cooperativas_id", cooperativas_id);
    dados.append("nome", nome);
    dados.append("descricao", descricao);
    dados.append("lat", lat);
    dados.append("longi", longi);
    dados.append("verbo", "PUT");
    if (window.confirm("Confirma Alteração dos dados?")) {
        xhr.addEventListener("readystatechange", function () {
            if (this.readyState === this.DONE) {
                let resp = JSON.parse(this.responseText);
                if (resp.hasOwnProperty("erro")) {
                    msg.innerHTML = resp.erro;
                } else {
                    msg.innerHTML = "Dados do Ecoponto Alterada Com Sucesso.";
                }
                setTimeout(() => { window.location.reload(); }, 3000);
            }
        });
        xhr.open("POST", url);
        xhr.send(dados);
    }
}

function delEcoponto(e) {
    let url = "https://projetorrw.000webhostapp.com/src/controll/routes/route.ecopontos.php";
    let id = e.parentNode.parentNode.cells[0].innerText;
    let dados = new FormData();
    dados.append("id", id);
    dados.append("verbo", "DELETE");
    if (window.confirm("Confirma Exclusão do id = " + id + "?")) {
        xhr.addEventListener("readystatechange", function () {
            if (this.readyState === this.DONE) {
                let resp = JSON.parse(this.responseText);
                if (resp.hasOwnProperty("erro")) {
                    msg.innerHTML = resp.erro;
                } else {
                    msg.innerHTML = "Ecoponto Deletar Com Sucesso!";
                }
                setTimeout(() => { window.location.reload(); }, 3000);
            }
        });
        xhr.open("POST", url);
        xhr.send(dados);
    }
}
