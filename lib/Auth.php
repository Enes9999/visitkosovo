<?php
session_start();

require_once 'Database.php';

// Authentication
// Authorization
class Auth {

    /**
     * returns authenticated user
     */
    public static function user() {
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }

    /**
     * checks if user is authenticated 
     */
    public static function isLoggedIn() {
        return static::user() !== null;
    }

    /**
     * checks if authenticated user has role "admin"
     */
    public static function isAdmin() {
        $user = static::user();
        return ($user && $user['role'] === 'admin');
    }

    /**
     * process user authentication
     */
    public static function login($data) {
        $db = new Database();

        $email = $data['email'];
        $password = $data['password'];

        $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1;";
        $result = current($db->find($sql));
        if ($result && $result['password'] == $password) {
            unset($result['password']);
            $_SESSION['user'] = $result;
            return true;
        }
        return false;
    }
}