<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['psw'];



$conn= new mysqli('localhost','root','','useraccounts');


if ($conn->connect_error) {
	die("Error " . $conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into users(username,email,password)values(?,?,?,?)");
	$stmt->ind_param('sss', $username,$email,$password);
	$stmt.exec();
	echo "registration successful";
	$stmt.close()
	$conn.close()
}
?>


