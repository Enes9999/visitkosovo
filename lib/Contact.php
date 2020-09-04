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
        $message = $data['message'];

        $sql = "INSERT INTO contacts (name, email, message) VALUES ('" . $name. "', '" . $email.  "','" . $message."');";
        $result = $db->query($sql);

        return $result;
    }
}