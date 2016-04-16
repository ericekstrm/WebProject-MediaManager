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
}
