<?php

require_once "Database.php";

class Contact {

    /**
     * 
     */
    public static function create($data) {
        $db = new Database();

        if(!isset($data['name']) || !isset($data['email']) || !isset($data['message'])) {
            return false;            
        }

        $name = $data['name'];
        $email = $data['email'];
        $phone = $data ['phone'];
        $message = $data['message'];

        $sql = "INSERT INTO contacts (name, email, phone,message) VALUES ('" . $name. "', '" . $email.  "','" . $phone."','" . $message."');";
        $result = $db->query($sql);

        return $result;
    }
}