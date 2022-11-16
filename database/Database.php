<?php

class DBController
{
    // Connection properties 
    protected $host = "localhost";
    protected $user = "root";
    protected $pass = "";
    protected $db_name = "getshop";

    public $conn = null;
    public function __construct()
    {
        $this->conn= mysqli_connect($this->host, $this->user, $this->pass, $this->db_name);
        if($this->conn->connect_error){
            echo "Fail". $this->conn->connect_error;
        }
    }
    public function __destruct()
    {
        $this->closeConnetion();
    }
    protected function closeConnetion(){
        if($this->conn!=null){
            $this->conn->close();
            $this->conn= null;
        }
    }
}
