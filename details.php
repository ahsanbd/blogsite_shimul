<?php 
include 'session.php';

 ?>





<html>
<head>
	<meta charset="UTF-8">
	<title>Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<?php 
				include 'connection.php';
				$id = $_GET['id'];
				$q = "SELECT * FROM `blog` WHERE id=".$id;
				if ($conn->query($q)) {
					$result = $conn->query($q);
					// print_r($result);
					$row = $result->fetch_assoc() ?>
					<div class="col-md-6">
						<h1><?php echo $row['Title']; ?></h1>
						<p><?php echo $row['Description']; ?></p>
					</div>

			<?php } ?>	

			 
			
		</div>
	</div>
</body>
</html>