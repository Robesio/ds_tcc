<?php

	class Tbempreendedor {
		var $idempre;
		var $nomeempre;
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

		function getIdempre(){
			return $this->idempre;
		}
		function setIdempre($idempre){
			$this->idempre = $idempre;
		}

		function getNomeempre(){
			return $this->nomeempre;
		}
		function setNomeempre($nomeempre){
			$this->nomeempre = $nomeempre;
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
	}

	class TbempreendedorDAO {
		function create($tbempreendedor) {
			$result = array();

			try {
				$query = "INSERT INTO table_name (column1, column2) VALUES (value1, value2)";

				$con = new Connection();

				if(Connection::getInstance()->exec($query) >= 1){
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}

		function read() {
			$result = array();

			try {
				$query = "SELECT column1, column2 FROM table_name WHERE condition";

				$con = new Connection();

				$resultSet = Connection::getInstance()->query($query);

				while($row = $resultSet->fetchObject()){
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}

		function update() {
			$result = array();

			try {
				$query = "UPDATE table_name SET column1 = value1, column2 = value2 WHERE condition";

				$con = new Connection();

				$status = Connection::getInstance()->prepare($query);

				if($status->execute()){
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}

		function delete() {
			$result = array();

			try {
				$query = "DELETE FROM table_name WHERE condition";

				$con = new Connection();

				if(Connection::getInstance()->exec($query) >= 1){
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}
	}
