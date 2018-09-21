
<?php

session_start(); 
include("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['password']); 

$sql = "SELECT * from users where username = '$username' and password = '$password'";
$result = mysqli_query($db,$sql);
$num = mysqli_num_rows($result);

if($num == 1){
	$row = mysqli_fetch_assoc($result);
	header("Location:board.php");
	$_SESSION['username'] = $row['username'];
}
else
{
	$message = "No Such User";
echo "<script type='text/javascript'>alert('$message');</script>";
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

				

	</head>
	<body>
		<script type="text/javascript" src="particles.js"></script>
		<script type="text/javascript" src="app.js"></script>
		<div id="particles-js"></div>
		<div class="container-fluid " >
			<div class="row justify-content-center align-center" >
			<div class="col-2">
			<h1 class="display-4 tp">Log In</h1>
			</div>
			</div>
		</div>	
		<div class="container-fluid ">
			<div class="row justify-content-center ">
				<div class="col-sm-4 bx">
					<form method="post" action="index3.php">
					<div class="form-group col">
						<input type="text" name="username" id="u" placeholder="Enter Name" >
					</div> 
					<div class="form-group col ">
						<input type="password" name="password" id="p" placeholder="Enter Password">
					</div>
					<div class="col-12 justify-content-center align-center">
						<button type="submit" class="btn login">Login</button>
					</div>
				</form>
					<div class="col-12 justify-content-center align-center " style="color: white">
						<a href="#">Forgot password</a>
					</div>
					<div class="col-12 justify-content-center align-center " style="color: white">
						<a href="signup.php">New User ?</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>