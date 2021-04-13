<!DOCTYPE html>
<html>
<head>
	<title>Login/Register</title>
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
		<h2>#ExCo: Sign in/up Form</h2>
		<div class="container" id="container">
			<div class="form-container sign-up-container">
				<form action="register.php" method="POST">
					<h1>Create Account</h1>
					<span>or use your email for registration</span>
					<input type="text" id="rname" name="rname" placeholder="Name" required />
					<input type="email" id="email" name="email" placeholder="E-Mail" required>
					<input type="password" id="rpass" name="rpass" placeholder="Password" required />
					<input type="text" id="rcpass" name="rcpass" placeholder="Confirm Password" required />
					<input type="number" id="rage" name="rage" placeholder="Age" required />
					<button name="reg_user">Sign Up</button>
				</form>
			</div>
			<div class="form-container sign-in-container">
				<form action="login.php" method="POST">
					<h1>Sign in</h1>
					<span>or use your account</span>
					<input type="email" id="email" name="email" placeholder="E-Mail"required>
					<input type="password" id="lpass" name="lpass" placeholder="Password" required />
					<a href="#">Forgot your password?</a>
					<button name="log_user">Sign In</button>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>Welcome Back!</h1>
						<p>To view dashboard please login with your personal info</p>
						<button class="ghost" id="signIn">Sign In</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1>Hello, User!</h1>
						<p>Enter your personal details and start your journey of savings with us</p>
						<button class="ghost" id="signUp">Sign Up</button>
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
	<script src="javascript/login.js"></script>
</body>
</html>