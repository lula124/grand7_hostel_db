<?php
// src/Room/RoomController.php

require_once(__DIR__ . '/RoomModel.php');

class RoomController {
    private $roomModel;

    public function __construct($conn) {
        $this->roomModel = new RoomModel($conn);
    }

    public function listRooms() {
        return $this->roomModel->getAllRooms();
    }

    public function listAvailableRooms() {
        return $this->roomModel->getAvailableRooms();
    }

    public function bookRoom($room_id, $student_id) {
        return $this->roomModel->bookRoom($room_id, $student_id);
    }
}
?>
