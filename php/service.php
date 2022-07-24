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
<link rel="stylesheet" type="text/css" href="../css/home.css">
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
	<li><a href="userlogout.php">logout</a></li>
	</ul>
	</nav>
</header>
<div class="content_1 con1">

<h1>License Related Services</h1>
<p>New driving licence or learner's licence like Appying icence, Application Status,  etc.</p>
<div class="content_1_1">
	<div class="one">
    <img src="../pictures/ll.png" width = "100" height = "100">
	<h5>License service</h5>
	<h6 id="ll">License registration on your fingertips</h6>
	<a href="ll.php">More</a>
	</div>
	
	<div class="one">
	<img src="../pictures/test.png" width = "100" height = "100">
	<h5>vehicle service</h5>
	<h6 id="test">Vehicle registration on your fingertips</h6>
	<a href="ll2.php">More</a>
	</div>
	
	<div class="one">
	<img src="../pictures/other.png" width = "100" height = "100">
	<h5>Other services</h5>
	<h6 id="other">Explore the of services related </h6>
	<a href="#">More</a>
	</div>
</div>
</div>


</body>
</html>