<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

$connection = mysqli_connect("localhost","root","") or die (mysqli_error($connection));
$db = mysqli_select_db($connection,"app") or die (mysqli_error($connection));



    $username = $_POST['tName'];
    $password = $_POST['tPass'];
    $email = $_POST['tMail'];

   

    $query = "insert into login (username, password, email, role) values ('$username', '$password', '$email', 'user')";
    $result = mysqli_query($connection, $query);

    if($result){
        header("Location: user.php");
    }
    else{
        echo "some error occured";
        }
    
    
?>