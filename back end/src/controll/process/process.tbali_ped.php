<?php

	require("../../domain/connection.php");
	require("../../domain/tbali_ped.php");

	class Tbali_pedProcess {
		var $td;

		function doGet($arr){
			$td = new Tbali_pedDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPost($arr){
			$td = new Tbali_pedDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPut($arr){
			$td = new Tbali_pedDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doDelete($arr){
			$td = new Tbali_pedDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}
	}