<?php
	
 session_start();
 
 include_once("index.php");
 
 if(isset($_SESSION["username"]))
	
 {
 	echo '<h3>Login success, welcome - ' .$_SESSION["username"].'</h3>';
	
 	echo '<br><br><a href="logout.php">Logout</a>';	
 }else{
     header("location:register.php");	
 }

	
?>