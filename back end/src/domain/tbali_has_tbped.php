<?php

	class Tbali_has_tbped {
		var $idali;
		var $idpedido;
		var $qtdcli;

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

		function getQtdcli(){
			return $this->qtdcli;
		}
		function setQtdcli($qtdcli){
			$this->qtdcli = $qtdcli;
		}
	}

	class Tbali_has_tbpedDAO {
		function create($tbali_has_tbped) {
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
