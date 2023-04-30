<?php
class Database extends PDO
{
    private $host = "localhost";

    /**
     * @return string[]
     */
    protected function DB(): array
    {
        if (strtolower($_SERVER['SERVER_NAME']) == 'localhost') {
            return array(
                "user" => "root",
                "pass" => "",
                "dbname" => "cswebsite"
            );
        } else {
            
            return array(
                "user" => "root",
                "pass" => "",
                "dbname" => "cswebsite"
            );
        }
    }

    public function __construct()
    {
        try {
            parent::__construct("mysql:host=" . $this->host . ";dbname=" . $this->DB()['dbname'], $this->DB()['user'], $this->DB()['pass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            echo "Oops, connection lost, please retry again!";
        }
    }
}
?>





<?php

/*
class Database extends PDO{
    public function __construct(){
        try{
            //we need for constant to connect to our server or database.
        
            //host
                if(!defined("HOSTNAME")) define("HOSTNAME", "localhost");
        
            //Database
                if(!defined("DBNAME")) define("DBNAME", "cswebsite");
         
        
            //user
                if(!defined("USER"))  define("USER", "root");
        
            //password
                if(!defined("PASS")) define("PASS", "");
        
            //we need to create an object to instantiate to PDO class that is built in PHP
            $conn = new PDO("mysql:host=".HOSTNAME."; dbname=".DBNAME.";", USER, PASS);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
            // if ($conn == true) {
            //         echo "database is connected";
            //     }else{
            //         echo "error in connection";
            //     }
        
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
        
        
        
    }
}
*/

?>