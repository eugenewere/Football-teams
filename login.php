<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="style/login.css">
	<link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
	<div class="login-wrapper">
		<!--preloader-->

	    <div class="preloader hidden">
			<div class="loader hide"><p><p></div>	
		</div>


		<!--nav-->
		<div class="nav">
			<img src="images/login.jpg">
			<p>Log-In</p>				
		</div>

		<div class="log-in-middle ">
			<p id="header">Log In to your Account</p>
			<form>
				<span>				
					<i class="fas fa-envelope"></i>Email Address:<br>
					<input type="text" name="email" placeholder="Email Address" required id="pass">
				</span><br>

				<span>				
					<i class="fas fa-key"></i>Password:<br>
					<input type="Password" name="email" placeholder="password" required id="mail">
				</span><br>

				<span>
					<a href="aftalogin.html"><button type="button" onclick=" return logverify()" ><i class="fas fa-user"></i>Log-In</button></a>
				</span>

				<span id="reset">
					<p><a href="">Forgot Password?</a></p>
				</span>

				<span id="or">
					<h2>OR</h2>
				</span>

				<span class="social">
					<div><a href=""><i class="fab fa-facebook-f"></i>Log In With Facebook</a></div>

					<div><a href=""><i class="fab fa-google"></i>Log In With Google</a></div>

					<div><a href=""><i class="fab fa-twitter"></i>Log In With Twitter</a></div>

					<div><a href=""><i class="fab fa-mailchimp"></i>Log In With Chimp Monkey</a></div>
					
				</span>
				<span id="register">
					<p><a href="teamregistration.html">Sign Up or Register your team ?</a></p>
				</span>

			</form>
			
		</div>
		 
	</div>

<script type="text/javascript" src="javascript/script.js"></script>
</body>
</html>