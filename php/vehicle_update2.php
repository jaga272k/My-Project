
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
	
        
        $result=mysqli_query($conn,"select * from vehicl where v_id=$a_id" );
		$q2=mysqli_fetch_assoc($result);
        $name=$q2['name'];
        $mobile=$q2['mobile'];
        $age=$q2['age'];
        $address=$q2['address'];
        $date=$q2['date'];
        $pan_no=$q2['pan_no'];
        $birth_place=$q2['birth_place'];
        $dealer_name=$q2['dealer_name'];
        $body_type=$q2['body_type'];
        $vehicle_type=$q2['vehicle_type'];
        $man_date=$q2['man_date'];
        $cylinder=$q2['cylinder'];
        $horse_power=$q2['horse_power'];
        $chassis_no=$q2['chassis_no'];
        $fuel_type=$q2['fuel_type'];
        $seating=$q2['seating'];
        $weight=$q2['weight'];
        $reg_no=$q2['reg_no'];
        $v_id=$q2['v_id'];
        $owner_image=$q2['owner_image'];
        $pan_proof=$q2['pan_proof'];
        $invoice=$q2['invoice'];
        $insuranse=$q2['insuranse'];
        $register=$q2['register'];
        $vehicle_image=$q2['vehicle_image'];
        $aadhar_no=$q2['aadhar_no'];
        
	}
	
	   if(isset($_POST['submit'])){
		   $conn=mysqli_connect("localhost","root","","rto");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
	
    @mysqli_select_db("rto",$conn);
		   
		   $subject=$_POST['subject'];
		
	$sql= $conn->query("insert into v_updat (u_id, subject, reg_no, aadhar_no) values('$v_id', '$subject', '$reg_no')");
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
	
	<title>adminpage</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/vehicle_update2.css">
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
	<img alt="" src="<?php echo "$owner_image" ?>">
	</div>
	<div class="one">
	<p><label><b>Name:</b>&nbsp &nbsp <label id="two">  <?php echo "$name" ?> </label> </label></p>
	<p><label><b>Mobile:</b>&nbsp &nbsp <label id="two"> <?php echo "$mobile" ?></label></label></p>
	<p><label><b>Age</b>&nbsp &nbsp <label id="two"> <?php echo "$age" ?></label></label></p>
	<p><label><b>Address</b>&nbsp &nbsp <label id="two"> <?php echo "$address" ?></label></label></p>
	<p><label><b>data</b>&nbsp &nbsp <label id="two"> <?php echo "$date" ?></label></label></p>
	<p><label><b>pan no</b>&nbsp &nbsp <label id="two"> <?php echo "$pan_no" ?></label></label></p>
	<p><label><b>dealer name</b>&nbsp &nbsp <label id="two"> <?php echo "$dealer_name" ?></label></label></p>
	<p><label><b>body type</b>&nbsp &nbsp <label id="two"> <?php echo "$body_type" ?></label></label></p>
	<p><label><b>vehicle type</b>&nbsp &nbsp <label id="two"> <?php echo "$vehicle_type" ?></label></label></p>
	<p><label><b>man date:</b>&nbsp &nbsp <label id="two"> <?php echo "$man_date" ?></label></label></p>
	<p><label><b>cylinder:</b>&nbsp &nbsp <label id="two"> <?php echo "$cylinder" ?></label></label></p>
	<p><label><b>horse power:</b>&nbsp &nbsp <label id="two"> <?php echo "$horse_power" ?></label></label></p>	
	<p><label><b>chassis no:</b>&nbsp &nbsp <label id="two"><label id="space"> <?php echo "$chassis_no" ?></label></label></label></p>	
	<p><label><b>fuel type:</b>&nbsp &nbsp <label id="two"> <?php echo "$fuel_type" ?></label></label></p>	
	<p><label><b>seating:</b>&nbsp &nbsp <label id="two"> <?php echo "$seating" ?></label></label></p>	
	<p><label><b>weight:</b>&nbsp &nbsp <label id="two"> <?php echo "$weight" ?></label></label></p>	
	</div>
	<br>
	
	<div class="image1">
	<label>Pan proof:</label>
	<img alt="" src="<?php echo "$pan_proof" ?>">
	</div>
	
	<div class="image2">
	<label>Invoice:</label>
	<img alt="" src="<?php echo "$invoice" ?>">
	</div>
	<br><br>
	<div class="image3">
	<label>Insurance:</label>
	<img alt="" src="<?php echo "$insuranse" ?>">
	</div>
	
	<div class="image4">
	<label>Registration:</label>
	<img alt="" src="<?php echo "$register" ?>">
	</div>
	<br><br>
	<div class="image5">
	<label id="content">vehicle image:</label>
	<img alt="" src="<?php echo "$vehicle_image" ?>">
	</div>
	
	
	<div class="cot">
	
	<label><textarea name="subject" required="" class="textarea-field"></textarea></label> <input type="submit" name="submit" value="submit" />
	
	</div>
	</div>
	</form>
</body>
</html>
