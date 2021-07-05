<?php
$Email=$_POST["email"];
$Password=$_POST["password"];

$conn = mysqli_connect("localhost","root","","jyoti");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 else {
		$stmt = $conn->prepare("insert into info(email,password) values(?, ?)");
		$stmt->bind_param("ss", $Email,$Password);
		$execval = $stmt->execute();
		echo $execval;
	
    sleep(2);
    header('location: phpworkk.html');
		$stmt->close();
		$conn->close();
	}
?>
