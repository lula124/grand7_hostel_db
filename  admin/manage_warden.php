<?php
require_once('../includes/auth.php');
require_admin();
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container mt-4">
    <h2>Manage Wardens</h2>
    <a href="add_warden.php" class="btn btn-primary mb-3">Add Warden</a>
    <table class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example row -->
            <tr>
                <td>1</td>
                <td>Mrs. Anjali Mehra</td>
                <td>Female</td>
                <td>9876543210</td>
                <td>
                    <a href="edit_warden.php?id=1" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete_warden.php?id=1" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <!-- Loop through wardens from DB -->
        </tbody>
    </table>
</div>

<?php include('../includes/footer.php'); ?>
