













<html lang="en">
<head>

<?php
session_start();
    if(!isset($_SESSION['x']))
        header("location:userlogin.php");
    
    
    $conn=mysqli_connect("localhost","root","","rto");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
	
    @mysqli_select_db("rto",$conn);
    
    $u_id=$_SESSION['u_id'];
	
        
        $result=mysqli_query($conn,"SELECT name FROM user where aadhar_no='$u_id' ");
        $q2=mysqli_fetch_assoc($result);
        $name=$q2['name'];
    
        $result2=mysqli_query($conn,"SELECT email FROM user where aadhar_no='$u_id' ");
        $q2=mysqli_fetch_assoc($result2);
        $email=$q2['email'];
		
		 $result3=mysqli_query($conn,"SELECT ph_no FROM user where aadhar_no='$u_id' ");
        $q2=mysqli_fetch_assoc($result3);
        $ph_no=$q2['ph_no'];
		
		 $result4=mysqli_query($conn,"SELECT aadhar_no FROM user where aadhar_no='$u_id' ");
        $q2=mysqli_fetch_assoc($result4);
        $aadhar_no=$q2['aadhar_no'];
		
		 $result5=mysqli_query($conn,"SELECT image FROM user where aadhar_no='$u_id' ");
        $q2=mysqli_fetch_assoc($result5);
        $image=$q2['image'];
		
		
?>


	
	<title>userpage</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/license_status.css">
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data">
	<nav>
		<ul>
			<li class="logo"><img alt="" src="<?php echo "$image" ?>"></li>
			<li>
				<a href="userpage.php"><i class="fa fa-home"></i>   Profile</a>
			</li>
			<li>
				<a href="license_status.php"><i class="fa fa-address-card-o"></i>   license status</a>
			</li>
			<li>
				<a href="vehicle_status.php"><i class="fa fa-truck"></i>   vehicle status</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-cogs"></i>   services</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-logout"></i>   logout</a>
			</li>
		</ul>
	</nav>

	</div>
	</form>
</body>
</html>
