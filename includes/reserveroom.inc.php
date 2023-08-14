<?php

    require('connect.inc.php');
     
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $room_id = $_POST['room_id'];

        $sql = "INSERT INTO reservation (room_id) VALUES ('$room_id')";
        
        if(mysqli_query($conn, $sql)){ 
            header("Location: ../booking.php");
        }else{ 
            header("Location: ../booking.php");
        }
    }
