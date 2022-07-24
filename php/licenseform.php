      


<?php
session_start();
 if(!isset($_SESSION['x']))
        header("location:userlogin.php");
	
	
	
	 $con=mysqli_connect('localhost','root','','rto');
	 $u_id=$_SESSION['u_id'];
	 
	 $result=mysqli_query($con,"SELECT aadhar_no FROM licen where aadhar_no='$u_id' ");
        $q2=mysqli_fetch_assoc($result);
        $a_no=$q2['aadhar_no'];
		
		if($u_id == $a_no)
		{
			 
		header("location:alert.php");
		}
		else{
if(isset($_POST['submit'])){
    $con=mysqli_connect('localhost','root','','rto');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
	
	$target_path = "license_applicant/";
		$target_path=$target_path.basename($_FILES['image']['name']);
		
		
		
	 $type=$_POST['type'];
        $rto_office=$_POST['rto_office'];
        $class_of_vehicle=$_POST['class_of_vehicle'];
        $name=$_POST['name'];
        $ph_no=$_POST['ph_no'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $d_o_b=$_POST['d_o_b'];
        $age=$_POST['age'];
		
       
        
        $education=$_POST['education'];
        $place_of_birth=$_POST['place_of_birth'];
        $talluk=$_POST['talluk'];
        $house_no=$_POST['house_no'];
        $village=$_POST['village'];
        $city=$_POST['city'];
        $pincode=$_POST['pincode'];
		
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
			
	$sql= $con->query ("INSERT INTO licen (type, rto_office, class_of_vehicle, name, ph_no, email, gender, d_o_b, age, aadhar_no, education, place_of_birth, talluk, house_no, village, city, pincode, image) VALUES ('$type', '$rto_office', '$class_of_vehicle', '$name', '$ph_no', '$email', '$gender', '$d_o_b', '$age', '$u_id', '$education', '$place_of_birth', '$talluk', '$house_no', '$village', '$city', '$pincode', '$target_path')");
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

		}}
		
		
?>


<html>
<title>license form</title>
<head>

		<link rel="stylesheet" type="text/css" href="../css/licenseform.css">
</head>
<body>
<div class="form-style-2">
<div class="form-style-2-heading">Provide your information for driving license/learners license</div>
<form action="#" method="post" enctype="multipart/form-data">

<div class="field1">
<h2>Service Required</h2>
<label><span>License Type</span><select name="type" class="select-field" required="">
<option value="">select license type..</option>
<option value="Driving license">Driving license</option>
</select></label>

<label><span>RTO Location</span><select name="rto_office" class="select-field" required="">
<option value="">select rto location..</option>
<option value="arani">arani</option>
<option value="chennai central">chennai central</option>
<option value="chennai east">chennai east</option>
<option value="chennai north-west">chennai north-west</option>
<option value="dharmapuri">dharmapuri</option>
<option value="gingee">gingee</option>
<option value="namakkal north">namakkal north</option>
<option value="namakkal south">namakkal south</option>
<option value="theni">theni</option>
</select></label>

<label><span>Class Of Vehicle</span><select name="class_of_vehicle" class="select-field" required="">
<option value="">select vehicle type..</option>
<option value="2 wheeler without gear">2 wheeler without gear</option>
<option value="2 wheeler with gear">2 wheeler with gear</option>
<option value="2 wheeler with gear and 4 wheeler">2 wheeler with gear and 4 wheeler</option>
<option value="">4 wheeler</option>
</select></label><br>

<h2>Applicant details</h2>

<label><span>Name <span class="required">*</span></span><input type="text" class="input-field" required="" name="name" value="" /></label>
<label><span>Mobile no <span class="required">*</span></span><input type="number" class="input-field" required="" name="ph_no" value="" /></label>
<label><span>Email <span class="required">*</span></span><input type="email" class="input-field" required="" name="email" value="" /></label>

<label><span>Gender</span><select name="gender" class="select-field" required="">
<option value="">select gender..</option>
<option value="male">male</option>
<option value="female">female</option>
<option value="other">other</option>
</select></label>

<label><span>Date of birth <span class="required">*</span></span><input type="date" class="input-field" required="" name="d_o_b" value="" /></label>
<label><span>Age <span class="required">*</span></span><input type="number" class="input-field" required="" name="age" value="" /></label>
</div>

<div class="field2">
<label><span>Aadhar no <span class="required">*</span></span><input type="number" class="input-field" required="" disabled value=<?php echo "$u_id"; ?> name="aadhar_no"  /></label>

<label><span>Education</span><select name="education" class="select-field" required="">
<option value="">select education..</option>
<option value="12th">12th</option>
<option value="bachelor's">bachelor's</option>
<option value="master's">master's</option>
<option value="doctoral">doctoral</option>
</select></label>
<label><span>Appicant image<span class="required">*</span></span><input type="file" class="input-field" required="" name="image" value="" /></label><br>
<h2>Address detail</h2>

<label><span>place of birth<span class="required">*</span></span><input type="text" class="input-field" required="" name="place_of_birth" value="" /></label>
<label><span>talluk <span class="required">*</span></span><input type="text" class="input-field" required="" name="talluk" value="" /></label>
<label><span>house no <span class="required">*</span></span><input type="text" class="input-field" required="" name="house_no" value="" /></label>
<label><span> village<span class="required">*</span></span><input type="text" class="input-field" required="" name="village" value="" /></label>
<label><span>city <span class="required">*</span></span><input type="text" class="input-field" required="" name="city" value="" /></label>
<label><span>pincode <span class="required">*</span></span><input type="number" class="input-field" required="" name="pincode" value="" /></label>

</div><br><br>
<div class="para">
<p><label><b>Note<span class="required">**</span></b> &nbsp The provided information should be truth and verified by the government.</label></p>
<label><span> </span><input type="submit" name="submit" value="upload" /><input type="reset" value="clear" /></</label>
</div>
</form>
</div>

</body>
</html>