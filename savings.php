<?php
session_start();
$today_perc = min(abs(round(($_SESSION["sav_t"]/$_SESSION["bud"])*100)),100);
$weekly_perc = min(abs(round(($_SESSION["sav_w"]/$_SESSION["bud"])*100)),100);
$month_perc = min(abs(round(($_SESSION["sav_m"]/$_SESSION["bud"])*100)),100);
$yearly_perc = min(abs(round(($_SESSION["sav_y"]/$_SESSION["bud"])*100)),100);
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
	<link rel="stylesheet" type="text/css" href="css/savings.css">
	<script src="javascript/savings.js"></script>
</head>
<body style="background-color: #f4eae6;">
	<h1 id="head" class="heading"></h1>
	<h1 id="amt" class="money"></h1>
	<div id="bar"></div>
	<span style="text-align: center;"><button class="button" onclick="today(<?php echo $_SESSION["sav_t"].",".$today_perc ?>)"><span>Today's Savings </span></button></span>
	<span style="text-align: center;"><button class="button" onclick="weekly(<?php echo $_SESSION["sav_w"].",".$weekly_perc ?>)"><span>Weekly Savings </span></button></span><br>
	<span style="text-align: center;"><button class="button" onclick="monthly(<?php echo $_SESSION["sav_m"].",".$month_perc ?>)"><span>Monthly Savings </span></button></span>
	<span style="text-align: center;"><button class="button" onclick="yearly(<?php echo $_SESSION["sav_y"].",".$yearly_perc ?>)"><span>Yearly Savings </span></button></span>
</body>
</html>