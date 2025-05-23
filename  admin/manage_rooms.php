<?php
require_once('../includes/auth.php');
require_admin();
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container mt-4">
    <h2>Manage Rooms</h2>
    <a href="add_room.php" class="btn btn-primary mb-3">Add Room</a>
    <table class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>Room Number</th>
                <th>Type</th>
                <th>Floor</th>
                <th>Capacity</th>
                <th>Occupancy</th>
                <th>Status</th>
                <th>Warden</th>
                <th>Actions</th>
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
                <td>Anjali Mehra</td>
                <td>
                    <a href="edit_room.php?id=101" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete_room.php?id=101" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <!-- Loop through rooms from DB -->
        </tbody>
    </table>
</div>

<?php include('../includes/footer.php'); ?>
