<?php 
	try {
		$conn = new PDO("mysql:host=localhost; dbname=crud_task", "root", "");

		$conn->exec("set charset set utf8");

	}catch(Exeption $e) {
		die($e->getMessage());
	}
 ?>