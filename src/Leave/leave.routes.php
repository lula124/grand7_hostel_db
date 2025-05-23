<?php
// src/Leave/leave.routes.php

require_once(__DIR__ . '/LeaveController.php');
require_once(__DIR__ . '/../../config/db.php');

$controller = new LeaveController($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'apply') {
        $student_id = $_SESSION['user']['id'];
        $from = $_POST['from_date'];
        $to = $_POST['to_date'];
        $reason = $_POST['reason'];
        $success = $controller->applyLeave($student_id, $from, $to, $reason);
        if ($success) {
            header('Location: ../public/leave.php?success=1');
        } else {
            $error = "Leave application failed";
        }
    }
    if (isset($_POST['action']) && $_POST['action'] === 'approve' && isset($_POST['leave_id'])) {
        $success = $controller->approveLeave($_POST['leave_id']);
        if ($success) {
            header('Location: ../public/leave.php?approved=1');
        } else {
            $error = "Approval failed";
        }
    }
}
?>
