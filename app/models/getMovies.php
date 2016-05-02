<?php

class getMovies {
    
    public function __construct() {
    }
    
    public function getMovie($imdbID = "") {
        $sql = "SELECT * FROM MovieDatabase WHERE imdbID = :imdbID";
        $db = Database::getInstance();
        $params = [":imdbID" => $imdbID];
        return $db->execute($sql, $params);
    }
    
    public function getAllMovies() {
        $sql = "SELECT * FROM MovieDatabase";
        $db = Database::getInstance();
        return $db->execute($sql);
    }
    
    public function getTopMovies() {
        $sql = "SELECT * FROM MovieDatabase 
                WHERE imdbRating > 7.5 
                ORDER BY imdbRating DESC
                LIMIT 8";
        $db = Database::getInstance();
        return $db->execute($sql);
    }
    
    public function getComments($imdbID = "") {
        $sql = "SELECT * FROM MovieComments WHERE imdbID = :imdbID";
        $params = [":imdbID" => $imdbID];
        $db = Database::getInstance();
        return $db->execute($sql, $params);
    }
    
    public function addComment($imdbID, $message, $user) {
        $sql = "INSERT INTO MovieComments(imdbID, message, username) VALUES (:imdbID, :message, :user)";
        echo $sql;
        $params = [":imdbID" => $imdbID,
                   ":message" => $message,
                   ":user" => $user];
        var_dump($params);
        $db = Database::getInstance();
        return $db->execute($sql, $params);
    }
}
