













<html lang="en">
<head>

<?php
session_start();
    if(!isset($_SESSION['x'])){
        header("location:userlogin.php");
    }
	else{
    
    $conn=mysqli_connect("localhost","root","","rto");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
	
    @mysqli_select_db("rto",$conn);
    
    $u_id=$_SESSION['u_id'];
	  
		 $result5=mysqli_query($conn,"SELECT image FROM user where aadhar_no='$u_id' ");
        $q2=mysqli_fetch_assoc($result5);
        $image=$q2['image'];
		
		
	}
	  if(isset($_POST['search'])){
		
		 $a_id=$_POST['search'];
		 $_SESSION['a_id']=$a_id;
		  header("location:vehicle_stat2.php");
	}
	
		
?>


	
	<title>userpage</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/vehicle_stat.css">
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
				<a href="license_stat.php"><i class="fa fa-address-card-o"></i>   license status</a>
			</li>
			<li>
				<a href="vehicle_stat.php"><i class="fa fa-truck"></i>   vehicle status</a>
			</li>
			<li>
				<a href="service.php"><i class="fa fa-cogs"></i>   services</a>
			</li>
			<li>
				<a href="userlogout.php"><i class="fa fa-logout"></i>   logout</a>
			</li>
		</ul>
	</nav>
	
	<div class="search">
	
<label><input type="text" class="input-field" required="" name="search" value="" /></label> <input type="submit" name="submit" value="upload" />
	</div>
	<div class="area">
	<div style="padding:px;">
   <table class="table">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr class="table-header">
	  <th class="col-1 col">ID</th>
        <th class="col-2 col" >date</th>
        <th class="col-3 col">subject</th>
     
      </tr>
    </thead>


  
</table>
 </div>
 </div>
	</form>
</body>
</html>
