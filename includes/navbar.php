<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/grand7_hostel/public/dashboard.php">
            <i class="fa-solid fa-hotel"></i> Grand 7 Hostel
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php if ($user): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/grand7_hostel/public/dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/grand7_hostel/public/rooms.php">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/grand7_hostel/public/leave.php">Leave Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/grand7_hostel/public/fee.php">Fees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/grand7_hostel/public/profile.php">
                            <i class="fa-solid fa-user"></i> <?php echo htmlspecialchars($user['name']); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/grand7_hostel/public/logout.php">
                            <i class="fa-solid fa-sign-out-alt"></i> Logout
                        </a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/grand7_hostel/public/index.php">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
