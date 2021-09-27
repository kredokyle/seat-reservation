<?php

class Database {
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "seat_reserve");

        if($this->conn->connect_error){
            die($this->conn->connect_error);
        }
    }
}