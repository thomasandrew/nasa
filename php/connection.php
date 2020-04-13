<?php

class Connection {
    
    public $pdo;

    public function __consntruct($pdo) {
        $this->pdo = $pdo;
    }

    public function connect($name, $host, $user, $pass) {
       try {
           $this->pdo = new PDO("mysql:dbname=".$name.";host=".$host,$user,$pass);
           $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
        } catch(PDOException $e) {
           die($e->getMessage());
       }
    } 
}











