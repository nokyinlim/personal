<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once 'database.php';

class Auth {
    private $db;
    
    public function __construct() {
      $this->db = new Database($_SERVER['DOCUMENT_ROOT'] . '/database.db');
    }
    
    public function register(string $username, string $email, string $password, string $confirmPassword) {
        $errors = [];
        
        // Validate inputs
        if (empty($username)) {
            $errors[] = "Username is required";
        }
        
        if (empty($email)) {
            $errors[] = "Email is required";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email is invalid";
        }
        
        if (empty($password)) {
            $errors[] = "Password is required";
        } elseif (strlen($password) < 6) {
            $errors[] = "Password must be at least 6 characters";
        }
        
        if ($password !== $confirmPassword) {
            $errors[] = "Passwords do not match";
        }
        
        if (empty($errors)) {
            $result = $this->db->registerUser($username, $email, $password);
            
            if ($result) {
                return ['success' => true];
            } else {
                return ['success' => false, 'errors' => ["Username or email already exists"]];
            }
        }
        
        return ['success' => false, 'errors' => $errors];
    }
    
    public function login(string $username, string $password) {
        $errors = [];
        
        if (empty($username)) {
            $errors[] = "Username is required";
        }
        
        if (empty($password)) {
            $errors[] = "Password is required";
        }
        
        if (empty($errors)) {
            $user = $this->db->loginUser($username, $password);
            
            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['logged_in'] = true;
                
                return ['success' => true];
            } else {
                return ['success' => false, 'errors' => ["Invalid username or password"]];
            }
        }
        
        return ['success' => false, 'errors' => $errors];
    }
    
    public function logout() {
        $_SESSION = [];
        session_destroy();
    }
    
    public function isLoggedIn() {
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    }
    
    public function getCurrentUser() {
        // Return the user if logged in
        if ($this->isLoggedIn()) {
            return $this->db->getUserById($_SESSION['user_id']);
        }
        
        return null;
    }
}
?>
