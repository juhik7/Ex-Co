<?php
session_start();
$today_perc = min(abs(round(($_SESSION["inc_t"]/$_SESSION["bud"])*100)),100);
$weekly_perc = min(abs(round(($_SESSION["inc_w"]/$_SESSION["bud"])*100)),100);
$month_perc = min(abs(round(($_SESSION["inc_m"]/$_SESSION["bud"])*100)),100);
$yearly_perc = min(abs(round(($_SESSION["inc_y"]/$_SESSION["bud"])*100)),100);
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
	<link rel="stylesheet" type="text/css" href="css/income.css">
	<script src="javascript/income.js"></script>
</head>
<body style="background-color: #f4eae6;">
	<h1 id="head" class="heading"></h1>
	<h1 id="amt" class="money"></h1>
	<div id="bar"></div>
	<span style="text-align: center;"><button class="button" onclick='today(<?php echo $_SESSION["inc_t"].",".$today_perc ?>)'><span>Today's Income </span></button></span>
	<span style="text-align: center;"><button class="button" onclick="weekly(<?php echo $_SESSION["inc_w"].",".$weekly_perc ?>)"><span>Weekly Income </span></button></span><br>
	<span style="text-align: center;"><button class="button" onclick="monthly(<?php echo $_SESSION["inc_m"].",".$month_perc ?>)"><span>Monthly Income </span></button></span>
	<span style="text-align: center;"><button class="button" onclick="yearly(<?php echo $_SESSION["inc_y"].",".$yearly_perc ?>)"><span>Yearly Income </span></button></span>
</body>
</html>