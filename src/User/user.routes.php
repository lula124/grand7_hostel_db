<?php
// src/User/user.routes.php

require_once(__DIR__ . '/UserController.php');
require_once(__DIR__ . '/../../config/db.php');

$controller = new UserController($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'register') {
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        if ($name === '' || $email === '' || $password === '') {
            $error = "Please fill in all registration fields.";
        } else {
            $success = $controller->register($name, $email, $password);
            if ($success) {
                $_SESSION['register_success'] = "Registration successful! Please log in.";
                header('Location: ../../public/index.php');
                exit();
            } else {
                $error = "Registration failed. Email may already be in use.";
            }
        }
        $_SESSION['register_error'] = $error;
        header('Location: ../../public/register.php');
        exit();
    }
}

?>
