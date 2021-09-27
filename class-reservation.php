<?php
require_once "db.php";

class Reservation extends Database {
    public function createReservation($user_id, $show_id, $seat_id){
        $sql = "INSERT INTO reservations (`user_id`, show_id, seat_id) VALUES ($user_id, $show_id, '$seat_id')";
        $this->conn->query($sql);
        header("location: ../seat-reserve");
    }

    public function getAllReservedSeats($show_id){
        $sql = "SELECT seat_id FROM reservations WHERE show_id = $show_id";
        $result = $this->conn->query($sql);
        return $result;
    }
}