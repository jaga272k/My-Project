
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
<link rel="stylesheet" type="text/css" href="../css/contact.css">
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
<div class="head">
<h1>For any Technical Problems</h1>
</div>
<table class="table-fix">
	<tr id="head">
		<th>CODE</th>
		<th>NAME</th>
		<th>LOCATION</th>
		<th>E-MAIL</th>
		<th>CONTACT</th>
	</tr>
	
	<tr>
	<td>TN-25Z</td>
	<td>Ganapathi</td>
	<td>ARANI</td>
	<td>rtoarani@gmail.com</td>
	<td>456982</td>
	</tr>
	
	<tr>
	<td>TN-01</td>
	<td>Arunkumar</td>
	<td>CHENNI(CENTRAL)</td>
	<td>rtochennicentra@gmail.com</td>
	<td>652648</td>
	</tr>
	
	<tr>
	<td>TN-04</td>
	<td>murugesan</td>
	<td>CHENNAI(EAST)</td>
	<td>rtochennaieast@gmail.com</td>
	<td>254685</td>
	</tr>
	
	<tr>
	<td>TN-02</td>
	<td>kavya</td>
	<td>CHENNAI(NOR-WES)</td>
	<td>rtochennainorwes@gmail.com</td>
	<td>546821</td>
	</tr>
	
	<tr>
	<td>TN-29</td>
	<td>krishanan</td>
	<td>DHARMAPURI</td>
	<td>rtodharmapuri@gmail.com</td>
	<td>658942</td>
	</tr>
	
	<tr>
	<td>TN-16Z</td>
	<td>aadhavan</td>
	<td>GINGEE</td>
	<td>rtogingee@gmail.com</td>
	<td>458796</td>
	</tr>
	
	<tr>
	<td>TN-51</td>
	<td>gopalan</td>
	<td>NAGAPATTINAM</td>
	<td>rtonagapattinam@gmail.com</td>
	<td>546953</td>
	</tr>
	
	<tr>
	<td>TN-28</td>
	<td>jayabalan</td>
	<td>NAMAKKAL(NORTH)</td>
	<td>rtonamakkalnorth@gmail.com</td>
	<td>546321</td>
	</tr>
	
	
	<tr>
	<td>TN-88</td>
	<td>boobalan</td>
	<td>NAMAKKAL(SOUTH)</td>
	<td>rtonamakkalsouth@gmail.com</td>
	<td>564261</td>
	</tr>
	
	<tr>
	<td>TN-52</td>
	<td>muruga vel</td>
	<td>SANKAGIRI</td>
	<td>rtosakagiri@gmail.com</td>
	<td>458796</td>
	</tr>
	
	<tr>
	<td>TN-11</td>
	<td>arul</td>
	<td>THAMBARAM</td>
	<td>rtothambaram@gmail.com</td>
	<td>456852</td>
	</tr>
	
	
	
</table>
</body>
</html>