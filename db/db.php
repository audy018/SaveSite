<?php

include './config/Smarty.php';

class db {
    
    private $host = "localhost";
    private $database ="Saveit";
    private $user = "root";          
    private $senha = "root";
    
    public function connect(){
        
        $con = new PDO("mysql:host=$this->host;dbname=$this->database;", $this->user,  $this->senha);
        return $con;
        
    }
    
    public function execute($sql){
        
        $stm = $this->connect()->prepare($sql);
        return $stm->execute();
          
    }
    
}

  