<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

$connection = mysqli_connect("localhost","root","") or die (mysqli_error($connection));
$db = mysqli_select_db($connection,"app") or die (mysqli_error($connection));



    $username = $_POST['username'];
    $textarea = $_POST['textarea'];
    $date = $_POST['date'];
    $points = $_POST['points'];

   

    $query = "insert into charity (user_id,username, item_description, date_added, item_points) VALUES ('?','$username', '$textarea', '$date', '$points')"
    $result = mysqli_query($connection, $query);

    if($result){
        header("Location: charity.php");
    }
    else{
        echo "some error occured";
        }
    
    
?>