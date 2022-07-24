<?php
session_start();
 if(!isset($_SESSION['x']))
        header("location:userlogin.php");
	
	
	 $u_id=$_SESSION['u_id'];
	 
	 
	 
if(isset($_POST['submit'])){
    $con=mysqli_connect('localhost','root','','rto');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
	
	$target_path1 = "vehicle_applicant/";
		$target_path1=$target_path1.basename($_FILES['image1']['name']);
		
		$target_path2 = "vehicle_applicant/";
		$target_path2=$target_path2.basename($_FILES['image2']['name']);
		
		$target_path3 = "vehicle_applicant/";
		$target_path3=$target_path3.basename($_FILES['image3']['name']);
		
		$target_path4 = "vehicle_applicant/";
		$target_path4=$target_path4.basename($_FILES['image4']['name']);
		
		
		$target_path5 = "vehicle_applicant/";
		$target_path5=$target_path5.basename($_FILES['image5']['name']);
		
		$target_path6 = "vehicle_applicant/";
		$target_path6=$target_path6.basename($_FILES['image6']['name']);
		
		
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $age=$_POST['age'];
        $address=$_POST['address'];
        $date=$_POST['date'];
        $pan_no=$_POST['pan_no'];
        $birth_place=$_POST['birth_place'];
        $dealer_name=$_POST['dealer_name'];
        $body_type=$_POST['body_type'];
        $vehicle_type=$_POST['vehicle_type'];
        $man_date=$_POST['man_date'];
        $cylinder=$_POST['cylinder'];
        $horse_power=$_POST['horse_power'];
        $chassis_no=$_POST['chassis_no'];
        $fuel_type=$_POST['fuel_type'];
        $seating=$_POST['seating'];
        $weight=$_POST['weight'];
        $reg_no=$_POST['reg_no'];
       
		
		if((move_uploaded_file($_FILES['image1']['tmp_name'], $target_path1)) && (move_uploaded_file($_FILES['image2']['tmp_name'], $target_path2)) && (move_uploaded_file($_FILES['image3']['tmp_name'], $target_path3)) && (move_uploaded_file($_FILES['image4']['tmp_name'], $target_path4)) && (move_uploaded_file($_FILES['image5']['tmp_name'], $target_path5)) && (move_uploaded_file($_FILES['image6']['tmp_name'], $target_path6))) {
		
		
       $sql= $con->query("insert into vehicl (name, mobile, age, address, date, pan_no, birth_place, dealer_name, body_type, vehicle_type, man_date, cylinder, horse_power, chassis_no, fuel_type, seating, weight, reg_no, owner_image, pan_proof, invoice, insuranse, register, vehicle_image , aadhar_no) values('$name', '$mobile', '$age', '$address', '$date', '$pan_no', '$birth_place', '$dealer_name', '$body_type', '$vehicle_type', '$man_date', '$cylinder', '$horse_power', '$chassis_no', '$fuel_type', '$seating', '$weight', '$reg_no', '$target_path1', '$target_path2', '$target_path3', '$target_path4', '$target_path5', '$target_path6', '$u_id')");
        if ($sql) {
		 $message = "Registered Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}else{
		 $message = " Registration failed";
        echo "<script type='text/javascript'>alert('$message');</script>";
		}}
	else{
		$message = " upload error";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}

}
		
		
?>


<html>
<title>vehicle form</title>
<head>

		<link rel="stylesheet" type="text/css" href="../css/vehicleform.css">
</head>
<body>
<div class="form-style-2">
<div class="form-style-2-heading">Provide your information for vehicle registration</div>
<form action="#" method="post" enctype="multipart/form-data">

<div class="field1">
<h2>Owner's detail</h2>

<label><span>Name <span class="required">*</span></span><input type="text" class="input-field" required="" name="name" value="" /></label>
<label><span>Mobile no <span class="required">*</span></span><input type="tel" class="input-field" required="" name="mobile" value="" /></label>
<label><span>Age <span class="required">*</span></span><input type="number" class="input-field" required="" name="age" value="" /></label>

<label><span>Address <span class="required">*</span></span><textarea name="address" required="" class="textarea-field"></textarea></label>

<label><span>Date <span class="required">*</span></span><input type="date" class="input-field" required="" name="date" value="" /></label>
<label><span>Pan number <span class="required">*</span></span><input type="text" class="input-field" required="" name="pan_no" value="" /></label>
<label><span>birth place <span class="required">*</span></span><input type="text" class="input-field" required="" name="birth_place" value="" /></label>
<label><span>Aadhar no <span class="required">*</span></span><input type="text" class="input-field" required="" disabled value=<?php echo "$u_id"; ?> name="aadhar_no" value="" /></label>
<label><span>Owner's photo <span class="required">*</span></span><input type="file" class="input-field" required="" name="image1" value="" /></label>
<label><span>pancard photo <span class="required">*</span></span><input type="file" class="input-field" required="" name="image2" value="" /></label>

<br>

<h2>Vehicle detail</h2>

<label><span>Dealer's name<span class="required">*</span></span><input type="text" class="input-field" required="" name="dealer_name" value="" /></label>

<label><span>Body type</span><select name="body_type" class="select-field" required="">
<option value="">select body type..</option>
<option value="open body">open body</option>
<option value="closed">closed</option>
<option value="other">other</option>
</select></label>

<label><span>Vehicle type</span><select name="vehicle_type" class="select-field" required="">
<option value="">select vehicle type..</option>
<option value="2 wheeler">2 wheeler</option>
<option value="3 wheeler">3 wheeler</option>
<option value="4 wheeler">4 wheeler</option>
<option value="6 wheeler">6 wheeler</option>
<option value="10 wheeler">10 wheeler</option>
<option value="trailer">trailer</option>
</select></label>
</div>
<div class="field2">

<label><span>Manufacturing date<span class="required">*</span></span><input type="date" class="input-field" required="" name="man_date" value="" /></label>

<label><span>No of cylinders</span><select name="cylinder" class="select-field" required="">
<option value="">select no of cylinder..</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="6">6</option>
<option value="8">8</option>
</select></label>

<label><span>horse power <span class="required">*</span></span><input type="number" class="input-field" required="" name="horse_power" value="" /></label>
<label><span> chassis number<span class="required">*</span></span><input type="text" class="input-field" required="" name="chassis_no" value="" /></label>

<label><span>fuel type</span><select name="fuel_type" class="select-field" required="">
<option value="">select fuel type..</option>
<option value="petrol">petrol</option>
<option value="diesel">diesel</option>
</select></label>

<label><span>seating capacity <span class="required">*</span></span><input type="number" class="input-field" required="" name="seating" value="" /></label>
<label><span>vehicle weight <span class="required">*</span></span><input type="number" class="input-field" required="" placeholder="In kg" name="weight" value="" /></label>
<label><span>temporary register no <span class="required">*</span></span><input type="text" class="input-field" required="" placeholder="" name="reg_no" value="" /></label>
<label><span>purchase invoice of vehicle <span class="required">*</span></span><input type="file" class="input-field" required="" placeholder="" name="image3" value="" /></label>
<label><span>vehicle insurance <span class="required">*</span></span><input type="file" class="input-field" required="" placeholder="" name="image4" value="" /></label>
<label><span>temporary registration by dealer <span class="required">*</span></span><input type="file" class="input-field" required="" placeholder="" name="image5" value="" /></label>
<label><span>vehicle image<span class="required">*</span></span><input type="file" class="input-field" required="" placeholder="" name="image6" value="" /></label>
</div><br><br>
<div class="para">
<p><label><b>Note<span class="required">**</span></b> &nbsp The provided information should be truth and verified by the government.</label></p>
<label><span> </span><input type="submit" name="submit" value="upload" /><input type="reset" value="clear" /></</label>
</div>
</form>
</div>

</body>
</html>