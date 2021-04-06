<?php

	require("../../domain/connection.php");
	require("../../domain/tbempreendedor.php");

	class TbempreendedorProcess {
		var $td;

		function doGet($arr){
			$td = new TbempreendedorDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPost($arr){
			$td = new TbempreendedorDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPut($arr){
			$td = new TbempreendedorDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doDelete($arr){
			$td = new TbempreendedorDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}
	}