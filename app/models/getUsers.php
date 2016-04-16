<?php

class getUsers {

    public function getUserByName($user = "") {
        $sql = "SELECT * FROM Users WHERE username=:user";
        $db = Database::getInstance();
        return $db->execute($sql, [":user" => $user]);
    }
    
    public function getUserByEmail($email = "") {
        $sql = "SELECT * FROM Users WHERE email=:email";
        $db = Database::getInstance();
        return $db->execute($sql, [":email" => $email]);
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM Users";
        $db = Database::getInstance();
        return $db->execute($sql);
    }

    public function addUser($user, $email, $pass) {
        $sql = "INSERT INTO Users(username, email, password)
                VALUES (:user, :email, :pass)";
        $params = [":user" => $user,
                   ":email" => $email,
                   ":pass" => $pass];
        $db = Database::getInstance();
        return $db->execute($sql, $params);
    }
}
