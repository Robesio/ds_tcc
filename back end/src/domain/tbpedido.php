<?php

	class Tbpedido {
		var $idpedido;
		var $id_ca;
		var $nomecli;
		var $fonecli;
		var $ruacli;
		var $numerocli;
		var $bairrocli;
		var $datahora;
		var $idstatus;

		function getIdpedido(){
			return $this->idpedido;
		}
		function setIdpedido($idpedido){
			$this->idpedido = $idpedido;
		}

		function getId_ca(){
			return $this->id_ca;
		}
		function setId_ca($id_ca){
			$this->id_ca = $id_ca;
		}

		function getNomecli(){
			return $this->nomecli;
		}
		function setNomecli($nomecli){
			$this->nomecli = $nomecli;
		}

		function getFonecli(){
			return $this->fonecli;
		}
		function setFonecli($fonecli){
			$this->fonecli = $fonecli;
		}

		function getRuacli(){
			return $this->ruacli;
		}
		function setRuacli($ruacli){
			$this->ruacli = $ruacli;
		}

		function getNumerocli(){
			return $this->numerocli;
		}
		function setNumerocli($numerocli){
			$this->numerocli = $numerocli;
		}

		function getBairrocli(){
			return $this->bairrocli;
		}
		function setBairrocli($bairrocli){
			$this->bairrocli = $bairrocli;
		}

		function getDatahora(){
			return $this->datahora;
		}
		function setDatahora($datahora){
			$this->datahora = $datahora;
		}

		function getIdstatus(){
			return $this->idstatus;
		}
		function setIdstatus($idstatus){
			$this->idstatus = $idstatus;
		}
	}

	class TbpedidoDAO {
		function create($tbpedido) {
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
