<?php
// src/Room/room.routes.php

require_once(__DIR__ . '/RoomController.php');
require_once(__DIR__ . '/../../config/db.php');

$controller = new RoomController($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'book') {
    $room_id = $_POST['room_id'];
    $student_id = $_SESSION['user']['id'];
    $success = $controller->bookRoom($room_id, $student_id);
    if ($success) {
        header('Location: ../public/rooms.php?success=1');
    } else {
        $error = "Booking failed";
    }
}
?>
