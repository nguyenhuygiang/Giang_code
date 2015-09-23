<?php
require ("Config.php");
class Data{
    protected $conn ="";
    protected $result="";
    public function __construct() {
        $this->conn=  new mysqli(Config::severname,  Config::username,  Config::password, Config::dbname);
        if($this->conn->connect_error){
            die("connect failed").$this->conn->connect_error;
        }
    }
    public function query($sql){
       if($this->conn){
           $this->result= query($sql);
       }
    }
    public function num_rows(){
        if($this->result){
            $rows =num_rows($this->result);
        }
    }
}

