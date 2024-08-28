<?php
session_start();
require_once 'include/dbcon.php';

class User {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function login($email, $password) {
        if (empty($email) || empty($password)) {
            return 'Please provide both your email and password for login.';
        }

        $pdoQuery = "SELECT * FROM user WHERE email = ?";
        $pdoResult = $this->pdo->prepare($pdoQuery);
        $pdoResult->execute([$email]);
        $user = $pdoResult->fetch(PDO::FETCH_ASSOC);

        $count = $pdoResult->rowCount();

        if ($count>0) {

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
    
                $role = $user['role'];
                echo $role;
                if ($role == 'student') {
                    header("location:student/student_dashboard.php");
                    exit;
                } elseif ($role == 'university') {
                    header("location:university/university_dashboard.php");
                    exit;
    
                }
                // if ($rememberMe) {
                //     $this->setRememberMe($email);
                // }
    
        
            }
        }

         else {
            return $user ? 'The email or password provided is incorrect.' : 'The entered email is not yet registered.';
        }
    }

    // private function setRememberMe($email) {
    //     $token = bin2hex(random_bytes(16));
    //     setcookie('remember_me', $token, time() + (86400 * 30), "/"); // 30 days
    //     $this->storeToken($email, $token);
    // }

    // private function storeToken($email, $token) {
    //     $query = "INSERT INTO remember_me (email, token) VALUES (?, ?) ON DUPLICATE KEY UPDATE token = ?";
    //     $stmt = $this->pdo->prepare($query);
    //     $stmt->execute([$email, $token, $token]);
    // }
}

