<?php
	//$firstName = $_POST['fullName'];
	//$email = $_POST['email'];
	//$address = $_POST['address'];
	//$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register(fullName, email, address, number) values("gourang", "abc", "ghh", "1234")");
		$stmt->bind_param("sssi", $fullName, $email, $address, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>