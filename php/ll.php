


<?php
session_start();
if(!isset($_SESSION['x']))
        header("location:userlogin.php");
	

?>

<html lang="en">
<head>
<title>TamilNadu RTO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/ll.css">
<link rel="stylesheet" type="text/css" href="../css/ll2.css">
</head>
<body>
<div class="top-line"> 
</div>
<header>
<div class="img_1">
<img src="../pictures/road.jfif" width = "200" height = "75">
</div>
<img src="../pictures/emblem.png" width = "70" height = "75">
<h2>E</h2>
<h3>Service</h3>
<div class="line-one">
</div>
<h1>Government of TamilNadu</h1>
<h4>Transport Commissionerate and State Transport Authority</h4>
<nav class="nav">
<ul class="nav-area">
	<li><a href="service.php">Dashboard</a></li>
	<li><a href="about us.php">About Us</a></li>
	<li><a href="externallink.php">External Links</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<li><a href="userlogout.php">Logout</a></li>
	</ul>
	</nav>

</header>


<div class="zero"></div>
<div class="image">
<img src="../pictures/transport.jfif" width = "33%" height = "110">
<img src="../pictures/transport3.jpg" width = "33.4%" height = "110">
<img src="../pictures/transport2.jfif" width = "33%" height = "110">
</div>


	
	
<div class=" container container_1" >
	
	
	<div class="field field2">
	<a href="licenseform.php"><img src="../pictures/dl.png" width = "80" height = "80"></a>
	<a id="f2" href="licenseform.php">Apply for Driving Licence</a>
	</div>
	
	
	<div class="field field2">
	<a href="licenseform.php"><img src="../pictures/dl.png" width = "80" height = "80"></a>
	<a id="f2" href="registered_license.php"> my registered application</a>
	</div>
	 
	
	<div class=" field field4">
	<a href="demo.php"><img src="../pictures/duplicate.png" width = "80" height = "80"></a>
	<a id="f4" href="demo.php">view Demo image video</a>
	</div>

</div>

<div class=" container container_2" >
	<div class=" field field5">
	<a href="license_address.php"><img src="../pictures/address.png" width = "80" height = "80"></a>
	<a id="f5" href="license_address.php">Change of Address</a>
	</div>
	
	<div class="field field6">
	<a href="license_mobile_update.php"><img src="../pictures/mobile.png" width = "80" height = "80"></a>
	<a id="f6" href="license_mobile_update.php">Update Mobile number</a>
	</div>
	
	<div class="field field6">
	<a href="application.php"><img src="../pictures/forms.png" width = "80" height = "80"></a>
	<a id="f7" href="application.php">Application Forms</a>
	</div>
	
	

</div>




	

	
	
</body>
</html>