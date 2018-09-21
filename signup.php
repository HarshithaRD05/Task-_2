
<?php

session_start(); 
include("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['password']); 
	$email = mysqli_real_escape_string($db,$_POST['email']);

$sql = "SELECT * from users where username = '$username'" ;
$result = mysqli_query($db,$sql);
$num = mysqli_num_rows($result);
if($num==1)
{	$message = "User name already Exists";
	echo "<script type='text/javascript'>alert('$message');</script>";
}

else{
	$sql = "INSERT INTO users (username,password,email)
VALUES ('$username','$password','$email');" ;
$result = mysqli_query($db,$sql);
	header("Location:index3.php");
	
}

}

?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="style2.css">

		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">		

	</head>
	<body>
		<div class="container-fluid " >
			<div class="row justify-content-center align-center" >
			<div class="col-2">
			<h1 class="tp display-4">Signup</h1>
			</div>
			</div>
		</div>	
		<div class="container-fluid ">
			<div class="row justify-content-center ">
				<div class="col-sm-4 bx">
					<form method="post" action="signup.php">
						<div class="form-group col">
						<input type="email" name="email" id="e" placeholder="Enter Email-id" required="" >
					</div> 
					<div class="form-group col">
						<input type="text" name="username" id="u" placeholder="Enter Name" required="">
					</div> 
					<div class="form-group col ">
						<input type="password" name="password" id="p" placeholder="Enter Password" required="">
					</div>
					<div class="col-12 justify-content-center align-center">
						<button type="submit" class="btn login">Login</button>
					</div>
				</form>
					<div class="col-12 justify-content-center align-center " style="color: white">
						<a href="index3.php">Already have a Account?</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>