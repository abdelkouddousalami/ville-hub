<?php 

class Db {

    protected $conn ;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=viellebrief", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(PDOException $ex) {
            echo "Connection failed: " . $ex->getMessage();
          }
    }

}