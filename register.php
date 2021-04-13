<?php
require 'includes/url.php';
require 'classes/User.php';
require 'classes/Database.php';

session_start();

$user = new User();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $db = new Database();
    $conn = $db->getConn();

    $user->username = $_POST['rname'];
    $user->password = password_hash($_POST['rpass'], PASSWORD_DEFAULT);
    $user->email = $_POST['email'];
    $user->age = $_POST['rage'];
    if ($user->create($conn)) {
        if (User::authenticate($conn,$_POST['email'], $_POST['rpass'])) {
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
    }else{
    	foreach ($user->errors as $error):
    		echo("<script type='text/javascript'> alert('".$error."'); </script>");
    	endforeach;
    	echo("<script type='text/javascript'> window.location.href = 'logreg.php'; </script>");
    }
}

?>
