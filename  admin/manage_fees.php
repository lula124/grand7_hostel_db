<?php
require_once('../includes/auth.php');
require_admin();
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container mt-4">
    <h2>Manage Fees</h2>
    <table class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>Student</th>
                <th>Amount</th>
                <th>Due Date</th>
                <th>Payment Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example row -->
            <tr>
                <td>Priya Sharma</td>
                <td>₹10,000</td>
                <td>2025-06-01</td>
                <td>-</td>
                <td><span class="badge bg-danger">Pending</span></td>
                <td>
                    <a href="edit_fee.php?id=1" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete_fee.php?id=1" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <!-- Loop through fees from DB -->
        </tbody>
    </table>
</div>

<?php include('../includes/footer.php'); ?>
