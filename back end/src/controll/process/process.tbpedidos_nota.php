<?php

	require("../../domain/connection.php");
	require("../../domain/tbpedidos_nota.php");

	class Tbpedidos_notaProcess {
		var $td;

		function doGet($arr){
			$td = new Tbpedidos_notaDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPost($arr){
			$td = new Tbpedidos_notaDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPut($arr){
			$td = new Tbpedidos_notaDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doDelete($arr){
			$td = new Tbpedidos_notaDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}
	}