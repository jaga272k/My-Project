

<?php

if(isset($_POST['submit'])){
    $con=mysqli_connect('localhost','root','','rto');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
		$target_path = "admin_images/";
		$target_path=$target_path.basename($_FILES['image1']['name']);
		
		$target_path2= "admin_images/";
		$target_path2=$target_path2.basename($_FILES['video']['name']);
	
		$name=$_POST['id'];
        $ph_no=$_POST['password'];
     
	
	if((move_uploaded_file($_FILES['image1']['tmp_name'], $target_path)) &&(move_uploaded_file($_FILES['video']['tmp_name'], $target_path2))) {
		
	$sql= $con->query("INSERT INTO admin(id, password, image, video) VALUES ('$name', '$ph_no', '$target_path', '$target_path2')");
	if ($sql) {
		 $message = "admin Registered Successfully";
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












<html>
<body>

 <form action="#" method="post" enctype="multipart/form-data">
 <div class="input-box">
        <input type="email" placeholder="Enter id" name="id" required>
      </div><br>
      <div class="input-box">
        <input type="text" placeholder="Enter password" name="password" required>
      </div><br>
      <div class="input-box">
        <input type="file" placeholder="Enter logo" name="image1" required>
      </div><br>
	  <div class="input-box">
        <input type="file" placeholder="Enter video" name="video" required>
		</div><br>
	  
	  <div class="input-box button">
        <input type="Submit" name="submit" value="upload">
      </div>
	  </form>
	  </body>
	  </html>