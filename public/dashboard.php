<?php
require_once('../includes/auth.php');
require_login();
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container mt-4">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']['name']); ?>!</h2>
    <div class="row mt-4">
        <div class="col-md-3 col-6 mb-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Rooms</h5>
                    <p class="display-6"><?php /* Fetch from DB */ echo "120"; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Occupied</h5>
                    <p class="display-6"><?php echo "95"; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Vacant</h5>
                    <p class="display-6"><?php echo "25"; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Complaints</h5>
                    <p class="display-6"><?php echo "8"; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
