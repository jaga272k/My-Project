
		
		
		
<html lang="en" dir="ltr">
  <head>
  
  <?php
  
if(isset($_POST['submit']))
{
    session_start();
    $_SESSION['x']=1;
	
    $conn=mysqli_connect("localhost","root","","rto");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    @mysqli_select_db("rto",$conn);
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST['aadhar_no'];
        $pass=$_POST['password'];
        $u_id=$_POST['aadhar_no'];
        $_SESSION['u_id']=$u_id;
        $result=mysqli_query($conn,"SELECT aadhar_no,password FROM user where aadhar_no='$name' and password='$pass' ");
       
          
   
        
        if(!$result || mysqli_num_rows($result)==0)
        {
          $message = "Id or Password not Matched.";
          echo "<script type='text/javascript'>alert('$message');</script>";
          
             
        }
        else 
        {
          header("location:userpage.php");
          
        }
    }                
}
?> 


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" type="text/css" href="../css/userlogin.css">
   </head>
<body>
  <div class="wrapper">
    <h2>User login</h2>
    <form action="#"  method="post" enctype="multipart/form-data">
      
      <div class="input-box">
        <input type="text" placeholder="Enter your aadhar_no" name="aadhar_no" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Enter your password" name="password" required>
      </div>
	  
      <div class="input-box button">
        <input type="Submit" name="submit" value="Login Now">
      </div>
      <div class="text">
        <h3>New account? <a href="userregister.php">Register  now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
