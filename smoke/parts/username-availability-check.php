<?php
	require_once("../config/db-config.php");
	$db_handle = new DBController();


	if(!empty($_POST["username"])) {
		$query = "SELECT * FROM users WHERE userName='" . $_POST["username"] . "'";
		$user_count = $db_handle->numRows($query);
		if($user_count>0) {
			echo "<span style='color: red;'> Username Not Available.</span>";
		}
		else {
			echo "<span style='color:green;'> Username Available.</span>";
		}
	}
?>