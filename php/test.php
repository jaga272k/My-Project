



<?php
if(isset($_POST['submit'])){
    $con=mysqli_connect('localhost','root','','rto');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
	
	$result=mysqli_query($con,"SELECT count(name) FROM vehicle ");
      
        $q2=mysqli_fetch_assoc($result);
        $a_no=$q2['a_no'];
		
		
		
}
?>













<form action="#" method="post">
<label><span> </span><input type="submit" name="submit" value="upload" /><label>

<br><br><br>
<label>count:<?php echo "$a_no" ?></label>

</form>