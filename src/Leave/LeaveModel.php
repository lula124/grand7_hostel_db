<?php
// src/Leave/LeaveModel.php

class LeaveModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getLeavesByStudent($student_id) {
        $stmt = $this->conn->prepare("SELECT * FROM Leave_Request WHERE Student_ID = ?");
        $stmt->bind_param("i", $student_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function applyLeave($student_id, $from, $to, $reason) {
        $status = 'Pending';
        $stmt = $this->conn->prepare("INSERT INTO Leave_Request (Student_ID, From_date, To_date, Reason, Status) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issss", $student_id, $from, $to, $reason, $status);
        return $stmt->execute();
    }

    public function approveLeave($leave_id) {
        $stmt = $this->conn->prepare("UPDATE Leave_Request SET Status = 'Approved' WHERE Leave_ID = ?");
        $stmt->bind_param("i", $leave_id);
        return $stmt->execute();
    }
}
?>
