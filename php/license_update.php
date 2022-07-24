













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
		
		 $result2=mysqli_query($conn,"select type, rto_office, class_of_vehicle, name, ph_no, email, gender, d_o_b, age, aadhar_no, education, place_of_birth, talluk, house_no, village, city, pincode, image, l_id from licen" );  


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
	<link rel="stylesheet" type="text/css" href="../css/license_update.css">
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
	  <th class="col-1 col">ID</th>
	  <th class="col-19 col">Applicant image</th>
        <th class="col-2 col" >Type of license</th>
        <th class="col-3 col">RTO location</th>
        <th class="col-4 col">class of vehicle</th>
        <th class="col-5 col">applicant name</th>
        <th class="col-6 col">Phone no</th>
        <th class="col-7 col">Email</th>
        <th class="col-8 col">Gender</th>
        <th class="col-9 col">date of birth</th>
        <th class="col-10 col">Age</th>
        <th class="col-11 col">Aadhar no</th>
        <th class="col-12 col">Education</th>
        <th class="col-13 col">Birth place</th>
        <th class="col-14 col">Talluk</th>
        <th class="col-15 col">House no</th>
        <th class="col-16 col">Village</th>
        <th class="col-17 col">City</th>
        <th class="col-18 col">Pincode</th>
       
        
        
      </tr>
    </thead>

<?php
      while($rows=mysqli_fetch_assoc($result2)){
    ?> 

    <tbody style="background-color: white; color: black;">
      <tr class="table-row">
	  <td class="col-1 col"><?php echo $rows['l_id']; ?></td>
	  <td class="col-19 col"> <img src="<?php echo $rows['image']; ?>" width="100px" height="100px"></td> 
        <td class="col-2 col"><?php echo $rows['type']; ?></td>
        <td class="col-3 col"><?php echo $rows['rto_office']; ?></td>     
        <td class="col-4 col"><?php echo $rows['class_of_vehicle']; ?></td>
		<td class="col-5 col"><?php echo $rows['name']; ?></td> 		
        <td class="col-6 col"><?php echo $rows['ph_no']; ?></td>          
        <td class="col-7 col"><?php echo $rows['email']; ?></td>          
        <td class="col-8 col"><?php echo $rows['gender']; ?></td>          
        <td class="col-9 col"><?php echo $rows['d_o_b']; ?></td>          
        <td class="col-10 col"><?php echo $rows['age']; ?></td>          
        <td class="col-11 col"><?php echo $rows['aadhar_no']; ?></td>          
        <td class="col-12 col"><?php echo $rows['education']; ?></td>          
        <td class="col-13 col"><?php echo $rows['place_of_birth']; ?></td>          
        <td class="col-14 col"><?php echo $rows['talluk']; ?></td>          
        <td class="col-15 col"><?php echo $rows['house_no']; ?></td>          
        <td class="col-16 col"><?php echo $rows['village']; ?></td>          
        <td class="col-17 col"><?php echo $rows['city']; ?></td>          
        <td class="col-18 col"><?php echo $rows['pincode']; ?></td>          
         
      </tr>
    </tbody>
    
    <?php
    } 
    ?>
  
</table>
 </div>
 <div class="open">
 <div class="lable">
 <label><span>Update for the Applicant: </span><input type="number" class="input-field" required="" name="a_id" value="" /></label>
 <input type="submit" name="open" value="Open" />
 </div>

	</div>
	</div>
	
	</form>
</body>
</html>
