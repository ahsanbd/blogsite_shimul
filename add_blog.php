<?php 
	include 'session.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>profile</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <link rel="stylesheet" type="text/css" href="style1.css"> -->
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
			<h1  class="text-center">HELLO  <?php  echo  $loggedin_session;  ?>,</h1>
			<p  class="text-center">  You  are  now  logged  in.  you  can  logout  by 				 clicking on  signout  link  given  below.</p>

		</div>
		
	</div>
	<div class="contact_wrapper">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-uppercase text-center"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>	 write blog	<i class="fa fa-long-arrow-right" aria-hidden="true"></i></h2>
					<form action="verify_blog.php" method="POST">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Title*</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" 
					    name="title" placeholder="Title Your Blog">
					  </div>
					  
					  <div class="form-group">
					    <label for="exampleInputEmail1">Description*</label>
					    <textarea class="form-control" name="description" placeholder="Write Description..."></textarea>
					  </div>
					  <button class="btn btn-lg btn-block text-uppercase contact_btn">submit</button>
					  
					</form>
				</div>
			</div>
		</div>
</div>



</body>
</html>