<?php
require_once "Database.php";

class Registration {
    public static function signup($data) {
        $db = Database::getInstance();

        if(!isset($data['name']) || !isset($data['email']) || !isset($data['password'])) {
            return false;            
        }

        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        
        $sql = "INSERT INTO users SET name = '$name', email = '$email', password = '$password';";
        $result = $db->query($sql);

        return $result;
    }
} 