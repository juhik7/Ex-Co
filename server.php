<?php
session_start();
//Initialising Variables

$name = "";
$email = "";

$errors = array();

//Connect Database

$db = mysqli_connect('localhost','root','','exco') or die("Couldn't Connect To Database");
//Register User

$name = mysqli_real_escape_string($db,$_POST['rname']);
$email = mysqli_real_escape_string($db,$_POST['remail']);
$password = mysqli_real_escape_string($db,$_POST['rpass']);
$age = mysqli_real_escape_string($db,$_POST['rage']);

//Check DB for existing Users

$user_check_query = "SELECT * FROM  users WHERE name = '$name' or email = '$email' LIMIT 1";
$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);
if($user){
	if($user['name'] === $name){
		array_push($errors, "name already registered");
	}
	if($user['email'] === $email){
		array_push($errors, "E-Mail already registered");
	}
}

//Register The User If No Error

if(count($errors)==0){
	
}
?>