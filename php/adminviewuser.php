













<html lang="en">
<head>

<?php
session_start();
    if(!isset($_SESSION['x'])){
        header("location:adminlogin.php");
    }else{
    
    $conn=mysqli_connect("localhost","root","","rto");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
	
    @mysqli_select_db("rto",$conn);
    
    $u_id=$_SESSION['u_id'];
	
		
		 $result1=mysqli_query($conn,"SELECT image FROM admin where id='$u_id' ");
        $q2=mysqli_fetch_assoc($result1);
        $image=$q2['image'];
		
		 $result2=mysqli_query($conn,"select * from user" );  


}
      if(isset($_POST['open'])){
		
		 $a_id=$_POST['a_id'];
		  $_SESSION['a_id']=$a_id;
		  header("location:license_update2.php");
	}
	
	
	
	?>




	
	<title>license update 1</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/adminviewuser.css">
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
	<div style="padding:px;">
   <table class="table">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr class="table-header">
	  <th class="col-1 col">Name</th>
	  <th class="col-19 col">Image</th>
        <th class="col-2 col" >Mobile</th>
        <th class="col-3 col">Aadhar no</th>
        <th class="col-4 col">Email</th>
       
     
       
        
        
      </tr>
    </thead>

<?php
      while($rows=mysqli_fetch_assoc($result2)){
    ?> 

    <tbody style="background-color: white; color: black;">
      <tr class="table-row">
	  <td class="col-1 col"><?php echo $rows['name']; ?></td>
	  <td class="col-19 col"> <img src="<?php echo $rows['image']; ?>" width="100px" height="100px"></td> 
        <td class="col-2 col"><?php echo $rows['ph_no']; ?></td>
        <td class="col-3 col"><?php echo $rows['aadhar_no']; ?></td>     
        <td class="col-4 col"><?php echo $rows['email']; ?></td>         
         
      </tr>
    </tbody>
    
    <?php
    } 
    ?>
  
</table>
 </div>
 
	</div>
	
	</form>
</body>
</html>
