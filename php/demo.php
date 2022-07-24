

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
    
   
	
        
        $result=mysqli_query($conn,"SELECT * FROM demo ");
        $q2=mysqli_fetch_assoc($result);
        $image1=$q2['image1'];
        $image2=$q2['image2'];
        $image3=$q2['image3'];
        $image4=$q2['image4'];
        $video1=$q2['video1'];
        $video2=$q2['video2'];
        
  
	}
	
	
?>

<html lang="en">
<head>
	
	<title>adminpage</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/demo.css">
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data">

<div class="area">
	<div class="image1">
	
	<h1>To Register for License: </h1>
	<p> Step 1: choose Apply for learner license / Apply for Driving license.</p>
	<p> Step 2: Fill the service Required for the license and location purpose. and Fill the Applicant detais for Applicant details</p>
	<p> Step 3: Fill the Address details. and click submit</p>
	
	<img alt="" src="<?php echo "$image1" ?>" width="800px" height="500px">
	</div>
	
	<div class="image2">
	
	<h4 id="left">After the verification process </h4> 
	<p id="left">The RTO management update the process of application in user profile page.</p>
	<p id="left">Step 4 : To view the update status, choose License status in user profile.</p>
	<p id="left">Step 5 : If the RTO management updated the status it display here.</p>
	<h4 id="left">After online verification completed, the management give appointment for final verification.</h4>  
	
	<img alt="" src="<?php echo "$image2" ?>"  width="800px" height="500px">
	</div>
	
	<div class="image3">
	
	<h1>To Register for Vehicle: </h1>
	<p> Step 1: choose Apply for vehicle registration.</p>
	<p> Step 2: Fill the Owner details and Fill vehicle detais for registration purpose</p>
	<p> Step 3: Then click submit</p>
	
	<img alt="" src="<?php echo "$image3" ?>" width="800px" height="500px">
	</div>
	
	<div class="image4">
	<h4 id="left">After the verification process </h4> 
	<p id="left">The RTO management update the process of application in user profile page.</p>
	<p id="left">Step 4 : To view the update status, choose vehicle status in user profile and enter your temporary resistration number.</p>
	<p id="left">Step 5 : If the RTO management updated the status it display here.</p>
	<h4 id="left">After online verification completed, the management give appointment for final verification.</h4> 
	
	<img alt="" src="<?php echo "$image4" ?>" width="800px" height="500px">
	</div>
	
	<div class="video1">
	<h1> Demo video for applying license and check updated status.</h1>
	<video width="1200px" height="500px" controls >
	<source src="<?php echo "$video1" ?>">
	</video>
	</div>
	
	<div class="video2">
	<h1> Demo video for vehicle registration and check updated status.</h1>
	<video width="1200px" height="500px" controls >
	<source src="<?php echo "$video2" ?>">
	</video>
	</div>
	
	
	</div>
	
	</form>
	</body>
	</html>