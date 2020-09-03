<?php
require_once "Database.php";

class Registration {
    public static function signup($data) {
        $db = new Database();

        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        
        $sql = "INSERT INTO users SET name = '$name', email = '$email', password = '$password';";
        $result = $db->query($sql);

        return $result;
    }
} 