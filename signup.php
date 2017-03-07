<html>
<head>
	<meta charset="UTF-8">
	<title>signup</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	


	<div class="conatiner">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-uppercase text-center">user information</h2>
				<form class="form-group" 	action="register.php" 		method="POST">
					<input type="text" class="form-control" name="name" placeholder="Enter your name">
					 <span class="error"></span><br>
					<input type="email" class="form-control" name="email" placeholder="Enter Email"><br>
					<input type="password" class="form-control" name="pass" placeholder="password"><br>
					<button class="btn btn-lg btn-primary form-control">SUBMIT</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>