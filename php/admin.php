

<?php
session_start();
    if(!isset($_SESSION['x']))
        header("location:adminlogin.php");
    
     $message = "For your security change password ";
        echo "<script type='text/javascript'>alert('$message');</script>";
		
    $conn=mysqli_connect("localhost","root","","rto");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
	
    @mysqli_select_db("rto",$conn);
    
    $u_id=$_SESSION['u_id'];
	
        
        $result=mysqli_query($conn,"SELECT id FROM admin where id='$u_id' ");
        $q2=mysqli_fetch_assoc($result);
        $id=$q2['id'];
   
		
		 $result2=mysqli_query($conn,"SELECT image FROM admin where id='$u_id' ");
        $q2=mysqli_fetch_assoc($result2);
        $image=$q2['image'];
		
		
		 $result3=mysqli_query($conn,"SELECT video FROM admin where id='$u_id' ");
        $q2=mysqli_fetch_assoc($result3);
        $video=$q2['video'];
		
		
?>

<html lang="en">
<head>
	
	<title>adminpage</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data">
	<nav>
		<ul>
			<li class="logo"><img alt="" src="<?php echo "$image" ?>"></li>
			<li>
				<a href="admin.php"><i class="fa fa-home"></i>   Profile</a>
			</li>
			<li>
				<a href="license_update.php"><i class="fa fa-address-card-o"></i>   license </a>
			</li>
			<li>
				<a href="vehicle_update.php"><i class="fa fa-truck"></i>   vehicle </a>
			</li>
			<li>
				<a href="adminviewuser.php"><i class="fa fa-cogs"></i>  All Users</a>
			</li>
			<li>
				<a href="resetpass.php"><i class="fa fa-cogs"></i>  Reset password</a>
			</li>
			<li>
				<a href="adminlogout.php"><i class="fa fa-sign-out"></i>   logout</a>
			</li>
		</ul>
	</nav>
	<div class="area">
	<div class="section">
	<div class="one">
			<p><label>&nbsp &nbsp<?php echo "$id" ?></label></p>
		</div>
	
	</div>
	<div class="video">
	<video width="900px" height="500px" controls autoplay>
	<source src="<?php echo "$video" ?>">
	</video>
	</div>
	
	
	</div>
	</form>
</body>
</html>
