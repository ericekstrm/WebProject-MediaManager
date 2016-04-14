<?php

class getUsers {
    
    public function __construct() {
    }
    
    public function getUser($username = "") {
        $sql = "SELECT * FROM Users WHERE username='?'";
        $db = Database::getInstance();
        return $db->execute($sql);
    }
    
    public function getAllUsers() {
        $sql = "SELECT * FROM Users";
        $db = Database::getInstance();
        return $db->execute($sql);
    }
}
