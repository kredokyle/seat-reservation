<?php
include "class-seat.php";
include "class-show.php";
include "class-reservation.php";

$show = new Show;
$show_details = $show->getShow($_GET['show_id']);

$seat = new Seat;
$seats_list = $seat->getAllSeats();

$res = new Reservation;
$reserved_seats_list = $res->getAllReservedSeats($_GET['show_id']);
$reserved_seats_indexed = [];
while($reserved_row = $reserved_seats_list->fetch_assoc()){
    array_push($reserved_seats_indexed, $reserved_row['seat_id']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>RESERVE</title>
</head>
<body>

    <div class="container">
        <h1><?= $show_details['show_title'] ?></h1>
        <form action="reserve-seat.php" method="post">
            <table class="table">
            <?php
                $i = 0;
                echo "<tr>";
                while($seat_row = $seats_list->fetch_assoc()){
                    $i++;
                    if(in_array($seat_row['seat_id'], $reserved_seats_indexed)){
                        echo "<td class='bg-danger'>";
                        echo "<input type='radio' name='seat_id' value='". $seat_row['seat_id']."' disabled>";
                    } else {
                        echo "<td>";
                        echo "<input type='radio' name='seat_id' value='". $seat_row['seat_id']."' required>";
                    }
                    echo $seat_row['seat_id'];
                    echo "</td>";
                    if($i == 10){
                        echo "</tr><tr>";
                        $i = 0;
                    }     
                }

                echo "<input type='hidden' name='show_id' value='". $_GET['show_id']."'>";
            ?>
            </table>
            <button type="submit" class="btn btn-primary">NEXT</button>
        </form>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>