<?php

require_once "./lib/Database.php";

$db = new Database();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1;";
$result = current($db->find($sql));
if ($result && $result['password'] == $password) {
    session_start();
    unset($result['password']);
    $_SESSION['user'] = $result;
    header('location: home.php');
    exit;
} 
exit('end');
//header('location: login.php');