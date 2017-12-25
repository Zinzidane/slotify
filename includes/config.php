<?php 
	ob_start();
	session_start();

	$timezon = date_default_timezone_set("Europe/Minsk");

	$con = mysqli_connect("localhost", "root", "", "slotify");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>