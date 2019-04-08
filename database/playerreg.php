<?php

 //create a new conection
  $con =mysqli_connect("localhost","root","") or die("<script>alert('unable to connect')</script>");
  msqli_select_db($con,'playerreg');


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

if(isset($_POST['submit-button'])){
	echo "<script type='text/javascript'> alert('submit button clicked')</script>";

}else{

}























?>