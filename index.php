<?php
require 'classes/Database.php';
require 'includes/auth.php';
require 'includes/url.php';
session_start();
$db = new Database();
$conn = $db->getConn();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ex-Co</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<style type="text/css">
		@font-face {
  			font-family: exco;
  			src: url(fontFiles/Revamped.ttf);
		}
		@font-face {
  			font-family: money;
  			src: url(fontFiles/Money.ttf);
		}
		@font-face {
  			font-family: RocknRoll;
  			src: url(fontFiles/RocknRoll.ttf);
		}
		body{
			overflow-x: hidden;
		}
	</style>
</head>
<body style="background-color: #f4eae6;">
	<iframe src="header.php" width="102%" style="margin: -10px; overflow-y: hidden;" height="265px" frameborder="0"></iframe>
	<div class="div1">
		<h1 style="text-align: center;" class="st1">EXPENSE CONTROLLER SYSTEM</h1>
		<p class="ps1">Expense Controller System is a system which will keep a track of Income-Expense of a House on a day to day basis. This System takes Income from House and divides in daily expense allowed, If you exceed that day's expense it will cut it from your income and give new daily expense allowed amount, and if that day's expense is less it will add it in savings. Expense Controller System will generate report at the end of month to show Income-Expense Curve. It will let you add the savings amount which you had saved for some particular Festivals or day like Birthday or Anniversary.</p>
		<?php if (isLoggedIn()): ?>
		<?php else : ?>
			<p style="text-align: center;"><button class="button" onclick="signUp()"><span>Sign Up </span></button></p>
		<?php endif; ?>
	</div>
	<img src="assets/test.svg" width="48%" style="float: right; overflow: hidden;">
	<footer>
		<p>
			Developed By: Atishay Jain, Juhi Kumari, Tushar
		</p>
	</footer>
	<script src="javascript/home.js"></script>
</body>
</html>