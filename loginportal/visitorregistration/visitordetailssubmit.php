<?php

$name = $_POST['name'];
$address = $_POST['address'];
$mobilenumber = $_POST['mobilenumber'];
$carnumber = $_POST['carnumber'];
$flatnumber = $_POST['flatnumber'];
$purpose = $_POST['purpose'];
$frequentvisitor = $_POST['frequentvisitor'];


$conn = new mysqli('mysql.hostinger.in','u267441530_root','myfamily0610','u267441530_spice');
		
		$sql = "INSERT INTO visitor_registration (Name,User_Address, Mobile_Number, Car_Number, Flat_Number, Purpose, Frequent_Visitor)
				VALUES ('$name', '$address', '$mobilenumber', '$carnumber', '$flatnumber', '$purpose', '$frequentvisitor')";
		$conn->query($sql);


?>