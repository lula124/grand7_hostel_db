<?php
require_once('../includes/auth.php');
require_login();
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container mt-4">
    <h2>Leave Requests</h2>
    <a href="apply_leave.php" class="btn btn-primary mb-3">Apply for Leave</a>
    <table class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>From</th>
                <th>To</th>
                <th>Reason</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example row -->
            <tr>
                <td>2025-05-10</td>
                <td>2025-05-15</td>
                <td>Family Function</td>
                <td><span class="badge bg-warning">Pending</span></td>
            </tr>
            <!-- Loop through leave requests from DB -->
        </tbody>
    </table>
</div>

<?php include('../includes/footer.php'); ?>
