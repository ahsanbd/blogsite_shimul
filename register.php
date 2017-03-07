<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>

<?php 
session_start();
include 'connection.php';

	



		$name = $_POST["name"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];

		$q = "INSERT INTO user1(`Name`, `Email`, `Password`) 
			VALUES ('$name','$email','$pass')";

		if($conn->query($q)){
			header('Location: login.php');
		}
		

 ?>

</body>
</html>