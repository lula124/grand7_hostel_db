<?php
// src/Room/RoomModel.php

class RoomModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllRooms() {
        $result = $this->conn->query("SELECT * FROM Room");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAvailableRooms() {
        $result = $this->conn->query("SELECT * FROM Room WHERE Status = 'Available'");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function bookRoom($room_id, $student_id) {
        // Example: Update room and assign to student (implement as needed)
        $stmt = $this->conn->prepare("UPDATE Room SET Current_occupancy = Current_occupancy + 1 WHERE Room_ID = ?");
        $stmt->bind_param("i", $room_id);
        return $stmt->execute();
    }
}
?>
