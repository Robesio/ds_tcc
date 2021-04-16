<?php

	require("../../domain/connection.php");
	require("../../domain/tbtipos_logins.php");

	class Tbtipos_loginsProcess {
		var $td;

		function doGet($arr){
			$td = new Tbtipos_loginsDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPost($arr){
			$td = new Tbtipos_loginsDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPut($arr){
			$td = new Tbtipos_loginsDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doDelete($arr){
			$td = new Tbtipos_loginsDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}
	}