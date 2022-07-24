<?php


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
		
		
		$conn = new mysqli('localhost','root','','rto');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into vehicle(name, mobile, age, address, date, pan_no, birth_place, dealer_name, body_type, vehicle_type, man_date, cylinder, horse_power, chassis_no, fuel_type, seating, weight) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("siisisssssiiissii", $name, $mobile, $age, $address, $date, $pan_no, $birth_place, $dealer_name, $body_type, $vehicle_type, $man_date, $cylinder, $horse_power, $chassis_no, $fuel_type, $seating, $weight );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

?>