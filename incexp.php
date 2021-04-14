<?php
require 'includes/auth.php';
session_start();
if (! isLoggedIn()){
	die("ACCESS DENIED");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Income/Expense</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/login2.css">
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
	<div class="newcont">
		<h2>#ExCo: Add Income/Expense Form</h2>
		<div class="container" id="container">
			<div class="form-container sign-up-container">
				<form action="income_feed.php" method="POST">
					<h1>Add Income</h1>
					<span>enter information about the money earned</span>
					<input id="income" type="number" name="income" placeholder="Enter Income" required />
					<input type="date" id="idate" name="idate" placeholder="Enter Date" required />
					<input type="text" id="isource" name="isource" placeholder="Enter Source" required />
					<textarea id="iremark" name="iremark" placeholder="Enter Remark"></textarea>
					<button>Submit</button>
				</form>
			</div>
			<div class="form-container sign-in-container">
				<form action="expense_feed.php" method="POST">
					<h1>Add Expense</h1>
					<span>enter information about the expenditure</span>
					<input type="number" id="expense" name="expense" placeholder="Enter Expense" required />
					<input type="date" id="edate" name="edate" placeholder="Enter Date" required />
					<input type="text" id="esource" name="esource" placeholder="Enter Source" required />
					<textarea id="eremark" name="eremark" placeholder="Enter Remark"></textarea>
					<button>Submit</button>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>Hello,
							<?php echo " ".$_COOKIE["user"];?>
						</h1>
						<p>To enter expense please click on the button below</p>
						<button class="ghost" id="addExpense">Add Expense</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1>Hello,
							<?php echo " ".$_COOKIE["user"];?>
						</h1>
						<p>To enter income please click on the button below</p>
						<button class="ghost" id="addIncome">Add Income</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<p>
			Developed By: Atishay Jain, Juhi Kumari, Tushar
		</p>
	</footer>
<script src="javascript/incexp.js"></script>
</body>
</html>