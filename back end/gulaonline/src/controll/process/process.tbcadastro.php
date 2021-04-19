<?php

	require("../../domain/connection.php");
	require("../../domain/tbcadastro.php");

	class TbcadastroProcess {
		var $td;

		function doGet($arr){
			$td = new TbcadastroDAO();
			if ($arr["id_ca"] == "0") {
				$sucess = $td->readAll();
			}else{
				$sucess = $td->read($arr["id_ca"]);
			}	
			http_response_code(200);
			echo json_encode($sucess);
		}


		function doPost($arr){
			$td = new TbcadastroDAO();
			$cadastro = new Cadastro();
			$cadastro->setCadastro($arr["cadastro"]);
			$sucess = $td->create($cadastro);
			http_response_code(200);
			echo json_encode($result);
		}


		function doPut($arr){
			$td = new TbcadastroDAO();
			$cadastro = new Cadastro();
			$cadastro->setId_ca($arr["id_ca"]);
			$cadastro->setCadastro($arr["cadastro"]);
			$sucess = $td->update($cadastro);
			http_response_code(200);
			echo json_encode($result);
		}


		function doDelete($arr){
			$td = new TbcadastroDAO();
			$sucess = $td->delete($arr["id_ca"]);
			http_response_code(200);
			echo json_encode($result);
		}
	}