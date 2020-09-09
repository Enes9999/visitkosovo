<?php

require_once "Auth.php";
require_once "Database.php";

class Place {

    /**
     * 
     */
    public static function create($data) {
        $db = new Database();

        if(!isset($data['name']) || !isset($data['photo']) || !isset($data['description'])) {
            return false;            
        }

        $name = $data['name'];
        $photo = $data['photo'];
        $description = $data['description'];

        $user = Auth::user();
        $createdBy = $user['id'];
        
        $sql = "INSERT INTO places (name, description, photo, created_by) VALUES ('" . $name. "', '" . $description.  "','" . $photo."', " . $createdBy.");";
        $result = $db->query($sql);

        return $result;
    }

    /**
     * Deletes specific Place by ID
     */
    public static function delete($id) {
        $db = new Database();

        $sql = "DELETE FROM places WHERE id = {$id}";
        $result = $db->query($sql);

        return $result;
    }

}