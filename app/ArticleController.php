<?php
require_once 'Model.php';
class ArticleController extends Model {
    public function show($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM articles WHERE id = ?");
        $stmt->execute([$id]);
        $article = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$article) die("Статья не найдена");

        $wordCount = str_word_count($article['content']);
        $readingTime = ceil($wordCount / 200);
        if ($readingTime < 1) $readingTime = 1;

        require_once '../views/layout/header.php';
        require_once '../views/article.php';
        require_once '../views/layout/footer.php';
    }
}