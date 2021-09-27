<?php
session_start();

include "class-reservation.php";

$user_id = $_SESSION['user_id'];
$show_id = $_POST['show_id'];
$seat_id = $_POST['seat_id'];

$res = new Reservation;
$res->createReservation($user_id, $show_id, $seat_id);