

<?php
session_start();
    if(!isset($_SESSION['x'])){
        header("location:adminlogin.php");
    }
	else{
    
    $conn=mysqli_connect("localhost","root","","rto");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
	
    @mysqli_select_db("rto",$conn);
    
    $u_id=$_SESSION['u_id'];
	
        
        $result=mysqli_query($conn,"SELECT id, password FROM admin where id='$u_id' ");
        $q2=mysqli_fetch_assoc($result);
        $id=$q2['id'];
        $password=$q2['password'];
   
		
		 $result2=mysqli_query($conn,"SELECT image FROM admin where id='$u_id' ");
        $q2=mysqli_fetch_assoc($result2);
        $image=$q2['image'];
	}
	
	if(isset($_POST['reset'])){
		
		 $o_id=$_POST['id'];
		 $old_pass=$_POST['pass1'];
		 $new_pass=$_POST['pass2'];
		 if( ($id == $o_id) && ($old_pass == $password)){
			 $result3=mysqli_query($conn,"UPDATE admin SET password = '$new_pass'  WHERE id = '$id' ");
			 if($result3){
				 $message = "password changed";
        echo "<script type='text/javascript'>alert('$message');</script>";
			 }
			 else{
				  $message = "password not changed";
        echo "<script type='text/javascript'>alert('$message');</script>";
			 }
			 
		
	}
	else{
		$message = "you have entered wrong id or password";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}
	}
		
	
		
?>

<html lang="en">
<head>
	
	<title>adminpage</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/resetpass.css">
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
	<div class="search">
		
	<label><input type="text" class="input-field" required="" placeholder="enter id" name="id" value="" /></label>
	
	<label><input type="text" class="input-field" required="" placeholder="enter old password" name="pass1" value="" /></label>
	
	<label><input type="password" class="input-field" required="" placeholder="enter new password" name="pass2" value="" /></label>
	
	<label> <input type="submit" name="reset" value="reset" </label>
	
	</div>
	</form>
</body>
</html>
