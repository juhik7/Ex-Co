<?php

function getDB(){
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "exco";

	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname
	if(mysqli_connect_error()){
		echo mysqli_connect_error();
		exit;
	}
	return $conn;
}


?>