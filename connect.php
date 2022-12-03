<?php
$yourname = $_POST['yourname'];
$email = $_POST['email'];
$number = $_POST['number'];

$conn = new mysqli('localhost','root','mysqli','test');
if($conn->connect_error) {
	die('Connection Failed:'.$conn->connect_error);

}else{
	$stmt =$conn->prepare("insert into registration(yourname,email,number)value(?,?,?)");
	$stmt->bind_param("ssi",$yourname,$email,$number);
	$stmt->execute();
	echo "registration succesfully";
	$stmt->close();
	$conn->close();

}
?>