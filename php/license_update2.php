
<?php
session_start();
    if(!isset($_SESSION['x'])){
        header("location:adiminlogin.php");
    }
	else{
    
    $conn=mysqli_connect("localhost","root","","rto");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
	
    @mysqli_select_db("rto",$conn);
	
	 $u_id=$_SESSION['u_id'];
	
        
        $result=mysqli_query($conn,"SELECT image FROM admin where id='$u_id' ");
        $q3=mysqli_fetch_assoc($result);
        $image=$q3['image'];
    
    $a_id=$_SESSION['a_id'];
	
        
        $result=mysqli_query($conn,"select type, rto_office, class_of_vehicle, name, ph_no, email, gender, d_o_b, age, aadhar_no, education, place_of_birth, talluk, house_no, village, city, pincode, image, l_id from licen where l_id=$a_id" );
		$q2=mysqli_fetch_assoc($result);
        $type=$q2['type'];
        $class_of_vehicle=$q2['class_of_vehicle'];
        $name=$q2['name'];
        $ph_no=$q2['ph_no'];
        $email=$q2['email'];
        $gender=$q2['gender'];
        $d_o_b=$q2['d_o_b'];
        $age=$q2['age'];
        $aadhar_no=$q2['aadhar_no'];
        $education=$q2['education'];
        $place_of_birth=$q2['place_of_birth'];
        $talluk=$q2['talluk'];
        $house_no=$q2['house_no'];
        $village=$q2['village'];
        $city=$q2['city'];
        $pincode=$q2['pincode'];
        $image2=$q2['image'];
        $rto_office=$q2['rto_office'];
        $l_id=$q2['l_id'];
	}
	
	   if(isset($_POST['submit'])){
		   $conn=mysqli_connect("localhost","root","","rto");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
	
    @mysqli_select_db("rto",$conn);
		   
		   $subject=$_POST['subject'];
		
	$sql= $conn->query("insert into l_updat (u_id, subject, aadhar_no) values('$l_id', '$subject', '$aadhar_no')");
        if ($sql) {
		 $message = "Registered Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}else{
		 $message = " Registration failed";
        echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	
       
		
?>

<html lang="en">
<head>
	
	<title>license update 2</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/license_update2.css">
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
				<a href="adminlogout.php"><i class="fa fa-logout"></i>   logout</a>
			</li>
		</ul>
	</nav>
	<div class="area">
	<div class="photo">
	<img alt="" src="<?php echo "$image2" ?>">
	</div>
	<div class="one">
	<p><label><b>Name:</b>&nbsp &nbsp <label id="two">  <?php echo "$name" ?> </label> </label></p>
	<p><label><b>Mobile:</b>&nbsp &nbsp <label id="two"> <?php echo "$ph_no" ?></label></label></p>
	<p><label><b>Email:</b>&nbsp &nbsp <label id="two"> <?php echo "$email" ?></label></label></p>
	<p><label><b>D.O.B:</b>&nbsp &nbsp <label id="two"> <?php echo "$d_o_b" ?></label></label></p>
	<p><label><b>Age:</b>&nbsp &nbsp <label id="two"> <?php echo "$age" ?></label></label></p>
	<p><label><b>Gender:</b>&nbsp &nbsp <label id="two"> <?php echo "$gender" ?></label></label></p>
	<p><label><b>Aadhar no:</b>&nbsp &nbsp <label id="two"> <label id="space"> <?php echo "$aadhar_no" ?></label></label></label></p>
	<p><label><b>Education:</b>&nbsp &nbsp <label id="two"> <?php echo "$education" ?></label></label></p>
	<p><label><b>Address:</b>&nbsp &nbsp <label id="two"> <?php echo "$house_no" ?>,<?php echo "$village" ?>,<?php echo "$city" ?>,<?php echo "$talluk" ?>,<?php echo "$pincode" ?></label></label></p>
	<p><label><b>License type:</b>&nbsp &nbsp <label id="two"> <?php echo "$type" ?></label></label></p>
	<p><label><b>Class:</b>&nbsp &nbsp <label id="two"> <?php echo "$class_of_vehicle" ?></label></label></p>
	<p><label><b>RTO Location:</b>&nbsp &nbsp <label id="two"> <?php echo "$rto_office" ?></label></label></p>	
	</div>
	
	
	<div class="cot">
	
	<label><textarea name="subject" required="" class="textarea-field"></textarea></label> <input type="submit" name="submit" value="submit" />
	
	</div>
	</div>
	</form>
</body>
</html>
