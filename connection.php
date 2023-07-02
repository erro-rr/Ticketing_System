<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "ticketsystem";

	$conn= mysqli_connect( $host, $user, $password, $dbname);

	if (mysqli_connect_errno()) {
		die ("failed to connect with mysql" . mysqli_connect_error());
	}
?>