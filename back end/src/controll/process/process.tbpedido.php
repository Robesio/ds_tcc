<?php

	require("../../domain/connection.php");
	require("../../domain/tbpedido.php");

	class TbpedidoProcess {
		var $td;

		function doGet($arr){
			$td = new TbpedidoDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPost($arr){
			$td = new TbpedidoDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPut($arr){
			$td = new TbpedidoDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doDelete($arr){
			$td = new TbpedidoDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}
	}