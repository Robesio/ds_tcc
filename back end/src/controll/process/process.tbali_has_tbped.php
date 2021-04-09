<?php

	require("../../domain/connection.php");
	require("../../domain/tbali_has_tbped.php");

	class Tbali_has_tbpedProcess {
		var $td;

		function doGet($arr){
			$td = new Tbali_has_tbpedDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPost($arr){
			$td = new Tbali_has_tbpedDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPut($arr){
			$td = new Tbali_has_tbpedDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doDelete($arr){
			$td = new Tbali_has_tbpedDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}
	}