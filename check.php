<?php 
$errors = [];
include 'Users.php';
$email = trim($_POST['email']);
$username = trim($_POST['name']);
$password = trim($_POST['password']);


	$dbUsers = new Users($conn);

	$status = $dbUsers->newUser($username, $email, $password);

	if ($status) {
		$success = "$username has been registered.";
	}else{
		$errors[] = "$username is already in use.";
	}



?>