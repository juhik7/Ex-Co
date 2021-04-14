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
    $entry->amount = $_POST['expense'];
    $entry->tran_date = $_POST['edate'];
    $entry->source = $_POST['esource'];
    $entry->remark = $_POST['eremark'];
    if ($entry->createExp($conn)) {
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
