<?php
require_once('../includes/auth.php');
require_login();
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container mt-4">
    <h2>Transportation Usage</h2>
    <a href="request_transport.php" class="btn btn-primary mb-3">Request Transportation</a>
    <table class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>Pickup Point</th>
                <th>Dropoff Point</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example row -->
            <tr>
                <td>Hostel Main Gate</td>
                <td>City Center</td>
            </tr>
            <!-- Loop through transportation usage from DB -->
        </tbody>
    </table>
</div>

<?php include('../includes/footer.php'); ?>
