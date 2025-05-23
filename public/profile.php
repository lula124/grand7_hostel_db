<?php
require_once('../includes/auth.php');
require_login();
include('../includes/header.php');
include('../includes/navbar.php');
$user = $_SESSION['user'];
?>

<div class="container mt-4">
    <h2>My Profile</h2>
    <div class="card shadow-sm mt-3">
        <div class="card-body">
            <p><strong>Name:</strong> <?php echo htmlspecialchars($user['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            <p><strong>Role:</strong> <?php echo htmlspecialchars($user['role']); ?></p>
            <!-- Add more fields as needed -->
            <a href="edit_profile.php" class="btn btn-warning">Edit Profile</a>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
