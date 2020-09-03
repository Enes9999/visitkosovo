<?php

session_start();


$con =mysqli_connect('localhost', 'root', '','userregistration');

mysqli_connect($con,'userregistration');

$name = $_POST['Email'];
$password = $_POST['Password'];

$s ="select * from usertable where name='$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num==1){
	echo "This email is already in use";
}else{
	$reg = "insert into usertable (name, password) values ('$name', '$password')";
	mysqli_query($con, $reg);
	echo "Registration successful";
}
?>