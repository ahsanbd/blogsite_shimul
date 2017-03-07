

<!DOCTYPE html>
<html>
<head>
	<title>Bolgs</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Blogs</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <?php 
        	session_start();
        	if(isset($_SESSION["user"]))
			{
				echo "<li><a href='logout.php'>Logout</a></li>";
			}
			else{
				echo "<li><a href='login.php'>login</a></li>";
			}

        ?>
        <li><a href="signup.php">SignUp</a></li>
        <li><a href="profile.php">Profile</a></li>
        

        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	<div class="row">
	<?php
		// include 'session.php';
		include 'connection.php';


		// $q = "SELECT * FROM blog";
		$q = "SELECT blog.id, blog.Title, blog.Description, user1.Name FROM blog, user1 WHERE 
		user1.id = blog.user_id";

		if($conn->query($q)){
			$result = $conn->query($q);
			// print_r($result);
			while($row = $result->fetch_assoc())
			{ ?>

			<div class="col-md-4">
				<div class="panel panel-default">
				  <div class="panel-heading">
				  	<?php echo $row['Title'];?>
				  </div>
				  <div class="panel-body">
				    <?php 
				    	$string = $row['Description'];
				    	if(strlen($string) > 50)
				    	{
				    		echo substr($string, 0, 50)."...";
				    		echo "<a href='details.php?id=".$row['id']."'>Read More</a>";
				    	}
				    	else{
				    		echo $string;
				    	}

				    ?>
				    <?php echo "<br>By: ".$row['Name'];?>
				  </div>
				</div>
			</div>	

			<?php }
		}
	?>


		

	</div>
</div>
</body>
</html>