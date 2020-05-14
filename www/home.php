<<?php 
	include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['role']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>


//  if (count($errors) == 0) {
//		$password = md5($password_1);//encrypt the password before saving in the database

       //     $result = mysqli_query($connection, $query);

   //         if(mysqli_num_rows($result) > 0){

    //        while($row = mysqli_fetch_assoc($result)){


 //       if($row["role"] != "admin"){
//			$query = "INSERT INTO user (username, email, role, password) 
//					  VALUES('$username', '$email', '$role', '$password')";
	//	mysqli_query($db, $query);
	//		$_SESSION['success']  = "New user successfully created!!";
	//		header('location: home.php');
	//	}else{
//			$query = "INSERT INTO user (username, email, role, password) 
//					  VALUES('$username', '$email', 'user', '$password')";
	//		mysqli_query($db, $query);

			// get id of the created user
	//		$logged_in_user_id = mysqli_insert_id($db);
  //      }
 //   }
				
	//	}