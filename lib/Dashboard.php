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
}