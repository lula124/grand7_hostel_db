<?php
// src/User/UserController.php

require_once(__DIR__ . '/UserModel.php');

class UserController {
    private $userModel;

    public function __construct($conn) {
        $this->userModel = new UserModel($conn);
    }

    public function login($email, $password) {
        $user = $this->userModel->findByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            // Set session
            $_SESSION['user'] = [
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'role' => $user['role']
            ];
            return true;
        }
        return false;
    }

    public function register($name, $email, $password, $role = 'student') {
        // Check if email already exists
        if ($this->userModel->findByEmail($email)) {
            return false; // Email already exists
        }
        return $this->userModel->create($name, $email, $password, $role);
    }
    
}
?>
