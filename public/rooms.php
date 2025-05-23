<?php
require_once('../includes/auth.php');
require_login();
include('../includes/header.php');
include('../includes/navbar.php');

// Example: Fetch rooms from DB
// $rooms = ...;
?>

<div class="container mt-4">
    <h2>Rooms</h2>
    <table class="table table-bordered table-hover mt-3">
        <thead class="table-primary">
            <tr>
                <th>Room Number</th>
                <th>Type</th>
                <th>Floor</th>
                <th>Capacity</th>
                <th>Current Occupancy</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example row -->
            <tr>
                <td>101</td>
                <td>Single</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>Available</td>
                <td>
                    <button class="btn btn-success btn-sm">Book</button>
                </td>
            </tr>
            <!-- Loop through $rooms to display all rooms -->
        </tbody>
    </table>
</div>

<?php include('../includes/footer.php'); ?>
