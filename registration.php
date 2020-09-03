<?php
require_once "./lib/Database.php";

$db = new Database();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users SET name = '$name', email = '$email', password = '$password';";
$result = $db->query($sql);
if($result)
    exit('OK!');
else 
    exit('FAILED!');

/*
    session_start();
    header('location:login.php');

    $con = mysqli_connect('localhost', "root", "");
    mysqli_select_db($con, "usersignup");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $s = "select * from usersignuptable where name = '$name' ";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){

        echo "Username is already taken";
    }else {
        $reg = "insert into usersignuptable(name, email, password) values ('$name', '$email', '$pass')";
        mysqli_query($con, $reg);
        echo "Registration Successful";
    }
*/
?>