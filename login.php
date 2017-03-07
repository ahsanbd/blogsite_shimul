<?php

	session_start();
	if(isset($_SESSION["user"]))
	{
		header('Location: index.php');
	}
	else{ ?>
		<!DOCTYPE html>
		<html>
			<head>
				<title>Login Form in PHP with Session</title>
				<link rel="stylesheet" type="text/css" href="style.css">
			</head>
		<body>
			<div id="main">
				
			<div id="login">
			<h2>Login Form</h2>
			<form action="login_check.php" method="post">
				<label>UserName :</label>
				<input id="name" name="username" placeholder="username" type="text">
				<label>Password :</label>
				<input id="password" name="password" placeholder="**********" type="password">
				<input name="submit" type="submit" value=" Login ">
				
			</form>
			</div>
			</div>
		</body>
		</html>


		<?php } ?>


