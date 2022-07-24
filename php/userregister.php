<?php

if(isset($_POST['submit'])){
    $con=mysqli_connect('localhost','root','','rto');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
		$target_path = "user_images/";
		$target_path=$target_path.basename($_FILES['image']['name']);
		
	
		$name=$_POST['name'];
        $ph_no=$_POST['ph_no'];
        $email=$_POST['email'];
        $aadhar_no=$_POST['aadhar_no'];
        $password=$_POST['password'];
	
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
		
	$sql= $con->query("INSERT INTO user(name, email, ph_no, aadhar_no, password, image) VALUES ('$name', '$email', '$ph_no', '$aadhar_no', '$password', '$target_path')");
	if ($sql) {
		 $message = "User Registered Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}else{
		 $message = " Registration failed";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}
}
else{
	$message = "error in moving image";
        echo "<script type='text/javascript'>alert('$message');</script>";
	
}
}
		
		
		
		
?>
		
		
		
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" type="text/css" href="../css/userregister.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="#" method="post" enctype="multipart/form-data">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="name" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your mobile number" name="ph_no" required>
      </div>
	  <div class="input-box">
        <input type="password" placeholder="create password" name="password" required>
      </div>
	  <div class="input-box">
        <input type="text" placeholder="Enter your Aadhar number" name="aadhar_no" required>
      </div>
      <div class="input-box">
        <input type="file" placeholder="upload your cover image" name="image" required>
      </div>
      
      <div class="input-box button">
        <input type="Submit" name="submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="userlogin.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
