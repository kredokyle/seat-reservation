<?php
require_once "db.php";

class Seat extends Database {
    // Used only once to insert all seats to database.
    public function insertSeats(){
        $rows = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
        foreach($rows as $row){
            for($i = 1; $i <= 10; $i++){
                $seat_id = $row . "" . $i;
                
                $sql = "INSERT INTO seats (seat_id) VALUES ('$seat_id');";
                $this->conn->query($sql);
            }
        }
    }

    public function getAllSeats(){
        $sql = "SELECT * FROM seats";
        $result = $this->conn->query($sql);
        return $result;
    }
}