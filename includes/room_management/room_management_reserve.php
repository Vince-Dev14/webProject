<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        require_once '../dbh.inc.php';
        require_once 'room_management_view.php';
        require_once 'room_management_controller.php';

        $room_type_error = "";
        $floor_number_error = "";
        $room_number_error = "";

        $room_type = $_POST["room_typ"];
        $floor_number = $_POST['flr_num'];
        $room_number = $_POST['room_num'];

        
        if(empty($room_type)){
            $room_type_error = "Empty Field*";
        }

        if(empty($floor_number)){
            $floor_number_error = "Empty Field*";
        }

        if(empty($room_number)){
            $room_number_error = "Empty Field*";
        }


        session_start();
        // require_once '../config.php';

        if ($room_type_error || $floor_number_error || $room_number_error) {
            $_SESSION["room_type_error"] = $room_type_error;
            $_SESSION["floor_number_error"] = $floor_number_error;
            $_SESSION["room_number_error"] = $room_number_error;
            header('Location: ../../reservation.php');
            die();
        } else {
            $roomStatus = showRoomAvailabilityStatus($dbconn, $room_type, $floor_number, $room_number);
            foreach ($roomStatus as $room_status) {
                // echo 'room status: ', $room_status;
                // return $room_status;

                if(isRoomAvailable($room_status)){
                    $date = date("Y-m-d");
                    reserveRoom($dbconn, $_SESSION["user_id"], $room_type, $floor_number, $room_number, $date);

                    $_SESSION["reservation_success"] = "Reservation Successful";
                    header('Location: ../../reservation.php');
                    die();
                }
                else{
                    $_SESSION["room_availability_error"] = "Room not available";
                    header('Location: ../../reservation.php');
                    die();
                }
            }
           

            
        }
    } catch (PDOException $e) {
        die("Query failed" . $e->getMessage());
    }
}
