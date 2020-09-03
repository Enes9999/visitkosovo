<?php
use PHPMailer\PHPMailer\PHPMailer;

ini_set('SMTP', "smtp.gmail.com");
ini_set('smtp_port', "587");
ini_set('sendmail_from', "artaamjeku@gmail.com");

require_once "Database.php";

class Contact {
    public static function send($data) {
        $db = new Database();

        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];

        $sql = "INSERT INTO contacts (name, email, message) VALUES ('" . $name. "', '" . $email.  "','" . $message.");";
        $result = $db->query($sql);
        if($result) {
            $toEmail = "am44339@ubt-uni.net";
            $mailHeaders = "From: " . $name . "<". $email .">\r\n";
            if(mail($toEmail, $message, $mailHeaders)) {
                $message = "Your contact information is received successfully.";
                $type = "success";
            }            
        }

        return $result;
    }
}