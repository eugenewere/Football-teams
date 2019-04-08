<!DOCTYPE html>
<html>
<head>
	<title>Team Registration</title>
	<link rel="stylesheet" type="text/css" href="style/playerregestration.css">
</head>
<body>
	<!--preloader-->
    <div class="preloader hidden">
		<div class="loader hide"><p><p></div>
		
	</div>
	<!--start of navigation-->
	<div class="player-registration-wrapper">

                <div class="nav">
					<img src="images/playerreg.png">
					<p>team registration</p>				
				</div>

		<div class="player-registration-middle">
			<form name="myForm" action="login.html" onsubmit="return validateForm()" method="post">
				
				     <p>team registration</p>	
				<span>
					Team Name:<br>
				    <input type="text" name="firstname" placeholder="FirstName" autofocus required="">
				</span><br>

				<span>				
					 Team Email Address:<br>
					<input type="text" name="email" placeholder="Email Address" required>
				</span><br>

				<span>
					Team Phone Number:<br>
				    <input type="Number" name="Phone Number"placeholder="+254......" maxlength="14" required>
				</span><br>

				<span>
					Team No:<br>
				    <input type="Number" name="Id/Passport/Birth Certificte No"placeholder="xxxx-xxxx">
				</span><br>

				<span>
					Team Location:<br>
				    <input type="text" name="Location"placeholder="....">
				</span><br>

				<span>
					Team City:<br>
				    <input type="text" name="City"placeholder="....">
				</span><br>

				<span>
					Team Country:<br>
					<input list="country" name="country">
					<datalist id="country">
						  <option value="kenya">
						  <option value="uganda">
						  <option value="tanzania">
						  <option value="ethopia">
						  <option value="rwanda">
					</datalist>
				</span><br>
				
				<span>
					Create Password:<br>
				    <input type="Password" name="Create Password:" placeholder="xxxxxxx" autofocus  required>
				</span><br>

				<span>
					Confirm Password:<br>
				    <input type="Password" name="Create Password:" placeholder="xxxxxxx" autofocus  required>
				</span><br>

                <div class="reg">
                	<a href="login.html"><button type="submit">Register</button></a>
					<button type="Reset"><a href="">Reset!</a></button><br>
					
                </div>

                <div class="term">
                	<P>Already registered? <a href="login.html">log-in</a></P>
                </div>

                 <button type="button" id="back"><a href="regestration.html">Back</a> </button>
			</form>
			
			
		</div>
		
	</div>
 <script type="text/javascript" src="javascript/script.js"></script>
</body>
</html>