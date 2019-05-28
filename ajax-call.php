<?php

include('db-connection.php');
$output = '';

if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$encrypted_pwd = md5($password);

	$sql_query = "insert into users (username, password) values ('". $username ."' , '". $encrypted_pwd ."')";

	$add_user_query = mysqli_query( $db_connection, $sql_query );

	if ( $add_user_query ) {
		$output = 'success';
	} else {
		$output = 'failure';
	}

	echo $output;
}
