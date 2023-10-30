<?php

function Connect()
{
	$dbhost = "webhost";
	$dbuser = "root";
	$dbpass = "Piyush@786";
	$dbname = "carrentalp";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>