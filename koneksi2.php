<?php
	$server = "localhost";
	$user	= "root";
	$pass	= "";
	$database = "e-holiday";

	$koneksi2 = mysqli_connect($server, $user, $pass, $database);

	if (!$koneksi2) 
	{
		die("Connection Failed" .mysqli_connect_errno().mysqli_connect_error());
	}

?>