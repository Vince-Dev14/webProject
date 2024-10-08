<?php
require_once './includes/dbh.inc.php';
require_once './includes/room_management/room_management_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="css///reservation.css">
</head>
<body>
    <!-- header -->
    <?php include('./templates/logged_in_header.php'); ?>
    <!-- header -->

    <!-- page content -->
    <div class="reservation_container1">
        <form action="./includes/room_management/room_management_reserve.php" method="post" novalidate>
        <?php 
        $room_data = showRoomTypes($dbconn);
        foreach ($room_data as $rooms) {
           echo '<div class="reservation_container2">
                            <div class="reservation_container3">   
                                <div class="reservation_container4">
                                <ul>     
                                <li>'.$rooms['room_type'].'</li>
                                <li>'.$rooms['max_capacity'].'</li>
                                <li>'.$rooms['price'].'</li>
                                <li>'.$rooms['room_description'].'</li>
                                </ul>  
                                <input type="hidden" name="selected_room" value="'.$rooms['room_type'].'">
                                </div>      
                                <div class="reservation_container5">                                                             
                                 <button id="reserve_btn">Reserve</button>
                                 <button id="inquire_btn">Inquire</button>          
                                 </div>
                            </div>                   
                        </div>';
        
                    };
        ?> 
        </form>
        <!-- <input type="hidden" name="selected_room" value="'.$rooms['price'].'">      -->
        <!-- <input type="submit" value="Reserve" id="reserve_btn">  -->
        <!-- <button id="reserve_btn" type="submit">Reserve</button>   -->
        <!-- <div class="reservation_container6">
            <div class="reservation_container7"></div>
        </div> -->
        
        
        
        <ul></ul>
       </ul>
    </div>
</body>
</html>

