<?php
	session_start();
	include_once('../db_conn_user.php');

	if(isset($_POST['add'])){
		$username = $_POST['username'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$sql = "INSERT INTO users (username, name, password) VALUES ('$username', '$name', '$password')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'user added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: Registered.php');
?>