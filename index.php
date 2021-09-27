<?php
session_start();
$_SESSION['user_id'] = 23;

include "class-show.php";

$show = new Show;
$shows_list = $show->getAllShows();

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
<title>SELECT SHOW</title>
</head>
<body class="bg-light">
    <div class="container my-5">
        <h1>Shows</h1>
        <div class="row">
            <?php
            while($show_row = $shows_list->fetch_assoc()){
                $show_id = $show_row['id'];
                $show_title = $show_row['show_title'];
                echo "<div class='col-4'>
                        <div class='card'>
                            <div class='card-body'>
                                <a href='index2.php?show_id=$show_id'>$show_title</a>
                            </div>
                        </div>
                    </div>";
            }
            ?>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>