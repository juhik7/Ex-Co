<?php
session_start();
require 'includes/auth.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ex-Co</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
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
	<header>
		<p align="middle">
		<img src="assets/headImg1.png" width="8%" style="vertical-align:middle;float:left;">
		<span class="logoA">E</span>
		<span class="logoB">x</span>
		<span class="logoA">-C</span>
		<span class="logoB">o</span>
		<img src="assets/headImg1.png" width="8%" style="vertical-align:middle;float:right; margin-right: 10px;"></p>
		<br><br><br>
	</header>
	<nav>
	  <ul class="menuItems" style="margin-left: 120px;">
	    <li><a href='index.php' data-item='HOME' target="_parent">HOME</a></li>
	    <?php if (isLoggedIn()): ?>
	    <li><a href='dashboard.php' data-item='DASHBOARD' target="_parent">DASHBOARD</a></li>
	    <?php endif; ?>
	    <?php if (isLoggedIn()): ?>
	    <li><a href='incexp.php' data-item='INCOME/EXPENSE' target="_parent">INCOME/EXPENSE</a></li>
	    <?php endif; ?>
	    <?php if (isLoggedIn()): ?>
	    	
    		<li><a href='logout.php' data-item='LOGOUT' target="_parent">LOGOUT</a>
    		<span style="color: white;margin-left: 10px;">
	    	<?php echo "(".$_COOKIE["user"].")"; ?>
	    	</span></li>
		<?php else: ?>
	    	<li><a href='logreg.php' data-item='LOGIN/REGISTER' target="_parent">LOGIN/REGISTER</a></li>
	    <?php endif; ?>

	  </ul>
	</nav>
</body>
</html>