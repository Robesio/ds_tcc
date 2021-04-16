<?php

	require("../../domain/connection.php");
	require("../../domain/tbstatus.php");

	class TbstatusProcess {
		var $td;

		function doGet($arr){
			$td = new TbstatusDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPost($arr){
			$td = new TbstatusDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPut($arr){
			$td = new TbstatusDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doDelete($arr){
			$td = new TbstatusDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}
	}