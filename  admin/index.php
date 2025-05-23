<?php
require_once('../includes/auth.php');
require_admin();
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container mt-4">
    <h2>Admin Dashboard</h2>
    <div class="row mt-4">
        <div class="col-md-4 mb-3">
            <a href="manage_warden.php" class="card card-body text-center shadow-sm text-decoration-none">
                <i class="fa-solid fa-user-tie fa-2x mb-2"></i>
                <h5>Manage Wardens</h5>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="manage_rooms.php" class="card card-body text-center shadow-sm text-decoration-none">
                <i class="fa-solid fa-door-open fa-2x mb-2"></i>
                <h5>Manage Rooms</h5>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="manage_students.php" class="card card-body text-center shadow-sm text-decoration-none">
                <i class="fa-solid fa-users fa-2x mb-2"></i>
                <h5>Manage Students</h5>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="manage_fees.php" class="card card-body text-center shadow-sm text-decoration-none">
                <i class="fa-solid fa-money-bill-wave fa-2x mb-2"></i>
                <h5>Manage Fees</h5>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="reports.php" class="card card-body text-center shadow-sm text-decoration-none">
                <i class="fa-solid fa-chart-bar fa-2x mb-2"></i>
                <h5>Reports & Analytics</h5>
            </a>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
