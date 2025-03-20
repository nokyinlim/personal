<?php

/**
 * Notes table example:
 * CREATE TABLE IF NOT EXISTS notes (
  * id INTEGER PRIMARY KEY AUTOINCREMENT,
  * username TEXT NOT NULL,
  * title TEXT NOT NULL,
  * content TEXT NOT NULL,
  * images TEXT,
  * created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  * type TEXT NOT NULL DEFAULT "note"
 * )
 */




class Database {
    private $db;
    
    public function __construct() {
        $this->db = new SQLite3($_SERVER['DOCUMENT_ROOT'] . '/database.db');
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
        $this->db->exec('
            CREATE TABLE IF NOT EXISTS study_sessions (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                username TEXT NOT NULL,
                subject TEXT NOT NULL,
                duration INTEGER NOT NULL,
                date DATE DEFAULT CURRENT_DATE,
                start_time TEXT,
                status TEXT DEFAULT "completed",
                notes TEXT,
                goal_id INTEGER
            )
        ');

        $this->db->exec('
            CREATE TABLE IF NOT EXISTS study_goals (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                username TEXT NOT NULL,
                title TEXT NOT NULL,
                subject TEXT NOT NULL,
                target_date DATE,
                hours_required INTEGER,
                hours_completed INTEGER DEFAULT 0,
                status TEXT DEFAULT "in progress"
            )
        ');
        
        $this->db->exec('
            CREATE TABLE IF NOT EXISTS activities (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                username TEXT NOT NULL,
                title TEXT NOT NULL,
                description TEXT,
                date DATE DEFAULT CURRENT_DATE,
                type TEXT NOT NULL DEFAULT "notification",
                status TEXT DEFAULT "unread",
                link TEXT,
                image TEXT
            )
        ');

        $this->db->exec('
            CREATE TABLE IF NOT EXISTS suggestions (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                username TEXT NOT NULL,
                title TEXT NOT NULL,
                description TEXT,
                type TEXT NOT NULL,
                link TEXT,
                image TEXT,
                status NUMERIC DEFAULT 1,
                source TEXT,
                date DATE DEFAULT CURRENT_TIMESTAMP
            )
        ');

        $this->db->exec('
            CREATE TABLE IF NOT EXISTS tasks (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                username TEXT NOT NULL,
                title TEXT NOT NULL,
                status TEXT DEFAULT "pending",
                priority TEXT DEFAULT "medium",
                due_date DATE,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )
        ');
    }
    
    public function registerUser(string $username, string $email, string $password) {
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
    
    public function loginUser(string $username, string $password) {
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

    // Tasks CRUD operations
    public function addTask(string $username, string $title, string $priority = 'medium', ?string $due_date = null) {
        $stmt = $this->db->prepare('INSERT INTO tasks (username, title, priority, due_date) VALUES (:username, :title, :priority, :due_date)');
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':title', $title, SQLITE3_TEXT);
        $stmt->bindValue(':priority', $priority, SQLITE3_TEXT);
        $stmt->bindValue(':due_date', $due_date, SQLITE3_TEXT);
        
        try {
            $result = $stmt->execute();
            return $this->db->lastInsertRowID();
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function getTasks(string $username, ?string $status = null) {
        if ($status) {
            $stmt = $this->db->prepare('SELECT * FROM tasks WHERE username = :username AND status = :status ORDER BY 
                CASE priority 
                    WHEN "high" THEN 1 
                    WHEN "medium" THEN 2 
                    WHEN "low" THEN 3 
                END, 
                due_date IS NULL, due_date ASC');
            $stmt->bindValue(':username', $username, SQLITE3_TEXT);
            $stmt->bindValue(':status', $status, SQLITE3_TEXT);
        } else {
            $stmt = $this->db->prepare('SELECT * FROM tasks WHERE username = :username ORDER BY 
                CASE priority 
                    WHEN "high" THEN 1 
                    WHEN "medium" THEN 2 
                    WHEN "low" THEN 3 
                END, 
                due_date IS NULL, due_date ASC');
            $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        }
        
        $result = $stmt->execute();
        
        $tasks = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $tasks[] = $row;
        }
        
        return $tasks;
    }
    
    public function updateTaskStatus(int $id, string $status) {
        $stmt = $this->db->prepare('UPDATE tasks SET status = :status WHERE id = :id');
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        $stmt->bindValue(':status', $status, SQLITE3_TEXT);
        
        try {
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function updateTask(int $id, string $title, string $priority, ?string $due_date) {
        $stmt = $this->db->prepare('UPDATE tasks SET title = :title, priority = :priority, due_date = :due_date WHERE id = :id');
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        $stmt->bindValue(':title', $title, SQLITE3_TEXT);
        $stmt->bindValue(':priority', $priority, SQLITE3_TEXT);
        $stmt->bindValue(':due_date', $due_date, SQLITE3_TEXT);
        
        try {
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function deleteTask(int $id) {
        $stmt = $this->db->prepare('DELETE FROM tasks WHERE id = :id');
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        
        try {
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function getTask(int $id) {
        $stmt = $this->db->prepare('SELECT * FROM tasks WHERE id = :id');
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        $result = $stmt->execute();
        
        return $result->fetchArray(SQLITE3_ASSOC);
    }
}
?>