<?php 
	include("db.php");


	if (isset($_POST["save_task"])) {
		
		$title = $_POST["title"];
		$description = $_POST["description"];
		$query = "INSERT INTO task(title, description) VALUES (:title,:description)";
		$stmt = $conn->prepare($query);

		$stmt->execute(array(":title"=>$title,"description"=>$description));
		
		session_start();
		
		$_SESSION["saved_task"] = true;
		$_SESSION["color"] = "success";
		$_SESSION["message"] = "Task saved succesfully";
		
		header("location:index.php");


	}

 ?>