<?php 

	include("db.php");
	session_start();
	if (isset($_GET["ID"])) {
		
		$ID = $_GET["ID"];
		$query = "DELETE FROM task WHERE ID=:ID";

		$stmt = $conn->prepare($query);
		$stmt->execute(array(":ID"=>$ID));

		$_SESSION["deleted_task"] = true;
		$_SESSION["color"] = "danger";
		$_SESSION["message"] = "Task deleted succesfully";
		header("location:index.php");
	} else {
		header("location:index.php");
	}

 ?>