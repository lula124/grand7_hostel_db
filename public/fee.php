<?php
require_once('../includes/auth.php');
require_login();
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container mt-4">
    <h2>Hostel Fee</h2>
    <table class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>Amount</th>
                <th>Due Date</th>
                <th>Payment Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example row -->
            <tr>
                <td>₹10,000</td>
                <td>2025-06-01</td>
                <td>-</td>
                <td><span class="badge bg-danger">Pending</span></td>
                <td>
                    <a href="pay_fee.php?id=1" class="btn btn-success btn-sm">Pay Now</a>
                </td>
            </tr>
            <!-- Loop through fee records from DB -->
        </tbody>
    </table>
</div>

<?php include('../includes/footer.php'); ?>
