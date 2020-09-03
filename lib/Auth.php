<?php
session_start();

// Authentication
// Authorization
class Auth {

    public static function user() {
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }

    public static function isAdmin() {
        $user = static::user();
        return ($user && $user['role'] === 'admin');
    }

}