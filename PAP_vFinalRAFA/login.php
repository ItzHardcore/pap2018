<?php

include_once 'connect.php'


	$email = 'email';
	$email = mysqli_real_escape_string($conn,$email);
	$password = stripslashes($_POST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	//Checking is user existing in the database or not

$query = "SELECT * FROM `utilizadores` WHERE email='$email' and password='$password'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
        $_SESSION['email'] = $email;
        
            // Redirect user to index.php
		header("Location: welcome.php");
		session_start();
         }else{
	echo "<div class='form'>
<h3>Os dados estão incorretos.</h3>
header (refresh:2 location:'index.php')";
	}

	?>