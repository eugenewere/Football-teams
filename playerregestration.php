<?php
   require "dbconfig/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Player Registration</title>
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
					<img src="images/playerreg.jpg">
					<p>player registration</p>				
				</div>

		<div class="player-registration-middle">
			<form name="myForm" action="playerregestration.php" onsubmit="return validateForm()" method="POST">
				
				     <p>player registration</p>	
				<span>
					FirstName:<br>
				    <input type="text" name="firstname" placeholder="FirstName" autofocus required="" class="verif">
				</span><br>

				<span>
					LastName:<br>
				    <input type="text" name="lastname" placeholder="LastName" class="verif">
				</span><br>
				
				<span>				
					Email Address:<br>
					<input type="text" name="email" placeholder="Email Address" required class="verif">
				</span><br>

				<span>
					Phone Number:<br>
				    <input type="Number" name="phonenumber" placeholder="+254......" maxlength="14" required class="verif">
				</span><br>

				<span>
					Date Of Birth:<br>
				    <input type="date" name="dateofbirth" placeholder="DD/MM/YYYY" class="verif">
				</span><br>
				
				<span>
					Id/Passport/Birth Certificte No:<br>
				    <input type="Number" name="id" placeholder="xxxx-xxxx" class="verif">
				</span><br>

				<span>
					Location:<br>
				    <input list="location" name="location" placeholder="...." class="verif">
				    <datalist id="location">
						  <option value="juja">
						  <option value="ruiru">
						  <option value="thika">
						  <option value="kahawa">
						  <option value="others">
					</datalist>
				</span><br>

				<span>
					City:<br>
				    <input list="city" name="city" placeholder="...." class="verif">
				    <datalist id="city">
						  <option value="Nairobi">
						  <option value="Nakuru">
						  <option value="nyeri">
						  <option value="eldoret">
						  <option value="others">
					</datalist>
				</span><br>

				<span>
					Your Country:<br>
					<input list="country" name="country" class="verif">
					<datalist id="country">
						  <option value="kenya">
						  <option value="uganda">
						  <option value="tanzania">
						  <option value="ethopia">
						  <option value="rwanda">
					</datalist>
				</span><br>
				
				<span>
					Your Football Team:<br>
					<input list="football" name="football" class="verif">
					<datalist id="football">
						  <option value="CASTILLA">
						  <option value="HCF">
						  <option value="BOKA">
						  <option value="STRAIGHT">
						  <option value="CLASIC FC">
						  <option value="MINING">
						  <option value="ABERDEEN">
						  <option value="JKUMSA">


					</datalist>
				</span><br>

				<span>
					Create Password:<br>
				    <input type="Password" name="password1" placeholder="xxxxxxx" autofocus  required id="pass1" class="verif">
				</span><br>

				<span>
					Confirm Password:<br>
				    <input type="Password" name="password2" placeholder="xxxxxxx" autofocus  required id="pass2" class="verif">
				</span><br>

                <div class="reg">
                	<button type="submit" name="submit-button">sign-up</button>
					<button type="Reset"><a href="">Reset!</a></button>
					
                </div><br>

                
                <div class="term">
                	<P>Already registered? <a href="login.html">log-in</a></P>
                </div>

               <a href="regestration.html"> <button type="button" id="back" >Back </button></a>

			</form>
    <?php
        if(isset($_POST['submit-button']))
        {
			///echo "<script type='text/javascript'> alert('submit button clicked')</script>";
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$phonenumber = $_POST['phonenumber'];
			$dateofbirth = $_POST['dateofbirth'];
			$id = $_POST['id'];
			$location = $_POST['location'];
			$city = $_POST['city'];
			$country = $_POST['country'];
			$password1 = $_POST['password1'];
			$password2 = $_POST['password2'];
              // check if password1 and 2 matches
			if(($password1==$password2)&&($password1>7))
			{
                   // like selecting a primary key from a table
				$query="SELECT * FROM players WHERE id ='$id'";
				$query_run = mysqli_query($con,$query);
                  // check if another user already exists with the same id
				if(mysqli_num_rows($query_run)>0)
				{
					echo "<script type='text/javascript'> alert('The id already exists please choose another one')</script>";

				}
				  else{
						//insert values if condition 1 is false
						$query="INSERT INTO players(firstname, lastname, email, phonenumber, dateofbirth, id, location, city, country, password, password2) VALUES('$firstname','$lastname','$email','$phonenumber','$dateofbirth','$id','$location ,'$city','$country','$password1','$password2')";
						//check if values have been entered
						$query_run = mysqli_query($con,$query);
						 //check if values have been entered in the database 
	                    if($query_run)
	                    {
	                    	echo "<script type='text/javascript'> alert('you have been registered successfully.Proceed to log in page')</script>";

	                    }
	                     else
	                     {
	                    	echo "<script type='text/javascript'> alert('ERROR,user not registered')</script>";
	                     }
				   }
			}
			 else{

			 }
        } 
          else{
        	echo "<script type='text/javascript'> alert('your password and confirm password does not match')</script>";
              }

    ?>

			
			
		</div>		
	</div>
 <script type="text/javascript" src="script.js"></script>
</body>
</html>