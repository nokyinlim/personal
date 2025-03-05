
<?php
class Database {
    private $db;
    
    public function __construct() {
        $this->db = new SQLite3('database.db');
        $this->initTables();
    }
    
    private function initTables() {
        // Create users table if it doesn't exist
        $this->db->exec('
            CREATE TABLE IF NOT EXISTS users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                username TEXT UNIQUE NOT NULL,
                email TEXT UNIQUE NOT NULL,
                password TEXT NOT NULL,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                last_login DATETIME
            )
        ');
    }
    
    public function registerUser($username, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $stmt = $this->db->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);
        $stmt->bindValue(':password', $hashedPassword, SQLITE3_TEXT);
        
        try {
            $result = $stmt->execute();
            return $result ? true : false;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function loginUser($username, $password) {
        $stmt = $this->db->prepare('SELECT id, username, password FROM users WHERE username = :username');
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $result = $stmt->execute();
        
        $user = $result->fetchArray(SQLITE3_ASSOC);
        
        if ($user && password_verify($password, $user['password'])) {
            // Update last login time
            $updateStmt = $this->db->prepare('UPDATE users SET last_login = CURRENT_TIMESTAMP WHERE id = :id');
            $updateStmt->bindValue(':id', $user['id'], SQLITE3_INTEGER);
            $updateStmt->execute();
            
            return $user;
        }
        
        return false;
    }
    
    public function getUserById($id) {
        $stmt = $this->db->prepare('SELECT id, username, email, created_at, last_login FROM users WHERE id = :id');
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        $result = $stmt->execute();
        
        return $result->fetchArray(SQLITE3_ASSOC);
    }
}
?>