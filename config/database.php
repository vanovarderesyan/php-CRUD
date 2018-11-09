<?php
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "api_db";
    private $username = "annaniks";
    private $password = "annaniks";
    public $conn;
 
    // get the database connection

    public function __construct()
    {
        echo "__construct";
    }

    public function getConnection(){
 
        $this->conn = null;
 
        try{

            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");

        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        //echo $this->conn;

 
        return $this->conn;
    }
}
?>           