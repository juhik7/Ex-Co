<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<style type="text/css">
		@font-face {
  			font-family: money;
  			src: url(fontFiles/Money.ttf);
		}
		@font-face {
  			font-family: dollarBill;
  			src: url(fontFiles/DollarBill.ttf);
		}
		body{
			overflow: hidden;
		}
	</style>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/incexp.css">
	<script src="javascript/budget.js"></script>
</head>
<body style="background-color: #f4eae6;" onload="budget(<?php echo $_SESSION["bud"] ?>)">
	<h1 id="head" class="heading"></h1>
	<h1 id="amt" class="money"></h1>
	<div id="bar"></div>
</body>
</html>