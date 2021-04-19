<?php
include 'tbtipos_logins';
	class Tbcadastro {
		var $id_ca;
		var $nome;
		var $cpf;
		var $fone;
		var $bairro;
		var $rua;
		var $numero;
		var $cidade;
		var $uf;
		var $cnpj;
		var $linksite;
		var $email;
		var $senha;
		var $tipo;
		var $nomestatus;

		function getId_ca(){
			return $this->id_ca;
		}
		function setId_ca($id_ca){
			$this->id_ca = $id_ca;
		}

		function getNome(){
			return $this->nome;
		}
		function setNome($nome){
			$this->nome = $nome;
		}

		function getCpf(){
			return $this->cpf;
		}
		function setCpf($cpf){
			$this->cpf = $cpf;
		}

		function getFone(){
			return $this->fone;
		}
		function setFone($fone){
			$this->fone = $fone;
		}

		function getBairro(){
			return $this->bairro;
		}
		function setBairro($bairro){
			$this->bairro = $bairro;
		}

		function getRua(){
			return $this->rua;
		}
		function setRua($rua){
			$this->rua = $rua;
		}

		function getNumero(){
			return $this->numero;
		}
		function setNumero($numero){
			$this->numero = $numero;
		}

		function getCidade(){
			return $this->cidade;
		}
		function setCidade($cidade){
			$this->cidade = $cidade;
		}

		function getUf(){
			return $this->uf;
		}
		function setUf($uf){
			$this->uf = $uf;
		}

		function getCnpj(){
			return $this->cnpj;
		}
		function setCnpj($cnpj){
			$this->cnpj = $cnpj;
		}

		function getLinksite(){
			return $this->linksite;
		}
		function setLinksite($linksite){
			$this->linksite = $linksite;
		}

		function getEmail(){
			return $this->email;
		}
		function setEmail($email){
			$this->email = $email;
		}

		function getSenha(){
			return $this->senha;
		}
		function setSenha($senha){
			$this->senha = $senha;
		}

		function getTipo(){
			return $this->tipo;
		}
		function setTipo($tipo){
			$this->tipo = $tipo;
		}

		function getNomestatus(){
			return $this->nomestatus;
		}
		function setNomestatus($nomestatus){
			$this->nomestatus = $nomestatus;
		}
	}

	class TbcadastroDAO {
		function create($tbcadastro) {
			$result = array();
			$id_ca = $tbcadastro->getId_ca();
			$nome = $tbcadastro->getNome();
			$cpf = $tbcadastro->getCPF();
			$fone = $tbcadastro->getFone();
			$bairro = $tbcadastro->getBairro();
			$rua = $tbcadastro->getRua();
			$numero = $tbcadastro->getNumero();
			$cidade = $tbcadastro->getCidade();
			$uf = $tbcadastro->getUF();
			$cnpj = $tbcadastro->getCNPJ();
			$linksite = $tbcadastro->getLinksite();
			$email = $tbcadastro->getEmail();
			$senha = $tbcadastro->getSenha();
			$tipo = $tbcadastro->getTipo();
			$nomestatus = $tbcadastro->getNomestatus();
			try {
				$query = "INSERT INTO tb_cadastro  VALUES (default, $id_ca, '$nome', '$cpf', '$fone', '$bairro', '$rua', '$numero', '$cidade', '$uf', '$cnpj', '$linksite', '$email', '$senha', '$tipo', '$nomestatus')";

				$con = new Connection();

				if(Connection::getInstance()->exec($query) >= 1){
					$result = $tbcadastro;
				} else {
					$result["erro"] = "Erro ao salvar!";
				}	
				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}

		function readAll() {
			$result = array();

			try {
				$query = "SELECT * FROM tbcadastro";

				$con = new Connection();

				$resultSet = Connection::getInstance()->query($query);

				while($row = $resultSet->fetchObject()){
					$cadastro = new Cadastro();
					$cadastro->setId_ca($cadastro);
					$cadastro->setNome($row->nome);
					$cadastro->setCPF($row->cpf);
					$cadastro->setFone($row->fone);
					$cadastro->setBairro($row->bairro);
					$cadastro->setRua($row->rua);
					$cadastro->setNumero($row->numero);
					$cadastro->setCidade($row->cidade);
					$cadastro->setUF($row->uf);
					$cadastro->setCNPJ($row->cnpj);
					$cadastro->setLinksite($row->linksite);
					$cadastro->setEmail($row->email);
					$cadastro->setSenha($row->senha);
					$cadastro->setTipo($row->tipo);
					$cadastro->setNomestatus($row->nomestatus);
					$result[] = $cadastro;
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}

		function update($cadastro) {
			$result = array();
			$id_ca = $cadastro->getId_ca();
			$nome = $cadastro->getNome();
			$cpf = $cadastro->getCPF();
			$fone = $cadastro->getFone();
			$bairro = $cadastro->getBairro();
			$rua = $cadastro->getRua();
			$numero = $cadastro->getNumero();
			$cidade = $cadastro->getCidade();
			$uf = $cadastro->getUF();
			$cnpj = $cadastro->getCNPJ();
			$linksite = $cadastro->getLinksite();
			$email = $cadastro->getEmail();
			$senha = $cadastro->getSenha();
			$tipo = $cadastro->getTipo();
			$nomestatus = $cadastro->getNomestatus();
			try {
				$query = "UPDATE tb_cadastro SET nome = '$nome', cpf = '$cpf', fone = '$fone', bairro = '$bairro', rua = '$rua', numero = '$numero', cidade = '$cidade', uf = '$uf', cnpj = '$cnpj', linksite = '$linksite', email = '$email', senha = '$senha', tipo = '$tipo', nomestatus = '$nomestatus' WHERE id_ca = $id_ca";

				$con = new Connection();

				$status = Connection::getInstance()->prepare($query);

				if($status->execute()){
					$result = $cadastro;
				}else{
					$result["erro"] = $query;
				}	

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}

		function delete($id_ca) {
			$result = array();

			try {
				$query = "DELETE FROM tb_cadastro WHERE id_ca = $id_ca";

				$con = new Connection();

				if(Connection::getInstance()->exec($query) >= 1){
					$result["msg"] = "Cadastro disponivel";
				}else{
					$result["erro"] = "Cadastro oculpado";
				}	

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}
	}
