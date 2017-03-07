<?php 
	include 'session.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>profile</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
      <a class="navbar-brand" href="#">Tech Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1  class="text-center">Welcome  <?php  echo  $loggedin_session;  ?>,</h1>
			<p  class="text-center">  You  are  now  logged  in.  you  can  logout  by 				 clicking on  signout  link  given  below.</p>

		</div>
		<div class="row">
			<div class="col-md-12 col-md-offset-0">
				<div  id="contentbox">

					<?php
						include('connection.php');
						$sql = "SELECT  *  FROM  user1  where  id = $loggedin_id";
						$result = mysqli_query($conn,$sql);
					?>
					<?php
						while($rows = mysqli_fetch_array($result)){
					?>
					<div  id="signup">
						<div  id="signup-st">
							<form  action=""  method="POST"  id="signin"  id="reg">
								<div  id="reg-head"  class="headrg">Your  Profile</div>
								<table  border="0"  align="center"  cellpadding="2"  cellspacing="0">
									<tr  id="lg-1">
										<td  class="tl-1"><div  align="left"  id="tb-name">Reg  id:</div></td>
										<td  class="tl-4"><?php  echo  $rows['id'];  ?></td>
									</tr>
									<tr  id="lg-1">
										<td  class="tl-1"><div  align="left"  id="tb-name">Name:</div></td>
										<td  class="tl-4"><?php  echo  $rows['Name'];  ?>  </td>
									</tr>
									<tr  id="lg-1">
										<td  class="tl-1"><div  align="left"  id="tb-name">Email  id:</div></td>
										<td  class="tl-4"><?php  echo  $rows['Email'];  ?></td>
									</tr>
								</table>
								
							</form>
						</div>
					</div>
					<div  id="login">
					<div  id="login-sg">
					<div  id="st"><a  href="add_blog.php"  id="st-btn">Add Blog</a></div>
					<!-- <div  id="st"><a  href="deleteac.php"  id="st-btn">Delete  Account</a></div> -->
					</div>
					</div>
					<?php
					//  close  while  loop
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
//  close  connection;
mysqli_close($conn);
?>


<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center text-uppercase">your blogs</h2>
		</div>
	</div>
	<div class="row">
	<?php
		// include 'session.php';
		include 'connection.php';


		// $q = "SELECT * FROM blog";
		$q = "SELECT Title,Description FROM blog where user_id=$loggedin_id";

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
				    <?php echo $row['Description'];?>
				    
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