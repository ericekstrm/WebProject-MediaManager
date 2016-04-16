<?php

class Database {
    
    private $dbh;
    private static $instance = null;


    private function __construct() {
        $dbName = "berzanap_eric";
        $dbHost = "berzanappen.se";
        $dbUser = "berzanap_eric";
        $dbPass = "F1skpinn78";
        
        $dsn = "mysql:dbname=" . $dbName . ";host=" . $dbHost . ";charset=utf8"; 
        $attributes  = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
        $this->dbh = new PDO($dsn, $dbUser, $dbPass, $attributes); 
    }
    
    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    
    public function execute($sql, $params = []) {
        $stmt = $this->dbh->prepare($sql);
        
        $stmt->execute($params);
        return $stmt->fetchAll();
    }
}
