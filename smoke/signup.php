<?php
	include("config/jquery-config.php");
	include("config/font-awesome-config.php");
?>

<script>
	function checkAvailability() {
		$("#loaderIcon").show();
		jQuery.ajax({
			url: "parts/username-availability-check.php",
			data:'username='+$("#username").val(),
			type: "POST",
			success:function(data) {
				$("#user-availability-status").html(data);
				$("#loaderIcon").hide();
			},
			error:function () {
			
			}
		});
	}	
</script>

<form id='signup' action='signup-submit.php' method='post' accept-charset='UTF-8'>
	<fieldset >
		<label for='username' >UserName*:</label>
		<input type='text' name='username' id='username' onBlur="checkAvailability()" maxlength="30" />
		<i id="loaderIcon" class="fa fa-spinner fa-spin" style="font-size:12px; display:none;"></i>
		<span id="user-availability-status"></span>
		<br>
		<label for='password' >Password*:</label>
		<input type='password' name='password' id='password' maxlength="30" />
		<br>
		<input type='submit' name='Submit' value='Submit' />
	</fieldset>
</form>