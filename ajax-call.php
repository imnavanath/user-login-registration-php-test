<?php

include('db-connection.php');
$output = '';

if ( isset( $_POST['username'] ) && isset( $_POST['email'] ) && isset( $_POST['password'] ) && isset( $_POST['confirm_password'] ) ) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	if( $password === $confirm_password ) {
		$encrypted_pwd = md5($password);
		$sql_query = "insert into users (username, email, password) values ('". $username ."' , '". $email ."', '". $encrypted_pwd ."')";
		$add_user_query = mysqli_query( $db_connection, $sql_query );
	}

	if ( isset( $add_user_query ) ) {
		$output = 'success';
	} else {
		$output = 'fail';
	}

	echo $output;
}
