<?php
// /includes/auth.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Function to check if user is logged in
function is_logged_in() {
    return isset($_SESSION['user']);
}

// Function to require login (redirect if not logged in)
function require_login() {
    if (!is_logged_in()) {
        header('Location: /grand7_hostel/public/index.php');
        exit();
    }
}

// Function to check admin (assuming 'role' in $_SESSION['user'])
function is_admin() {
    return isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin';
}

// Function to require admin
function require_admin() {
    if (!is_admin()) {
        header('Location: /grand7_hostel/public/dashboard.php');
        exit();
    }
}
?>
