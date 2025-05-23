<?php
// src/Leave/LeaveController.php

require_once(__DIR__ . '/LeaveModel.php');

class LeaveController {
    private $leaveModel;

    public function __construct($conn) {
        $this->leaveModel = new LeaveModel($conn);
    }

    public function listLeaves($student_id) {
        return $this->leaveModel->getLeavesByStudent($student_id);
    }

    public function applyLeave($student_id, $from, $to, $reason) {
        return $this->leaveModel->applyLeave($student_id, $from, $to, $reason);
    }

    public function approveLeave($leave_id) {
        return $this->leaveModel->approveLeave($leave_id);
    }
}
?>
