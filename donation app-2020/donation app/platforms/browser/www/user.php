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
<div data-role="page" id="menu">
    <div data-role="header" >
        <h1>Donation App</h1>
    </div><!-- /header -->
    <img src="donate.png" alt="code"> 
    <div role="main" class="ui-content">
    <h2>WELCOME <?php echo $_SESSION['user'];
?>
</h2>


<h1>Your total points: 100</h1>

<img src="qrcode.png" alt="code">

<div role="main" class="ui-content">

         <a href="#donation" class="ui-btn">Check your donations</a>
         <a href="#discount" class="ui-btn" >Check your discounts</a>
         <a href="logout.php" class="ui-btn">Logout</a>
    </div><!-- /content -->
  
  
   

    <div data-role="footer" data-position="fixed" >
        <h4>Page Footer</h4>
    </div><!-- /footer -->
</div><!-- /page -->



 <!-- Start of second page -->
 <div data-role="page" id="donation">
    
    <div data-role="header">
        <a href="#menu"  data-direction="reverse" class="ui-btn">Back</a>
        <h1>Settings</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">
        <p>I'm the second in the source order so I'm hidden when the page loads. I'm just shown if a link that references my id is beeing clicked.</p>
        
    </div><!-- /content -->

    <div data-role="footer" data-position="fixed">
        <h4>Page Footer</h4>
    </div><!-- /footer -->
</div><!-- /page -->



<!-- Start of third page -->
<div data-role="page" id="discount">
    
    <div data-role="header">
        <a href="#menu"  data-direction="reverse" class="ui-btn">Back</a>
        <h1>Settings</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">
        <p>I'm the second in the source order so I'm hidden when the page loads. I'm just shown if a link that references my id is beeing clicked.</p>
        
    </div><!-- /content -->

    <div data-role="footer" data-position="fixed">
        <h4>Page Footer</h4>
    </div><!-- /footer -->
</div><!-- /page -->

</body>
</html>