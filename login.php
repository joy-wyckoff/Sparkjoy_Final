<?php
session_start();
require_once("connection.php");

if (isset($_POST['login'])){
  $user_name=$_POST['user_name'];
  $password=$_POST['password'];

  $q = 'SELECT * FROM `users` WHERE `user_name` = "'.$user_name.'" AND `password` = "'.$password.'"
  ';
  $r = mysqli_query($con, $q) ;
  if ($r){
    if (mysqli_num_rows($r)> 0){
      //login successful
      $_SESSION['username'] = $user_name ;
      header("location:index.php");
  }else{
    //login failed
    echo 'Your password and username do not match.';
  }
}else{
  //problem in query
    echo $q;
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100"
style="background-image:url('thumbnail.jpg');">
			<div class="wrap-login100 p-t-50">
				<form method="post" class="login100-form validate-form">
					<div class="login100-form-avatar">
						<img src="logo1.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						SparkJoy
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="user_name" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="reset.php" class="txt1" >
							Forgot Username / Password?
						</a>
<br><br>


					<div class="text-center w-full">
						<a class="txt1" href="register.php">
							Create new account
							<i class="fa fa-long-arrow-right"></i>
						</a>
						<br><br>
						<div class="text-center w-full">
							<a class="txt1" href="welcome.php">
							<i class="fa fa-long-arrow-left"></i>

								Back

							</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>



</body>
</html>
