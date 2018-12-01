<?php
	include('config/session-config.php');
	if(isset($_SESSION['login_user'])) {
		echo 'Welcome ' . $_SESSION['login_user'] . '!';
	}
	else {
		echo 'Welcome!';
	}
?>