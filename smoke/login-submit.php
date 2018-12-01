<?php
	include("db-config.php");

	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$DB_Database = "db_1";
	
	$DB_Connection = mysqli_connect($DB_ServerName, $DB_UserName, $DB_Password, $DB_Database);
	
	if (!$DB_Connection) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "SELECT username, password FROM users WHERE username = '$username' && password = '$password'";
	
	$result = mysqli_query($DB_Connection, $sql);
	
	if($result) {
		if (mysqli_num_rows($result) == 1) {
			session_start();
			$_SESSION['login_user'] = $username;
			//$_SESSION['password'] = ;
			header("Location: index.php");
		}
		else {
			echo "<script type='text/javascript'>alert('Invalid Username or Password');</script>";
			header("Location: login.php");
		}
	}
	else {
		echo "<script type='text/javascript'>alert('There is some problem with the connection. Please try again later.');</script>";
	}
	$DB_Connection->close();
	
?>