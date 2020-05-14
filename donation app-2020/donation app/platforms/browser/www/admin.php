<?php

session_start();

include_once 'config.php';
$query = "select * from login";
$result = mysqli_query($connection, $query);
   
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">



</head>
<body>
<div class="contain">
    <div class="row">
        <h2>WELCOME ADMIN <?php
            echo $_SESSION['admin']; ?> </h2>
    </div>
</div>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
</tr>
<?php while($row = mysqli_fetch_assoc($result)){
    ?>           
                 <tr>
                    <td><?php echo $row['user_id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['role'];?></td>
                </tr>
                <?php 
}   
?>
</table>

</body>
</html>