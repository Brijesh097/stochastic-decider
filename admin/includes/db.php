<?php 
    $DB_HOST	= "localhost";
	$DB_USER	= "root";
	$DB_PASSWORD  = "";
	$DB_NAME	= "luckydraw";

	$connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
	
	if (!$connection) {
		die("Connection cannot be established" . mysqli_error($connection));
	} 
