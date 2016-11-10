<?php 
$errors = [];
include 'connection.php';
include 'signup.php';
include 'Users.php';



	

	if ($status) {
		$success = "$username has been registered.";
	}else{
		$errors[] = "$username is already in use.";
	}



?>