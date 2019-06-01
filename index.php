<?php

	session_start();

	include('db-connection.php');

	if ( isset( $_POST["login_btn"] ) ) {

		$username = $_POST["username"];
		$password = $_POST["password"];

		$encrypted_pwd = md5( $password );

		$sql_query = "select * from users where username='". $username ."' and password='". $encrypted_pwd ."'";

		$users_data_result = mysqli_query( $db_connection, $sql_query );

		if ( ( mysqli_num_rows( $users_data_result ) > 0 ) || ( 'admin' == $username && 'admin' == $password ) ) {
			echo "<script> window.location.href='cms-admin/'; </script>";
		} else {
			echo "<script>window.alert('Invalid Username or Password'); window.location.href='index.php';</script>";
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title> Login Page </title>

		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" id="fontawesome-css"/>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="style.css" rel="stylesheet" id="portal-css"/>

	</head>
	<body>

		<div class="wrapper fadeInDown">
		  	<div id="formContent">
		    
				<div class="fadeIn first">
			    	<i class="fas fa-user-circle"></i>
			    	<h4 class="page-title">My Account</h4>
			    </div>

			    <div class="form-content">
					<form class="form-fields" method="post">
						<input type="text" class="fadeIn second" name="username" placeholder="Enter Username" />
						<input type="password" class="fadeIn third" name="password" placeholder="Enter Password" />
						<input type="submit" class="fadeIn fourth" value="Log In" name="login_btn" />
					</form>

					<div id="formFooter">
						<a class="underlineHover" href="registration.php">Register Now</a>
						<span class="divide">|</span>
						<a class="underlineHover" href="#">Forgot Password?</a>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>
