<?php

require_once 'Database.php';

class Dashboard {

    public static function getContacts() {
        $db = new Database();

        $sql = "SELECT * FROM contacts;";
        $contacts = $db->find($sql);

        return $contacts;
    }
    
    public static function getPlaces() {
        $db = new Database();

        $sql = "SELECT * FROM places;";
        $places = $db->find($sql);

        return $places;
    }

    static $users = [];

    public static function getUsers() {
        if(static::$users) {
            return static::$users;
        }

        $db = new Database();

        $sql = "SELECT * FROM users;";
        static::$users = $db->find($sql);

        return static::$users;
    }

    /**
     * Returns a specific User by ID
     */
    public static function getUserById($id) {
        $users = static::getUsers();
        foreach($users as $user) {
            if($user['id'] === $id) {
                return $user;
            }
        }
        return false;
    }

}