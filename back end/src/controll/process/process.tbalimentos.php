<?php

	require("../../domain/connection.php");
	require("../../domain/tbalimentos.php");

	class TbalimentosProcess {
		var $td;

		function doGet($arr){
			$td = new TbalimentosDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPost($arr){
			$td = new TbalimentosDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPut($arr){
			$td = new TbalimentosDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doDelete($arr){
			$td = new TbalimentosDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}
	}