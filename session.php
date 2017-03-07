<?php
	include('connection.php');
	session_start();

	$user_check = $_SESSION['user'];

	$ses_sql = mysqli_query ($conn,"SELECT  Name,id  FROM user1 WHERE  
		Name='$user_check'  ");

	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

	$loggedin_session = $row['Name'];

	$loggedin_id = $row['id'];

	if(!isset($loggedin_session)  ||  $loggedin_session==NULL)
		{
			echo  "Go  back";
			header("Location:  login.php");
		}
?>