<?php

	class Tbali_ped {
		var $idali;
		var $idpedido;
		var $nomecli;
		var $fonecli;
		var $enderecocli;
		var $numerocli;
		var $bairrocli;

		function getIdali(){
			return $this->idali;
		}
		function setIdali($idali){
			$this->idali = $idali;
		}

		function getIdpedido(){
			return $this->idpedido;
		}
		function setIdpedido($idpedido){
			$this->idpedido = $idpedido;
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

		function getEnderecocli(){
			return $this->enderecocli;
		}
		function setEnderecocli($enderecocli){
			$this->enderecocli = $enderecocli;
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
	}

	class Tbali_pedDAO {
		function create($tbali_ped) {
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
