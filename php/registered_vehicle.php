<?php
session_start();
    if(!isset($_SESSION['x'])){
        header("location:userlogin.php");
    }else{
    
    $conn=mysqli_connect("localhost","root","","rto");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
	
    @mysqli_select_db("rto",$conn);
    
    $u_id=$_SESSION['u_id'];
	
		
		
		
		$result=mysqli_query($conn,"select * from vehicl where aadhar_no = '$u_id'" );

}
  
	
	
	?>

<html lang="en">
<head>
<title>TamilNadu RTO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../css/license_update.css">
	<link rel="stylesheet" type="text/css" href="../css/lr.css">
</head>
<div class="area">
	<div style="padding:px;">
   <table class="table">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr class="table-header">
	  <th class="col-1 col">ID</th>
	  <th class="col-2 col">Name</th>
        <th class="col-3 col" >Age</th>
        <th class="col-4 col" >mobile</th>
        <th class="col-5 col">address</th>
        <th class="col-6 col">date</th>
        <th class="col-7 col">pancard no</th>
        <th class="col-8 col">birth place</th>
        <th class="col-9 col">dealer name</th>
        <th class="col-10 col">body type</th>
        <th class="col-11 col">vehicle type</th>
        <th class="col-12 col">man date</th>
        <th class="col-13 col">cylinders</th>
        <th class="col-14 col">horse power</th>
        <th class="col-15 col">chassis no</th>
        <th class="col-16 col">fuel type</th>
        <th class="col-17 col">seating</th>
        <th class="col-18 col">weight</th>
        <th class="col-19 col">register no</th>
        <th class="col-20 col">vehicle owner</th>
        <th class="col-21 col">pancard</th>
        <th class="col-22 col">invoice</th>
        <th class="col-23 col">insuranse</th>
        <th class="col-24 col">temporary register</th>
        <th class="col-25 col">vehicle image</th>
       
        
        
      </tr>
    </thead>

<?php
      while($rows=mysqli_fetch_assoc($result)){
    ?> 

    <tbody style="background-color: white; color: black;">
      <tr class="table-row">
	  <td class="col-1 col"><?php echo $rows['v_id']; ?></td>
	  <td class="col-2 col"><?php echo $rows['name']; ?></td> 
        <td class="col-3 col"><?php echo $rows['age']; ?></td>
        <td class="col-4 col"><?php echo $rows['mobile']; ?></td>     
        <td class="col-5 col"><?php echo $rows['address']; ?></td>
		<td class="col-6 col"><?php echo $rows['date']; ?></td> 		
        <td class="col-7 col"><?php echo $rows['pan_no']; ?></td>          
        <td class="col-8 col"><?php echo $rows['birth_place']; ?></td>          
        <td class="col-9 col"><?php echo $rows['dealer_name']; ?></td>          
        <td class="col-10 col"><?php echo $rows['body_type']; ?></td>          
        <td class="col-11 col"><?php echo $rows['vehicle_type']; ?></td>          
        <td class="col-12 col"><?php echo $rows['man_date']; ?></td>          
        <td class="col-13 col"><?php echo $rows['cylinder']; ?></td>          
        <td class="col-14 col"><?php echo $rows['horse_power']; ?></td>          
        <td class="col-15 col"><?php echo $rows['chassis_no']; ?></td>          
        <td class="col-16 col"><?php echo $rows['fuel_type']; ?></td>          
        <td class="col-17 col"><?php echo $rows['seating']; ?></td>          
        <td class="col-18 col"><?php echo $rows['weight']; ?></td>          
        <td class="col-19 col"><?php echo $rows['reg_no']; ?></td>          
        <td class="col-20 col"><img src="<?php echo $rows['owner_image']; ?>" width="100px" height="100px"></td>          
        <td class="col-21 col"><img src="<?php echo $rows['pan_proof']; ?>" width="100px" height="100px"></td>          
        <td class="col-22 col"><img src="<?php echo $rows['invoice']; ?>" width="100px" height="100px"></td>          
        <td class="col-23 col"><img src="<?php echo $rows['insuranse']; ?>" width="100px" height="100px"></td>          
        <td class="col-24 col"><img src="<?php echo $rows['register']; ?>" width="100px" height="100px"></td>          
        <td class="col-25 col"><img src="<?php echo $rows['vehicle_image']; ?>" width="100px" height="100px"></td>          
         
		 
		 
		 
		 
		 
      </tr>
    </tbody>
    
    <?php
    } 
    ?>
  
</table>
 </div></div>



	

	
	
</body>
</html>