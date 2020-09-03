<?php
use PHPMailer\PHPMailer\PHPMailer;


ini_set('SMTP', "smtp.gmail.com");
ini_set('smtp_port', "587");
ini_set('sendmail_from', "artaamjeku@gmail.com");

	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$content = $_POST["content"];

if(!empty($_POST["submit"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$content = $_POST["content"];

	$toEmail = "am44339@ubt-uni.net";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
	
}



define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "contactform");


$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

$conn = new mysqli("localhost", "root", "", "contactform");

mysqli_query($conn, "INSERT INTO tblcontact (user_name, user_email, content) VALUES ('" . $name. "', '" . $email.  "','" . $content);
$insert_id = mysqli_insert_id($conn);
if(!empty($insert_id)) {
$message = "Your contact information is saved successfully";
}
?>