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
<link rel="stylesheet" href="app.css">
<script src="camera.js"></script>
<script src="js/jquery.js"></script>
<script type="text/javascript">
$(document).on('mobileinit', function(){
    $.mobile.defaultPageTransition = 'slide';
});
</script>
<script src="js/jquery.mobile-1.4.5.js"></script>

</head>
<body>
<!-- Start of first page -->
<div data-role="page" id="shop">

	<div data-role="header">
		<h1>Donation App</h1>
    </div><!-- /header -->
    <img src="donate.png" alt="code"> 
    <div role="main" class="ui-content">
    <h2>WELCOME <?php echo $_SESSION['shop'];
?>
</h2>

         <a href="#" onclick="ImageSourceShareSheet()" style="text-decoration:none" class="ui-btn">Scan QR Code</a>
         <a href="#discount" class="ui-btn" >Check discounts given</a>
<form>    
    <label for="discount"> Discount:</label>
    <input type="number" name="discount" id="discount" value="">
    <button type="submit" form="form1" value="Submit">Add</button>
</form>
         <a href="logout.php" class="ui-btn">Logout</a>
    </div><!-- /content -->

    <div data-role="footer" data-position="fixed" >
        <h4>Page Footer</h4>
    </div><!-- /footer -->
</div><!-- /page -->



</body>
</html>