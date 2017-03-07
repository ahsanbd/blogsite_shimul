

<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>

<?php 
	include 'connection.php';
	session_start();
		
		
		$user_name = $_SESSION['user'];

		$ses_sql = mysqli_query ($conn,"SELECT  id  FROM user1 WHERE  
		Name='$user_name'  ");

		$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

		// print_r($row);
		$user_id = $row['id'];
		$title = $_POST["title"];
		$description = $_POST["description"];
		// echo $user_id;

		$qry = "INSERT INTO blog(Title,Description,user_id) 
				VALUES('$title','$description',$user_id)";
		

		if($conn->query($qry)){
			echo "Updated";
			// header('Location: profile.php');
		}
		else{
			echo "Connection Failed";
		}
		

 ?>

</body>
</html>