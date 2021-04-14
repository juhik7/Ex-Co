<?php
require 'includes/url.php';
require 'classes/Entry.php';
require 'classes/Database.php';

session_start();

$entry = new Entry();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $db = new Database();
    $conn = $db->getConn();

    $entry->username = $_COOKIE["user"];
    $entry->amount = $_POST['income'];
    $entry->tran_date = $_POST['idate'];
    $entry->source = $_POST['isource'];
    $entry->remark = $_POST['iremark'];
    if ($entry->createInc($conn)) {
	        echo("<script type='text/javascript'> alert('Entry Added Successfully'); </script>");
            echo("<script type='text/javascript'> window.location.href = 'incexp.php'; </script>");
    }else{
    	foreach ($entry->errors as $error):
    		echo("<script type='text/javascript'> alert('".$error."'); </script>");
    	endforeach;
    	echo("<script type='text/javascript'> window.location.href = 'incexp.php'; </script>");
    }
}

?>
