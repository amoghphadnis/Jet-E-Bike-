<?php
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'jetebike');
	if(isset($_POST['done']))
	{
		$username = $_POST['username'];
	 	$pass1 = $_POST['password'];
	 	$pass2 = $_POST['password2'];
	 	if (empty($username))
	 	{
	 		die("You forgot to enter your username");
	 	}
	 	else if (empty($pass1))
	 	{
	 		die("You forgot to enter password");
	 	}
	 	else if (empty($pass2))
	 	{
	 		die("You forgot to enter second password");
	 	}
	 	if($pass1==$pass2)
	 	{
	 		$hash = password_hash($pass1, PASSWORD_DEFAULT);
		 	$q = " INSERT INTO `user`(`Id`,`username`, `password`) VALUES (`Id`, '$username', '$hash' )";
		 	$query = mysqli_query($con,$q);
	 	}
	 	else
	 	{
	 		?>
	 		<script>
	 			alert("The passwords are not same");
	 		</script>
	 		<?php
	 	}
	}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Register</title>
 	<link rel="icon" href="main.jpg">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<body>

 	<div class="col-lg-6 m-auto">
 
 		<form method="post">
 
 			<br><br>
 			<div class="card">
 
 				<div class="card-header bg-dark">
 					<h1 class="text-white text-center">Register</h1>
 				</div><br>

 				<label> Username: </label>
 				<input type="text" name="username" class="form-control"> <br>

 				<label> Password: </label>
 				<input type="password" name="password" id="pass1" class="form-control" required> <br>

 				<label> Confirm Password: </label>
 				<input type="password" name="password2" id="pass2" class="form-control" required> <br>

 				<button class="btn btn-success" type="submit" name="done">Submit</button><br>
 			</div>
 		</form>
 	</div>
 	<script type="text/javascript">
 		var password = document.getElementById("pass1"), confirm_password = document.getElementById("pass2");

		function validatePassword()
		{
			if(password.value != confirm_password.value)
		  	{
		    	confirm_password.setCustomValidity("Passwords Don't Match");
		  	} 
		  	else 
		  	{
		   		confirm_password.setCustomValidity('');
		  	}
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
 	</script>
 </body>
 </html>