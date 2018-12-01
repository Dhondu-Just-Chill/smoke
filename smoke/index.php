<?php
	include('session-config.php');
	if(isset($_SESSION['login_user'])) {// && isset($_SESSION['password'])) {
		echo 'Welcome' . $_SESSION['login_user'] . '!';
	}
	else {
		echo 'Welcome!';
	}
?>