<?php

class getViews {

    public function getViewsByUser($userid = "") {
        $sql = "SELECT * FROM MovieViews WHERE userid=:userid";
        $db = Database::getInstance();
        return $db->execute($sql, [":userid" => $userid]);
    }
    
    public function getViwsByMovie($movieid = "") {
        $sql = "SELECT * FROM MovieViews WHERE movieid=:movieid";
        $db = Database::getInstance();
        return $db->execute($sql, [":movieid" => $movieid]);
    }
    
    public function getViewsByMovieAndUser($userid, $movieid) {
        $sql = "SELECT * FROM MovieViews WHERE userid=:userid AND movieid=:movieid";
        $params = [":userid" => $userid,
                   ":movieid" => $movieid];
        $db = Database::getInstance();
        return $db->execute($sql, $params);
    }

    public function getAllViews() {
        $sql = "SELECT * FROM MovieViews";
        $db = Database::getInstance();
        return $db->execute($sql);
    }

    public function addView($userid, $movieid) {
        $sql = "INSERT INTO MovieViews(userid, movieid)
                VALUES (:userid, :movieid)";
        $params = [":userid" => $userid,
                   ":movieid" => $movieid];
        $db = Database::getInstance();
        return $db->execute($sql, $params);
    }
}
