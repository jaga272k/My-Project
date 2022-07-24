<?php
if(isset($_POST['submit'])){
    $con=mysqli_connect('localhost','root','','rto');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
	
	$target_path1 = "demo/";
		$target_path1=$target_path1.basename($_FILES['image1']['name']);
		
		$target_path2 = "demo/";
		$target_path2=$target_path2.basename($_FILES['image2']['name']);
		
		$target_path3 = "demo/";
		$target_path3=$target_path3.basename($_FILES['image3']['name']);
		
		$target_path4 = "demo/";
		$target_path4=$target_path4.basename($_FILES['image4']['name']);
		
		
		$target_path5 = "demo/";
		$target_path5=$target_path5.basename($_FILES['video1']['name']);
		
		$target_path6 = "demo/";
		$target_path6=$target_path6.basename($_FILES['video2']['name']);
		
		

		
		if((move_uploaded_file($_FILES['image1']['tmp_name'], $target_path1)) && (move_uploaded_file($_FILES['image2']['tmp_name'], $target_path2)) && (move_uploaded_file($_FILES['image3']['tmp_name'], $target_path3)) && (move_uploaded_file($_FILES['image4']['tmp_name'], $target_path4)) && (move_uploaded_file($_FILES['video1']['tmp_name'], $target_path5)) && (move_uploaded_file($_FILES['video2']['tmp_name'], $target_path6)))
			{
		
		
       $sql= $con->query("insert into demo (image1, image2, image3, image4, video1, video2) values( '$target_path1', '$target_path2', '$target_path3', '$target_path4', '$target_path5', '$target_path6')");
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
<body>
<form action="#" method="post" enctype="multipart/form-data" >
<div>
<label><span>image1 <span class="required">*</span></span><input type="file" class="input-field" required="" name="image1" value="" /></label><br><br>
<label><span>image2 <span class="required">*</span></span><input type="file" class="input-field" required="" name="image2" value="" /></label><br><br>
<label><span>image3 <span class="required">*</span></span><input type="file" class="input-field" required="" name="image3" value="" /></label><br><br>
<label><span>image4 <span class="required">*</span></span><input type="file" class="input-field" required="" name="image4" value="" /></label><br><br>
<label><span>video1 <span class="required">*</span></span><input type="file" class="input-field" required="" name="video1" value="" /></label><br><br>
<label><span>video2 <span class="required">*</span></span><input type="file" class="input-field" required="" name="video2" value="" /></label><br><br>
</div>
<input type="submit" name="submit" value="upload" />
</form>
</body>
</html>