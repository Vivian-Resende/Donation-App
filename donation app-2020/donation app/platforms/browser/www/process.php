<?php

error_reporting(E_ALL ^ E_NOTICE);

session_start();
require_once "config.php";

$message = "";
$role="";

if(isset($_POST["login"])){

	$username = $_POST["tName"];
	$password = $_POST["tPass"];

	$query = "select * from login where username = '$username'
	and password = '$password'";

	$result = mysqli_query($connection, $query);

	if(mysqli_num_rows($result) > 0){

		while($row = mysqli_fetch_assoc($result)){
			
			if($row["role"] == "admin"){
				$_SESSION['admin'] = $row["username"];
				header('Location: admin.php');
			}else if ($row["role"] == "shop"){
				$_SESSION['shop'] = $row["username"];
				header('Location: shop.php');
			}else if  ($row["role"] == "charity"){
				$_SESSION['charity'] = $row["username"];
				header('Location: charity.php');
		} else {
			$_SESSION['user'] = $row["username"];
			header('Location: user.php');
	}
}
	}	
			else{
				$message = "invalid username password";
				header("Location: index.html");
}
}
$json = json_encode($result);

echo $json;
?>


