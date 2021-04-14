<?php
require 'includes/auth.php';
session_start();
if (! isLoggedIn()){
	die("ACCESS DENIED");
}
require 'includes/setVariables.php';
setVar();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/dashboardS1.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<script src="javascript/dashboard.js"></script>
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
	<aside class="sidebar">
		
		<div class="svg-wrapper">
			<button class="trans" onclick="budget()">
  			<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
    			<rect id="budgetBut" class="shape" height="60" width="320" />
  			</svg>
   				<div class="text">BUDGET</div>
   			</button>
		</div>
		<div class="svg-wrapper">
			<button class="trans" onclick="income()">
  			<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
    			<rect class="shape" height="60" width="320" />
  			</svg>
   				<div class="text">INCOME</div>
   			</button>
		</div>
		<div class="svg-wrapper">
			<button class="trans" onclick="expense()">
  			<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
    			<rect class="shape" height="60" width="320" />
  			</svg>
   				<div class="text">EXPENSE</div>
   			</button>
		</div>
		<div class="svg-wrapper">
			<button class="trans" onclick="savings()">
  			<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
    			<rect class="shape" height="60" width="320" />
  			</svg>
  				<div class="text">SAVINGS</div>
  			</button>
		</div>
	</aside>
	<div class="frame">
		<iframe src="about:blank" height=600px width=100% frameBorder="0" id="display" scrolling="no"></iframe>
	</div>
	<footer>
		<p>
			Developed By: Atishay Jain, Juhi Kumari, Tushar
		</p>
	</footer>
</body>
</html>