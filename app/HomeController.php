<?php
require_once 'Model.php';
class HomeController extends Model {
    public function index() {
        $stmt = $this->pdo->query("SELECT * FROM articles ORDER BY created_at DESC");
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        require_once '../views/layout/header.php';
        require_once '../views/home.php';
        require_once '../views/layout/footer.php';
    }
}