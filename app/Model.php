<?php
class Model {
    protected $pdo;
    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=course_db;charset=utf8mb4", "root", "");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}