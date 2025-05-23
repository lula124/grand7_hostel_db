<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once('../src/User/user.routes.php'); // Make sure this is included at the top

// Display error or success messages
if (isset($_SESSION['register_error'])) {
    echo '<div class="alert alert-danger">'.htmlspecialchars($_SESSION['register_error']).'</div>';
    unset($_SESSION['register_error']);
}
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 col-12">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Register</h4>
                    <form method="POST" action="../src/User/user.routes.php">
                        <input type="hidden" name="action" value="register">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                        <div class="text-center mt-3">
                            <a href="index.php">Already have an account? Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
