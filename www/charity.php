<?php

ini_set('display_startup_errors',1); 
ini_set('display_errors',1);
error_reporting(-1);

session_start();

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
<script src="js/jquery.js"></script>
<script type="text/javascript">

</script>
<script src="js/jquery.mobile-1.4.5.js"></script>

</head>
<body>
<!-- Start of first page -->
<div data-role="page" id="charity">

	<div data-role="header">
		<h1>Donation App</h1>
    </div><!-- /header -->
    <img src="donate.png" alt="code"> 
    <div role="main" class="ui-content">
        <h2>WELCOME <?php echo $_SESSION['charity'];
?>

</h2>

<form method="POST" id="userDonation" action="donation.php">
<label for="textarea"> Description of donation:</label>
<textarea cols="40" rows= "8" name="textarea" id="textarea"></textarea>
<label for="date"> Date:</label>
<input type="date" name="date" id="date" value="">
<label for="username"> Username:</label>
<input type="text" name="username" id="username" value="">
<label for="points"> Points:</label>
<input type="number" name="points" id="points" value="">
<button type="submit" form="form1" value="Submit">Add</button>
</form>
         <a href="#qrcode" class="ui-btn">Scan QR Code</a>
         <a href="logout.php" class="ui-btn">Logout</a>
    </div><!-- /content -->

<div data-role="footer" data-position="fixed" >
    <h4>Page Footer</h4>
</div><!-- /footer -->
</div><!-- /page -->



</body>
</html>