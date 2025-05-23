<?php
require_once('../includes/auth.php');
require_admin();
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container mt-4">
    <h2>Manage Students</h2>
    <a href="add_student.php" class="btn btn-primary mb-3">Add Student</a>
    <table class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Room</th>
                <th>Admission Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example row -->
            <tr>
                <td>1</td>
                <td>Priya Sharma</td>
                <td>101</td>
                <td>2024-01-10</td>
                <td>
                    <a href="edit_student.php?id=1" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete_student.php?id=1" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <!-- Loop through students from DB -->
        </tbody>
    </table>
</div>

<?php include('../includes/footer.php'); ?>
