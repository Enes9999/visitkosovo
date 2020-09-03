<?php

session_start();


$con = mysqli_connect('localhost', 'root', '','userregistration');

mysqli_connect($con);

$name = $_POST['email'];
$password = $_POST['password'];

$s ="select * from usertable where name='$name' && password = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num==1){
	header('location:AboutUs.php');
}else{
	echo "Wrong Username or Password";
}
?>