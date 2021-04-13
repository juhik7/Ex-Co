<?php
require 'includes/url.php';
require 'classes/User.php';
require 'classes/Database.php';

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$db = new Database();
    $conn = $db->getConn();

    if (User::authenticate($conn,$_POST['email'], $_POST['lpass'])) {
    	session_regenerate_id(true);
        $_SESSION['is_logged_in'] = true;
        if(isset($_SESSION['user'])){
        	setcookie("user",$_SESSION['user']);
        }else{
        	setcookie("user","user");
        }
        redirect('/');
    } else {
    	echo("<script type='text/javascript'> alert('INCORRECT ID/PASSWORD'); </script>");
    	echo("<script type='text/javascript'> window.location.href = 'logreg.php'; </script>");
    }
}
?>