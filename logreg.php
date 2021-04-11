<?php
if (isset($_POST['sup'])){
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		$age = $_POST['age'];

		$conn = mysqli_connect('localhost','root','');
		mysqli_select_db($conn, 'demo');

		$query = "select * from signup where email = '$email'";

		$result =$conn->query($query);
		


		$row=mysqli_fetch_array($result);
		
        if($row){

			echo("<script type='text/javascript'> alert('This email is already Registered. Please Sign In'); </script>");
		} 
		else{

			$query="insert into signup values('$uname','$email','$pass','$cpass','$age');";
		    $sr=$conn->query($query);
            if($sr){
                echo("<script type='text/javascript'> alert('Sign Up Successful'); </script>");
                
            }
            else{
                echo("<script type='text/javascript'> alert('error data not added'); </script>");
            }
		}
}
?>

<?php

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, 'demo');
	
?>
<?php
if (isset($_POST['sin'])){
		if(!isset($_SESSION)) 
		{ 
			session_start(); 

		}

		$email = $_POST['email'];
		$pass = $_POST['pass'];
		
		$query= "select * from signup where email = '$email' && pass = '$pass'";

        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result);
		
        if($row['email']==$email && $row['pass']==$pass ){
	        if(empty($email||$pass)){
		        echo("<script type='text/javascript'> alert('invalid id'); </script>");
	        }
	        else{
		        $_SESSION["name"]=$row["uname"];
		        echo("<script type='text/javascript'> alert('welcome');window.location.href='index.html'; </script>");
            }
        }
        else{
	        echo("<script type='text/javascript'> alert('invalid id'); </script>");
        }

}
?>
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
	<iframe src="header.html" width="102%" style="margin: -10px; overflow-y: hidden;" height="265px" frameborder="0"></iframe>
	<div class="newcont">
		<h2>#ExCo: Sign in/up Form</h2>
		<div class="container" id="container">
			<div class="form-container sign-up-container">
				<form action="" method="post">
					<h1>Create Account</h1>
					<span>or use your email for registration</span>
					<input type="text" name="uname" placeholder="Name" required />
					<input type="email" name="email" placeholder="Email" required />
					<input type="password" id="rpass" name="pass" placeholder="Password" required />
					<input type="text" id="rcpass" name="cpass" placeholder="Confirm Password" required />
					<input type="number" id="age" name="age" placeholder="Age" required />
					<button name="sup">Sign Up</button>
				</form>
			</div>

		<div class="form-container sign-in-container">
			<form action="" method="post">
				<h1>Sign in</h1>
				<span>or use your account</span>
				<input type="email" name="email" placeholder="Email" required />
				<input type="password" name="pass" placeholder="Password" required />
				<a href="#">Forgot your password?</a>
				<button name="sin">Sign In</button>
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





